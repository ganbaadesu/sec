<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Container;
use App\Models\ReturnID;
use App\Models\Vehicle;
use App\Models\order;
use App\Models\log;
use App\Models\permissions;

class AdminController extends Controller
{
    public function __construct()
    {
        date_default_timezone_set('Asia/Ulaanbaatar');
        $this->middleware('admin');
    }

    public function index(){
        $orders = order::all();
        return view('admin.admin_home')->with('orders', $orders);
    }

    public function list(){
        $users = User::all();
        return view('admin.user.list')->with('users', $users);
    }
    public function user(){
        return view('admin.user.user');
    }
    public function permission(){
        $permission = Permissions::all();
        $permissions = array();
        foreach($permission as $item){
            $permissions[$item["usertype"]]=$item["permission"];
        }
        return view('admin.user.permission')->with('permissions', $permissions);
    }


    public function add_user(Request $request){
        $user = (object)[];
        $user->name = $request->name;
        $user->email = $request->email;
        $user->usertype = $request->usertype;
        $user->phone = $request->phone;
        $request->request->add(["password"=>Hash::make($request->name .'123456')]);
        User::create($request->all());
        return redirect("/user/add/user")->with('success', 'Амжилттай нэмэгдлээ');
    }

    public function update_user_permission(Request $request){
        $data = $request->all();
        try{
            DB::table('permissions')->where('usertype', $data["usertype"])->update(['permission'=>$data["CheckBox_Permissions"]]);
        }
        catch(\Exception $e){
            DB::table('permissions')->where('usertype', $data["usertype"])->update(['permission'=>NULL]);
        }
            return redirect()->back()->with('success', 'Амжилттай хадгалагдлаа');
    }

    public function ref(){
        return view('admin.ref.ref');
    }

    public function cntr(){
        $containers = Container::all();
        return view('admin.ref.ctnr')->with('containers', $containers);
    }

    public function vehicle(){
        $vehicles = Vehicle::all();
        return view('admin.ref.vehicle')->with('vehicles', $vehicles);
    }


    public function add_cntr(Request $request){
        Container::create($request->all());
        return redirect()->back()->with('success', 'Амжилттай нэмэгдлээ');
    }

    public function add_vehicle(Request $request){
        Vehicle::create($request->all());
        return redirect("/add/vehicle")->with('success', 'Амжилттай нэмэгдлээ');
    }

    public function history(){
        return view('admin.history')->with('logs', Log::all());
    }

    public function add_ref(Request $request){
        //ReturnID
            $Return["ReturnVehicleNo"] = $request->ReturnVehicleNo;
            $Return["Destination"] = $request->Destination;
            $Return["Return_ATA_ZU"] = $request->Return_ATA_ZU;
            $Return["Return_ATD_ZU"] = $request->Return_ATD_ZU;
            $Return["TransferNo"] = $request->TransferNo;
        $Order["RefID"] = $request->RefID;
        $Order["BINo"] = $request->BINo;
        $Order["CntrNo"] = $request->CntrNo;
        $Order["CargoName"] = $request->CargoName;
        $Order["CneeName"] = $request->CneeName;
        $Order["CneePhone"] = $request->CneePhone;
        $Order["PortOfLoading"] = $request->PortOfLoading;
        $Order["LoadingDate"] = $request->LoadingDate;
        $Order["ATA_VIA_port"] = $request->ATA_VIA_port;
        $Order["ATD_VIA_port"] = $request->ATD_VIA_port;
        $Order["VehicleNo"] = $request->VehicleNo;
        $Order["ATA_ZU"] = $request->ATA_ZU;
        $Order["ATD_ZU"] = $request->ATD_ZU;
        $Order["ZUVehicleNo"] = $request->ZUVehicleNo;
        $Order["ATA_FD"] = $request->ATA_FD;
        $Order["RelIns"]= $request->RelIns;
        $Order["DateRelease"] = $request->DateRelease;
        $Order["InstGivenDate"] = $request->InstGivenDate;
        $Order["Shipper"] = $request->Shipper;
        $Order["Agent"] = $request->Agent;
        $Order["Payment"] = $request->Payment;
        $Order["CollectAmount"] = $request->CollectAmount;
        $Order["ChinaAgent"] = $request->ChinaAgent;
        $Order["FreeDays"] = $request->FreeDays;
        $Order["ReturnID"] = (ReturnID::create($Return))->id;
        $Order["RefType"] = $request->RefType;
        Order::create($Order);
        return redirect()->back()->with('success', 'Амжилттай нэмэгдлээ');
    }

}
