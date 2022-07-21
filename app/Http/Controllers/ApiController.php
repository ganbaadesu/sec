<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function check_data(Request $request){
        $data = DB::table($request->table)->where($request->column,'=', $request->value)->get();
        if($data->isEmpty()) return response()->json(['data'=>NULL]);
        return response()->json(['data'=>'Found']);
    }
    public function history(Request $request){
        $data = DB::table('logs')->where('created_at', '>', $request->start_date ,'and', $request->column, '=', $request->value)->get();
        return response()->json(['data'=>$data]);
    }
}
