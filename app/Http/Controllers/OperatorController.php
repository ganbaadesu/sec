<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OperatorController extends Controller
{
    public function __construct()
    {
        $this->middleware('operator');
    }
    public function index()
    {
        $permissions = json_decode(((DB::select("select permission from permissions where usertype='operator'"))[0])->permission);
        return view('operator.operator_home')->with("data", $permissions);
    }
}
