<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function settings(){
        return view('settings');
    }
    public function about(){
        return view('about');
    }
    public function welcome(){
        return view('welcome');
    }
}
