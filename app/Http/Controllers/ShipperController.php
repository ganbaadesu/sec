<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShipperController extends Controller
{
    public function __construct()
    {
        $this->middleware('shipper');
    }
    public function index()
    {
        return view('shipper.shipper_home');
    }
}
