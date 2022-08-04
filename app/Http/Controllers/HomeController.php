<?php

namespace App\Http\Controllers;
use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\order;
use App\Models\Container;
use App\Models\ReturnID;
use App\Models\Vehicle;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function __construct(){$this->middleware('auth');}

    public function map(){
        $all_order = Order::all();
        $ports = array();
        foreach($all_order as $order){
            
        }
        if(strtolower(Auth::user()->usertype)=='admin') return view('admin.admin_map');
        return view('user.user_map');
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

    public function update_ref(Request $request, $column){
        date_default_timezone_set('Asia/Ulaanbaatar');
        $ref = Order::find($request->id);
        $logs->user_id = Auth::user()->id;
        $logs->column=$column;
        $logs->old_data=$ref->$column;
        $logs->new_data=$request->$column;
        Log::create($logs->all());
        $ref->update($request->all());
        return redirec()->back()->with('success', 'Амжилттай засагдлаа');
    }
    public function settings(){
        return view('auth.settings');
    }
}