@extends('layouts.app')
<!--
 * Created by PhpStorm.
 * User: Tomas
 * Date: 2018-04-11
 * Time: 02:18
 -->
<style>
    .categories {
        position: relative;
        left: -120px;
        color: black;
        font-size: 16px;
    }

    .income {
        position: relative;
        left: -300px;
        font-size: 16px;
        color: black;
    }

    input[type="text"] {
        width:100px;
        height:30px;
        border-radius:5px;
        background-color: lightblue;
        margin-left:2px;
        position: absolute;
        right: -100px;
    }

    input[type="text1"] {
        width:150px;
        height:30px;
        border-radius:5px;
        background-color: lightblue;
        margin-left:2px;
    }

</style>

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="income">
                <text1> Income: </text1>
                <br>
                <input type="text1" name="income">
                <input type="submit" value="Submit">
                <br><br>
                <br>
                <text1> Total: </text1>
                <br>
                <input type="text1" name="Totalincome">
            </div>
                <div class="categories">
                    <pad3>
                        <text2>
                            Create a Budget
                            <br><br>
                            Food & Groceries:
                            <input type="text" name="income">
                            <br><br> Emergency Fund:
                            <input type="text" name="income">
                            <br><br> Housing:
                            <input type="text" name="income" >
                            <br> <br>Utilities:
                            <input type="text" name="income" >
                            <br><br> Personal Care:
                            <input type="text" name="income" >
                            <br><br> Entertainment:
                            <input type="text" name="income" >
                            <br><br> Transport:
                            <input type="text" name="income" >
                            <br> <br>Health Care:
                            <input type="text" name="income" >
                            <br> <br>Pets:
                            <input type="text" name="income">
                            <br><br> Other:
                            <input type="text" name="income">
                            <br><br>
                            <input type="submit" value="Submit">
                        </text2>
                    </pad3>
                </div>
        </div>
    </div>

@endsection