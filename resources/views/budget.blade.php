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

 input[value="Add"]
 {
     width:65px;
     background-color: cornflowerblue;
 }
 input[value="Confirm"]
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
                <input type="submit" value="Add">
                </form>
                <br>
                <text1> Total income this month: </text1>
                <br>
                <input type="text1" name="Totalincome" value={{$totalIncome}}>
            </div>
                <div class="categories">
                   <form action="/addBudget" method="post" name="budget">
                       {{ csrf_field() }}
                        <text2>
                            Create a Budget
                            <br><br>
                            @for($i=1;$i<=$categoriesCount;$i++)
                                {{$categoriesNames[$i]}}
                                <input type="text" name={{$i}} value={{$budgetAmounts[$i]}}>
                                {{--<input type="submit" value="Edit">--}}
                                <br><br>
                            @endfor
                            <input type="submit" value="Confirm">
                        </text2>
                   </form>
                </div>
        </div>
    </div>

@endsection