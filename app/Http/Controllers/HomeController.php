<?php

namespace App\Http\Controllers;
use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\order;
use App\Models\Container;
use App\Models\ReturnID;
use App\Models\Vehicle;
use App\Models\log;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function home(){
        $usertype = strtolower(Auth::user()->usertype);
        if($usertype=='admin') return app(AdminController::class)->home();
        
        $permissions = json_decode(((DB::select("select permission from permissions where usertype=:usertype", ["usertype"=>$usertype]))[0])->permission);
        
        $data = array();

        $message = NULL;

        $orders = (Order::all());
        $containers = json_decode(Container::all());
        $return = json_decode(ReturnID::all());
        foreach($orders as $order){
            foreach($containers[0] as $name => $value){
                $order[$name] = $value;
            }
            foreach($return[0] as $name => $value){
                if($name == 'ReturnVehicleNo'){
                    $order['WagonNo'] = $value;
                    $vehicleType = DB::select('select VehicleType from vehicles where VehicleNo=:vehicle', ['vehicle'=>$value])[0];
                    foreach($vehicleType as $v){
                        $order['Mode']=$v;
                    }
                    continue;
                }
                $order[$name] = $value;
            }
        }
        return view('user.user')->with("permissions", $permissions)->with('orders', $orders)->with('message', $message);
    }

    public function update_ref(Request $request){
        date_default_timezone_set('Asia/Ulaanbaatar');
        $changed = False;
        $token  = csrf_token();
        if($request->data != null){
            $old_data = json_decode(json_encode(DB::select('select* from orders where RefNo=:RefNo', ['RefNo'=>$request->data['RefNo']])[0]), true);
            foreach($request->data as $key => $value){
                if($key =='RefNo') continue;
                try
                {
                    try{
                        DB::table('logs')->insert(['user_id' => (auth::user()->id), 'column_name'=>$key, 'new_data'=>$value, 'old_data'=>$old_data[$key]]);
                    }
                    catch(\Exception $e){return $e;}
                    DB::table('orders')->where('RefNo', $request->data['RefNo'])->update([$key=>$value]);
                }
                catch(\Exception $e){
                    return $e;
                }
            }
            return "Done";
        }
        $request -> request ->remove('_token');
        $old_data = json_decode(json_encode(DB::select('select* from orders where RefNo=:RefNo', ['RefNo'=>$request->RefNo])[0]), true);
        foreach($request->all() as $key => $value){
            if($key == 'ReturnDate') break;
            if($old_data[$key] != $value) {
                try
                {
                    try{
                        DB::table('logs')->insert(['user_id' => (auth::user()->id), 'column_name'=>$key, 'new_data'=>$value, 'old_data'=>$old_data[$key]]);
                    }
                    catch(\Exception $e){return $e;}
                    DB::table('orders')->where('RefNo', $request->RefNo)->update([$key=>$value]);
                    $changed = True;
                }
                catch(\Exception $e){
                    return $e;
                }
            }
            $request -> request ->remove($key);
        }
        $ReturnID = $old_data['ReturnID'];
        $old_data =json_decode(json_encode(DB::select('select* from ReturnID where id=:id', ['id'=>$ReturnID])[0]), true);
        foreach($request->all() as $key => $value){
            if($old_data[$key] != $value){
                try
                {
                    try{
                        DB::table('logs')->insert(['user_id' => (auth::user()->id), 'column_name'=>$key, 'new_data'=>$value, 'old_data'=>$old_data[$key]]);
                    }
                    catch(\Exception $e){return $e;}
                    DB::table('ReturnID')->where('ReturnID', $ReturnID)->update([$key=>$value]);
                    $changed = True;
                }
                catch(\Exception $e){
                    return $e;
                }
            }
        }
        if($changed) return redirect()->back()->with('success', 'Амжилттай засагдлаа');
        return redirect()->back()->with('error', 'Өөрчлөлт хийгдээгүй байна, ахин шалгана уу...?');
    }
    public function settings(){
        return view('auth.settings');
    }
}