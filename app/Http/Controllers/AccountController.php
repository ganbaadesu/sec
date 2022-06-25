<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('account');
    }
    public function index()
    {
        return view('account.account_home');
    }
}
