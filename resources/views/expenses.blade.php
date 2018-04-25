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
        background-color: #c6c8ca;
    }
    input[type="text2"] {
        border-radius:5px;
        margin-left:50px;
        position: absolute;
        left: 90px;
        background-color: #c6c8ca;
    }
    select {
    position: absolute;
    right: 0 px;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 20px;
    border-radius: 4px;
}
   .piechart{
       position: absolute;
       top: 20px;
       left: 400px;
   }

    </style>
    <title>Expenses</title>
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action = "/addExpense" method = "post">
                    {{ csrf_field() }}
            <br>
            <text1> Your spent money: </text1>
            <br>
            <input type="text" name="amount">
            <br>


            <!--DropDown list of categories-->

            <br>
            <select name="category">
                @foreach($categories as $category)
                    <option value="{{$category->id}}" name="{{$category->id}}">{{$category->name}}</option> // Categories from DB
                @endforeach
            </select>
            <br>
            <br>
            <input type="submit" value="Submit">
            </form>

                    
        <br>
        <div class="Lowerpart">
        <text1>  Summary: </text1>
            <br>
        <br> Income:
        <input type="text2" value={{$income}} id="income">
        <br>
        <br> Expenses total:
        <input type="text2" value={{$totalExpenses}} id="expenses">
        <br>
        <br> Balance:
        <input type="text2" value={{$income-$totalExpenses}} id="balance">
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
            ['Food & Groceries', 30],
            ['Emergency Fund', 2],
            ['Housing', 31],
            ['Utilities', 7],
            ['Personal Care', 5],
            ['Entertainment', 5.3],
            ['Transport', 7.7],
            ['Health Care', 2.1],
            ['Pets', 3],
            ['other', 6.9]
        ]);

        // Optional; add a title and set the width and height of the chart
        var options = {
            titleTextStyle: {
                color: 'black',
                fontName: 'Arial',
                fontSize: 20
            }, 'title': 'This month you spent', 'backgroundColor': 'transparent', 'width': 550, 'height': 400
        };

        // Display the chart inside the <div> element with id="piechart"
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
    }
</script>
</div>
            </div>
        </div>
    </div>

@endsection