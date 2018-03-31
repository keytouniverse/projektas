<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Auth;

class UpdateController extends Controller
{
    public function updateCurrency(Request $request)
    {
        $currency = $request->input('currency');
        $userId = Auth::id();
        $data=array('currency'=>$currency);
        $currencyy = implode("", $data);
        DB::table('users')
            ->where('id', $userId)
            ->update(['currency' => $currencyy]);
        return back();
    }
    public function updateIncomeDay(Request $request)
    {
        $incomeday = $request->input('Income_day');
        $userId = Auth::id();
        $data=array('currency'=>$incomeday);
        $incomedayy = implode("", $data);
        DB::table('users')
            ->where('id', $userId)
            ->update(['income_day' => $incomedayy]);
        return back();
    }
}