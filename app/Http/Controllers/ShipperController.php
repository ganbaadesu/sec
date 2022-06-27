<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ShipperController extends Controller
{
    public function __construct()
    {
        $this->middleware('shipper');
    }
    public function index()
    {
        $permissions = json_decode(((DB::select("select permission from permissions where usertype='shipper'"))[0])->permission);
        return view('shipper.shipper_home')->with("data", $permissions);
    }
}
