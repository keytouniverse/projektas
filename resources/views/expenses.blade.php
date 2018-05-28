@extends('layouts.app')
<!--
 * Created by PhpStorm.
 * User: Tomas
 * Date: 2018-04-11
 * Time: 02:14
-->
<style>
    .Lowerpart
    {
        position: relative;
        margin-top: 50px;
        font-size: 16px;
    color: black;
    }
    input[type="text"] {
        border-radius:5px;
        margin-left:2px;
        position: relative;
        background-color: #F2F2F2;
    }
    input[type="text2"] {
        color: black;
        border-radius:5px;
        margin-left:50px;
        position: absolute;
        left: 90px;
        text-align: center;
        background-color: #E6E6E6;
        width: 100px;  
    }
    text1
    {
        font-family: Arial, Helvetica, sans-serif;
    font-size: 20px;
    }
    select {
    position: absolute;
    right: 0 px;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 30px;
    width: 170px; 
    height: 30px; 
    border-radius: 4px;
    box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
    }

   .piechart{
       position: absolute;
       top: 20px;
       left: 400px;
   }
   input[type="submit"] {
        
        position: relative;
        margin-left:180px;
        border-radius: 100px;
        background-color: #0B3861;
        color: white;
        font-weight: bold;
        width: 150px;  
        height: 30px;
    }

    header
    {
        font-size: 30px;
        color: black;
        font-weight: bold;
        float: none;
        position: fixed;
        left: 50%; 
        margin-bottom: 300px;
    }
    

    </style>
    <title>Expenses</title>
@section('content')

    <div class="container">
  
        <div class="row justify-content-center">
            <div class="col-md-8">
            
                <form action = "/addExpense" method = "post">
                <header>Expenses</header>
                <br>
                <br>

                    {{ csrf_field() }}
            <br>
            <text1> Your spent money: </text1>
            <br>

            <input type="text" name="amount" required>
            <br>


            <!--DropDown list of categories-->

            <br>

            <select name="category">
                @foreach($categories as $category)
                    <option value="{{$category->id}}" name="{{$category->id}}">{{$category->name}}</option> // Categories from DB
                @endforeach
            </select>

            <input type="submit" value="ADD">
            </form>

                    
        <br>
        <div class="Lowerpart">
        <text1>  Summary: </text1>
            <br>
        <br> Income:
        <input type="text2" value={{$income}} id="income" disabled>
        <br>
        <br> Expenses total:
        <input type="text2" value={{$totalExpenses}} id="expenses" disabled>
        <br>
        <br> Balance:
        <input type="text2" value={{$income-$totalExpenses}} id="balance" disabled>
            </div>
            <div class="piechart"id="piechart">

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
    // Load google charts
    google.charts.load('current', { 'packages': ['corechart'] });
    google.charts.setOnLoadCallback(drawChart);

    // Draw the chart and set the chart values
    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Category', 'Percentage'],
            ['Food & Groceries', {{$categoriesAmount[1]}}],
            ['Emergency Fund', {{$categoriesAmount[2]}}],
            ['Housing', {{$categoriesAmount[3]}}],
            ['Utilities', {{$categoriesAmount[4]}}],
            ['Personal Care', {{$categoriesAmount[5]}}],
            ['Entertainment', {{$categoriesAmount[6]}}],
            ['Transport', {{$categoriesAmount[7]}}],
            ['Health Care', {{$categoriesAmount[8]}}],
            ['Pets', {{$categoriesAmount[9]}}],
            ['Other', {{$categoriesAmount[10]}}],
            ['Unspent Money', {{$income-$totalExpenses}}]
        ]);
        @if($income-$totalExpenses<0)

        @else
        // Optional; add a title and set the width and height of the chart
        var options = {
            titleTextStyle: {
                color: 'black',
                fontName: 'Arial',
                fontSize: 30
            }, 'title': 'This month you spent', 'backgroundColor': 'transparent', 'width': 800, 'height': 600
        };

        // Display the chart inside the <div> element with id="piechart"
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
        @endif
    }
</script>
</div>
            </div>
        </div>
    </div>

@endsection