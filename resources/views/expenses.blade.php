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
        margin-left:2px;
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
            <br>
            <text1> Your spent money: </text1>
            <br>
            <input type="text" name="expenses">
            <br>


            <!--DropDown list of categories-->

            <br>
            <select>

                <option value="foodandfroceries">Food & Groceries</option>
                <option value="emergencyfund">Emergency Fund</option>
                <option value="housing">Housing</option>
                <option value="utilities">Utilities</option>
                <option value="personalcare">Personal Care</option>
                <option value="entertainment">Entertainment</option>
                <option value="transport">Transport</option>
                <option value="healthcare">Health Care</option>
                <option value="pets">Pets</option>
                <option value="other">Other</option>

            </select>
            <br>
            <br>
            <input type="submit" value="Submit">

                    
        <br>
        <div class="Lowerpart">
        <text1>  Summary: </text1>
        <br> Income:
        <input type="text2" value="" id="income">
        <br>
        <br> Expenses:
        <input type="text2" value="" id="expenses">
        <br>
        <br> Total:
        <input type="text2" value="" id="total">
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
            ['Food & Groceries', 13],
            ['Emergency Fund', 0],
            ['Housing', 15.5],
            ['Personal Care', 10.5],
            ['Entertainment', 7],
            ['Transport', 0],
            ['Health Care', 0],
            ['Pets', 8],
            ['other', 46]
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