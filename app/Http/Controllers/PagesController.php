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
        $income = DB::table('budget')->where('users_id', $userId)->value('total_income');
        return view('expenses', compact('categories','totalExpenses','income'));
    }
    public function budget(){
        return view('budget');
    }
    public function currency_converter(){
        return view('currency_converter');
    }
    public function report(){
        return view('report');
    }
    public function graphs(){
        return view('graphs');
    }
    public function welcome(){
        return view('welcome');
    }
}
