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
        $orders = Order::all();
        return view('admin.admin_home')->with('orders', $orders)->with("success", "Yes");
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
        $usertype = 'operator';
        return view('admin.user.permission')->with('permissions', $permission)->with('usertype', $usertype);
    }


    public function add_user(Request $request){
        $user = (object)[];
        $user->name = $request->name;
        $user->email = $request->email;
        $user->usertype = $request->usertype;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->name .'123456');
        User::create(json_decode(json_encode($user), true));
        return redirect("/user/add/user")->with('success', 'Амжилттай нэмэгдлээ');
    }

    public function update_user_permission(Request $request){
        dd($request->all());
        $permission = Permission::find($request->id);
        $permission->update($request->all());
        return redirec()->back()->with('success', 'Амжилттай засагдлаа');
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
            $Return->Vehicle_No = $request->Vehicle_No;
            $Return->Destination = $request->Destination;
            $Return->ATA_ZU = $request->ATA_ZU;
            $Return->ATD_ZU = $request->ATD_ZU;
            $Return->Transfer_No = $request->Transfer_No;
            $Return->Free_Days = $request->Free_Days;
        $Order->Ref_ID = $request->Ref_ID;
        $Order->BI_No = $request->BL_No;
        $Order->Cntr_No = $request->Cntr_No;
        $Order->Cargo_Name = $request->Cargo_Name;
        $Order->Cnee_Name = $request->Cnee_Name;
        $Order->Cnee_Phone = $request->Cnee_Phone;
        $Order->Port_Of_Loading = $request->Port_Of_Loading;
        $Order->Loading_date = $request->Loading_date;
        $Order->ATA_VIA_port = $request->ATA_VIA_port;
        $Order->ATD_VIA_port = $request->ATD_VIA_port;
        $Order->Vehicle_No = $request->Vehicle_No;
        $Order->ATA_ZU = $request->ATA_ZU;
        $Order->ATD_ZU = $request->ATD_ZU;
        $Order->ZU_Vehicle_No = $request->ZU_Vehicle_No;
        $Order->ATA_FD = $request->ATA_FD;
        $Order->Rel_Ins= $request->Rel_Inc;
        $Order->Date_Release = $request->Date_Release;
        $Order->Inst_Given_Date = $request->Inst_Given_Date;
        $Order->Shipper = $request->Shipper;
        $Order->Agent = $request->Agent;
        $Order->Payment = $request->Payment;
        $Order->Collect_Amount = $request->Collect_Amount;
        $Order->China_Agent = $request->China_Agent;
        $Order->ReturnID = (ReturnID::create($Return->all()))->id;
        Order::create($Order->all());
        return redirect()->back()->with('success', 'Амжилттай нэмэгдлээ');
    }

}
