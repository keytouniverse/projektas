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
    public function addIncome(Request $request){
        $userId = Auth::id();
        $incomeAmount = $request->input('income');
        DB::table('users')->where('id', $userId)->increment('total_income', $incomeAmount);
        return back();
    }
    public function addBudget(Request $request){
        $userId = Auth::id();
        $budgetId = DB::table('budget')->where('users_id', $userId)->value('id');
        if (DB::table('budget')->where('users_id', $userId)->first() == null){
            DB::table('budget')->insert(['users_id'=>$userId]);
        }
        if (DB::table('budgets_categories')->where('budget_id', $budgetId)->exists()){
            app('App\Http\Controllers\UpdateController')->updateBudgetValues($request);
            return back();
        }
        $data = $request->all();
        $count = 1;
        $categoriesCount = DB::table('categories')->count();
        for ($i=1;$i<=$categoriesCount;$i++){
            $array = array('categories_id'=>$count,'budget_id'=>$userId,'amount'=>$data[$count]);
            DB::table('budgets_categories')->insert($array);
            $count++;
        }
        return back();
    }
}
