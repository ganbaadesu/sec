<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index()
    {
        return view('admin.admin_home');
    }
    public function add_user(){
        return view('admin.admin_add_user');
    }
    public function post_user(Request $request){
        return redirect()->back()->with('success', 'Амжилттай нэмэгдлээ');
    }
}
