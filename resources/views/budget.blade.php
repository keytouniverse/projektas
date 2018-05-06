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
    padding-top: 30px;
}

input[type="text"] {
    width:150px;
    height:30px;
    border-radius:5px;
    background-color: lightblue;
    margin-left:20px;
    position: absolute;
    right: -200px;
}

input[type="text1"] {
    width:200px;
    height:30px;
    border-radius:5px;
    background-color: lightblue;
    margin-left:2px;
}

input[value="Edit"]
{
    width:50px;
    position: absolute;
    background-color: cornflowerblue;
    right: -265px;
}

 input[value="Submit"]
 {
     width:65px;
     background-color: cornflowerblue;
 }

</style>

<title>Budget</title>

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="income">
                <form action = "/addIncome" method = "post">
                    {{ csrf_field() }}
                <text1> Add to income: </text1>
                <br>
                <input type="text1" name="income">
                <input type="submit" value="Submit">
                </form>
                <br>
                <text1> Total income this month: </text1>
                <br>
                <input type="text1" name="Totalincome" value={{$totalIncome}}>
            </div>
                <div class="categories">
                   
                        <text2>
                            Create a Budget
                            <br><br>
                            Food & Groceries:
                            <input type="text" name="income">
                            <input type="submit" value="Edit">
                            <br><br> Emergency Fund:
                            <input type="text" name="income">
                            <input type="submit" value="Edit">
                            <br><br> Housing:
                            <input type="text" name="income" >
                            <input type="submit" value="Edit">
                            <br> <br>Utilities:
                            <input type="text" name="income" >
                            <input type="submit" value="Edit">
                            <br><br> Personal Care:
                            <input type="text" name="income" >
                            <input type="submit" value="Edit">
                            <br><br> Entertainment:
                            <input type="text" name="income" >
                            <input type="submit" value="Edit">
                            <br><br> Transport:
                            <input type="text" name="income" >
                            <input type="submit" value="Edit">
                            <br> <br>Health Care:
                            <input type="text" name="income" >
                            <input type="submit" value="Edit">
                            <br> <br>Pets:
                            <input type="text" name="income">
                            <input type="submit" value="Edit">
                            <br><br> Other:
                            <input type="text" name="income">
                            <input type="submit" value="Edit">
                            <br><br>
                            <input type="submit" value="Submit">
                        </text2>
            
                </div>
        </div>
    </div>

@endsection