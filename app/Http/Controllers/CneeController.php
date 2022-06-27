<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CneeController extends Controller
{
    public function __construct()
    {
        $this->middleware('cnee');
    }
    public function index()
    {
        return view('cnee.cnee_home');
    }
}

