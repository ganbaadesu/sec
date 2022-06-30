<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\Container;
use App\Models\Customer;
use App\Models\IncomeID;
use App\Models\ReturnID;
use App\Models\UBport;
use App\Models\Vehicle;
use App\Models\ZUport;
use App\Models\order;
use App\Models\permissions;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index(){
        return view('admin.admin_home');
    }
    public function user_management(){
        $users = User::all();
        $permissions = Permissions::all();
        return view('admin.user_management')->with('users', $users)->with('permissions', $permissions);
    }
    public function add_user(Request $request){
        try{
            User::create($request->all());
            return redirect()->back()->with('success', 'Амжилттай нэмэгдлээ');
        }
        catch(\Exception $exception){
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
    public function update_user_permission(Request $request){
        return redirec()->back()->with('success', 'Амжилттай засагдлаа');
    }
    public function ref_management(){
        return view('admin.ref_management');
    }
    public function add_cntr(Request $request){
        Container::create($request->all());
        return redirect()->back()->with('success', 'Амжилттай нэмэгдлээ');
    }
    public function add_vehicle(Request $request){
        Vehicle::create($request->all());
        return redirect()->back()->with('success', 'Амжилттай нэмэгдлээ');
    }
    public function post_ref(Request $request){
        //UBportID
            $UBport->ada_fd = $request->ub_ada_fd;
            $UBport->Rel_Inst = $request->ub_Rel_Inst;
            $UBport->Date_Release = $request->Date_Release;
            $Order->UBportID = (UBport::create($UBport->all()))->id;
        //CustomerID
            $Customer->customer_name=$request->customer_name;
            $Customer->customer_phone=$request->customer_phone;
            $Order->CustomerID = (Customer::create($Customer->all()))->id;
        //ZUportID
            $ZUport->ata=$request->zu_ata;
            $ZUport->atd=$request->zu_atd;
            $ZUport->vehicleno=$request->VehicleNo;
            $Order->ZUportId = (ZUport::create($ZUport->all()))->id;
        //ReturnID
            $Return->shipper=$request->shipper;
            $Return->agent=$request->agent;
            $Return->ReturnDate=$request->ReturnDate;
            $Return->VehicleNo=$request->Return_VehicleNo;
            $Return->Destination=$request->destination;
            $Return->ATA=$request->ret_ata;
            $Return->ATD=$request->ret_atd;
            $Order->ReturnID = (ReturnID::create($Return->all()))->id;
        //IncomeID
            $Income->port_of_loading=$request->port_of_loading;
            $Income->LoadingDate=$request->loading_date;
            $Income->ATA_via=$request->ata_via;
            $Income->ATD_via=$request->atd_via;
            $Income->VehicleNo=$request->VehicleNo;
            $Order->IncomeID = (IncomeID::create($Income->all()))->id;
        //ContainerNO
            $Order->ContainerNo = $request->ContainerNo;
        //CargoName
            $Order->CargoName = $request->cargo_name;
        //Payment
            $Order->Payment = $request->payment;
        Order::create($Order->all());
        return redirect()->back()->with('success', 'Амжилттай нэмэгдлээ');
    }
}
