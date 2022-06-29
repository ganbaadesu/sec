<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\User;
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
        return redirect()->back()->with('success', 'Амжилттай нэмэгдлээ');
    }
    public function update_user_permission(Request $request){
        return redirec()->back()->with('success', 'Амжилттай засагдлаа');
    }
    public function add_ref(){
        return view('admin.add_ref');
    }
    public function post_ref(Request $request){
        return redirect()->back()->with('success', 'Амжилттай нэмэгдлээ');
    }
}
