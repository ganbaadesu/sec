<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('account');
    }
    public function index()
    {
        $permissions = json_decode(((DB::select("select permission from permissions where usertype='account'"))[0])->permission);
        return view('account.account_home')->with("data", $permissions);
    }
}
