@extends('layouts.app')
<!--
 * Created by PhpStorm.
 * User: Tomas
 * Date: 2018-04-11
 * Time: 02:20
 -->
<style>
    .text1{
        font-size: 30px;
        color: black;
        font-weight: bold;
    }

    .text2{
        font-size: 20px;
        color: black;
        position: relative;
        left: 0px;
    }

    .dropbtn {
        background-color: #5a6268;
        color: white;
        padding: 16px;
        font-size: 20px;
        border: none;
        cursor: pointer;
        position: relative;
        right: 0px;
    }

    .dropdown1 {
        position: relative;
        right: -150px;
        display: inline-block;
    }

    .dropdown1-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        z-index: 1;
    }

    .dropdown1-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown1-content a:hover {
        background-color: #f1f1f1;
    }

    .dropdown1:hover .dropdown1-content {
        display: block;
    }

    input[type="text"] {
        width:200px;
        height:30px;
        border-radius:5px;
        background-color: #c6c8ca;
        margin-left:2px;
        position: relative;
        right: -300px;
    }

    input[type="submit"] {
        background-color: #5a6268;
        color: white;
        padding: 14px;
        font-size: 20px;
        position: relative;
        left: 675px;
    }
</style>

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="text1">
                        <text1> Currency converter </text1>
                        <br><br>
                    </div>
                <div class="text2">
                    <text2> Current currency </text2>
                    <div class="dropdown1">
                        <button class="dropbtn">Currency</button>
                        <div class="dropdown1-content">
                            <a>EUR</a>
                            <a>USD</a>
                            <a>GBP</a>
                        </div>
                    </div>
                    <input type="text" name="money">
                    <br><br>
                    <br><br>
                </div>
                <div class="text2">
                    <text2> Choose currency </text2>
                    <div class="dropdown1">
                        <button class="dropbtn">Currency</button>
                        <div class="dropdown1-content">
                            <a>EUR</a>
                            <a>USD</a>
                            <a>GBP</a>
                        </div>
                    </div>
                    <input type="text" name="money">
                </div>
                <br><br>
                <div class="button">
                    <input type="submit" value="Convert">
                </div>
                </div>
            </div>
        </div>

@endsection