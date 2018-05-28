<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Auth;
use Carbon\Carbon;

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
    public function dailyExpenses(){
        
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
        $userId = Auth::id();
        $expensesCount = DB::table('expenses')->count();
        $categoriesNames = [];
        for ($i = 1;$i<=$expensesCount;$i++){
            $categoriesID[$i] = DB::table('expenses')->where('id',$i)->value('categories_id');
        }

        $categoriesCount = DB::table('categories')->count();
        for ($i = 1;$i<=$categoriesCount;$i++){
            $categoriesNames[$i] = DB::table('categories')->where('id', $i)->value('name');
        }
        $users = DB::table('expenses')->where('users_id', $userId)->get();

        $from = "2018-01-01";
        $to = Carbon::today()->toDateString();
        return view('report', compact('users','categoriesNames','from','to'));
    }
    public function showReport(Request $request){
        $userId = Auth::id();
        $categoriesCount = DB::table('categories')->count();
        for ($i = 1;$i<=$categoriesCount;$i++){
            $categoriesNames[$i] = DB::table('categories')->where('id', $i)->value('name');
        }
        $from = $request->input('from');
        $to = $request->input('to');
        $str_start_date = date("Y-m-d H:i:s",strtotime("$from 00:00:00"));
        $str_end_date = date("Y-m-d H:i:s",strtotime("$to 23:59:59"));
        $users = DB::table('expenses')->where('users_id', $userId)->where('created_at', '>=',$str_start_date)->
        where('created_at', '<=',$str_end_date)->get();
        return view('report', compact('users','categoriesNames','from','to'));
    }
    public function graphs(){
        $month = 1;
        $months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October',
            'November', 'December'];
        $userId = Auth::id();
        $monthExpenses = [];
        for ($i = 1;$i <= 31;$i++) {
            $monthExpenses[$i] = DB::table('expenses')->where('users_id', $userId)->whereMonth('created_at', $month)->
                                    whereDay('created_at', $i)->sum('amount');
        }
        return view('graphs', compact('monthExpenses','month', 'months'));
    }
    public function graphByMonth(Request $request){
        $userId = Auth::id();
        $months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October',
                    'November', 'December'];
        $month = $request->input('month');
        $monthExpenses = [];
        for ($i = 1;$i <= 31;$i++) {
            $monthExpenses[$i] = DB::table('expenses')->where('users_id', $userId)->whereMonth('created_at', $month)->
            whereDay('created_at', $i)->sum('amount');
        }
        return view('graphs', compact('monthExpenses','month','months'));
    }
    public function welcome(){
        return view('welcome');
    }
}
