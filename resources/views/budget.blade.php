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
    right: 130px;
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
    color: black;
    width:75px;
    height:30px;
    border-radius:5px;
    background-color:  #F2F2F2;
    margin-left:20px;
    position: absolute;
    right: -200px;
}

input[type="text1"] {
    color: black;
    width:150px;
    height:30px;
    border-radius:5px;
    background-color:   #F2F2F2;
    margin-left:2px;
}
input[type="text3"] {
    color: black;
    width:150px;
    height:30px;
    border-radius:5px;
    background-color:   #E6E6E6;
    margin-left:2px;
}

input[value="Edit"]
{
    border-radius: 100px;
 color: white;
 font-weight: bold;
    width:50px;
    position: absolute;
    background-color:  #0B3861;
    right: -265px;
}

 input[value="Add"]
 {

        border-radius: 100px;
 
        background-color: #0B3861;
        color: white;
        font-weight: bold;
        width: 100px;  
        height: 30px;
 }
 input[value="Confirm"]
 {

    border-radius: 100px;
        background-color: #0B3861;
        color: white;
        font-weight: bold;
        width: 100px;  
        height: 30px;
 }
 header
    {
        font-size: 30px;
        color: black;
        font-weight: bold;
        position: fixed;
        left: 40%; 
        margin-bottom: 300px;
    }
button{
    position: fixed;
    right: 400px;
}

</style>

<title>Budget</title>

@section('content')

    <div class="container">
        <div class="row justify-content-center">
        <header>Create your budget</header>
            <div class="income">
                <form action = "/addIncome" method = "post">
               
                    {{ csrf_field() }}
                    <br>
                <text1> Add to income: </text1>
                <br>
                <input type="text1" name="income">
                <input type="submit" value="Add">
                </form>
                <br>
                <text1> Total income this month: </text1>
                <br>
                <input type="text3" name="Totalincome" value={{$totalIncome}} disabled>
            </div>
            <br>
                <div class="categories">
                   <form action="/addBudget" method="post" name="budget">
                       {{ csrf_field() }}
                        <text2>
                            <br><br>
                            @for($i=1;$i<=$categoriesCount;$i++)
                                {{$categoriesNames[$i]}}
                                <input type="text" name={{$i}} value={{$budgetAmounts[$i]}}>
                                
                                {{--<input type="submit" value="Edit" required>--}}
                                
                                <br><br>
                            @endfor
                            <input type="submit" value="Confirm">
                        </text2>
                   </form>
                </div>
        </div>
    </div>

@endsection