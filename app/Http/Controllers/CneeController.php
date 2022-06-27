<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CneeController extends Controller
{
    public function __construct()
    {
        $this->middleware('cnee');
    }
    public function index()
    {
        $permissions = json_decode(((DB::select("select permission from permissions where usertype='cnee'"))[0])->permission);
        return view('cnee.cnee_home')->with("data", $permissions);
    }
}

