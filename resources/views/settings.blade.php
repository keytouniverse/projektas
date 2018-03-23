@extends('layouts.app')
<!--
 * Created by PhpStorm.
 * User: Tomas
 * Date: 2018-03-22
 * Time: 00:03
 -->
@section('content')
<div class="container" xmlns:padding-left="http://www.w3.org/1999/xhtml">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Settings</div>
                <div class="card-body">

                    {{--Choose currency in user settings--}}
                    <?php $currencies = array('EUR', 'USD', 'GPB', 'RUB'); ?>

                    <form action = "/updateCurrency" method = "post">
                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                    <label>Default currency:</label>
                        <select name="currency" class="selectbigger">
                            @foreach($currencies as $currency)
                                @if($currency == $currentcurrency){
                                    <option selected="selected" value={{$currentcurrency}}>{{$currentcurrency}}</option>
                                @else
                                    <option value={{$currency}}>{{$currency}}</option>
                                @endif
                            @endforeach
                        </select>
                        <td colspan = '2'>
                            <input type = 'submit' value = "Change"/>
                        </td>
                       <!-- <button type="button" class="btn" >Change</button>-->
                        <br>
                        <br>
                    </form>

                    {{--Choose income day in user settings--}}
                    <form action = "/updateDay" method = "post">
                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                    <label>Income day:</label>
                        <select name="Income_day" class="selectbigger">
                        <?php for ($i = 1; $i <= 31; $i++) : ?>
                            @if($i == $incomeday){
                            <option selected="selected" value={{$incomeday}}>{{$incomeday}}</option>
                            @else
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            @endif
                        <?php endfor; ?>
                        </select>
                        <td colspan = '2'>
                            <input type = 'submit' value = "Select"/>
                        </td>
                        {{--<button type="button" class="btn" >Select</button>--}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection