<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Auth;

class AddController extends Controller
{
    public function addExpense(Request $request){
        $amountt = $request->input('amount');
        $categoryid = $request->input('category');
        $userId = Auth::id();
        $data = array('amount'=>$amountt,'categories_id'=>$categoryid,'users_id'=>$userId);
        DB::table('expenses')
            ->insert($data);
        return back();
    }
}
