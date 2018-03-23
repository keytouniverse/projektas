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
    public function welcome(){
        return view('welcome');
    }
}
