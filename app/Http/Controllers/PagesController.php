<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Auth;

class PagesController extends Controller
{
    public function settings(){
        $userId = Auth::id();
        $currentcurrency = DB::table('users')->where('id', $userId)->value('currency');
        $incomeday = DB::table('users')->where('id', $userId)->value('income_day');
        return view('settings', compact('currentcurrency','incomeday'));
    }
    public function about(){
        return view('about');
    }
    public function expenses(){
        $userId = Auth::id();
        $categories = DB::table('categories')->get(); // Categories list from DB
        $totalExpenses = DB::table('expenses')->where('users_id', $userId)->sum('amount'); // Gets sum of all expenses
        $income = DB::table('users')->where('id', $userId)->value('total_income');

        $categoriesCount = DB::table('categories')->count();
        $categoriesAmount = [];
        for ($i = 1;$i<=$categoriesCount;$i++){
            $categoriesAmount[$i] = DB::table('expenses')->where('users_id', $userId)->where('categories_id', $i)->sum('amount');
        }
        return view('expenses', compact('categories','totalExpenses','income',
                        'categoriesCount','categoriesAmount'));
    }
    public function budget(){
        $userId = Auth::id();
        $totalIncome = DB::table('users')->where('id', $userId)->value('total_income');

        $categoriesCount = DB::table('categories')->count();
        $categoriesNames = [];
        $budgetAmounts = [];
        for ($i = 1;$i<=$categoriesCount;$i++){
            $categoriesNames[$i] = DB::table('categories')->where('id', $i)->value('name');
        }
        $budgetId = DB::table('budget')->where('users_id', $userId)->value('id');
        for ($i = 1;$i<=$categoriesCount;$i++){
            $budgetAmounts[$i] = DB::table('budgets_categories')->where('budget_id', $budgetId)->
                                where('categories_id', $i)->value('amount');
        }
        return view('budget', compact('totalIncome', 'categoriesNames','categoriesCount',
                    'budgetAmounts'));
    }
    public function currency_converter(){
        return view('currency_converter');
    }
    public function report(){
        $users = DB::select('select * from expenses');
        return view('report', compact('users'));
    }
    public function graphs(){
        return view('graphs');
    }
    public function welcome(){
        return view('welcome');
    }
}
