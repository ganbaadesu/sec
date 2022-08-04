<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function check_data(Request $request){
        $data = DB::table($request->table)->where($request->column,'=', $request->value)->get();
        if($data->isEmpty()) return response()->json(['data'=>NULL]);
        return response()->json(['data'=>$data]);
    }
    public function history(Request $request){
        $data = DB::table('logs')->where('created_at', '>', $request->start_date ,'and', $request->column, '=', $request->value)->get();
        return response()->json(['data'=>$data]);
    }
    public function search_data(Request $request){
        $query = 'select* from orders where ' .$request->all()['query'];

        try{
            $data = DB::select($query);
            return response()->json(['data'=>$data]);
        }
        catch(\Exception $e){
            return response()->json(['data'=>$e]);
        }
    }
}
