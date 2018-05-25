@extends('layouts.app')

<style>
    .dropdown4{
        position: absolute;
        right: 950px;
    }

    .dropdown2{
        position: absolute;
        right: 370px;
    }

    .dropdown3{
        position: absolute;
        right: 200px;
    }
    input[value="Show"]
    {
        border-radius: 100px;
        background-color: #81BEF7;
        color: black;
        font-weight: bold;
        width: 100px;
        height: 30px;
        position: absolute;
        right: 830px;
    }

    input[value="Submit"]
    {
        border-radius: 100px;
        background-color:  #81BEF7;
        color: black;
        font-weight: bold;
        width: 100px;
        height: 30px;
        position: absolute;
        right: 80px;
    }

    .linechart{
        position: absolute;
        top: 100px;
        right: 500px;
        width: 600px;
    }

    .ColumnChart{
        position: absolute;
        top:100px;
        right: -320px;
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
    select{

        border-radius: 10px;
        background-color: #81BEF7;
        color: black;
        font-weight: bold;
        font-size: 30px;
        width: 120px;  
        height: 30px;
        -webkit-appearance: none;
        -moz-appearance: none;
        background-image: url("data:image/svg+xml;utf8,<svg fill='black' height='24' viewBox='0 0 24 24' width='24' xmlns='http://www.w3.org/2000/svg'><path d='M7 10l5 5 5-5z'/><path d='M0 0h24v24H0z' fill='none'/></svg>");
        background-repeat: no-repeat;
        background-position-x: 100%;
        background-position-y: 5px;
        border: 1px solid #dfdfdf;
        text-align: center;
    }



</style>
<title>Graphs & Diagrams</title>
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <br>
            <br>
            <!-- DROP DOWN-->
            <form action="/graphByMonth" method="get">
            <div class="dropdown4">
            <select name="month">
                <option value="1">January</option>
                <option value="2">February</option>
                <option value="3">March</option>
                <option value="4">April</option>
                <option value="5">May</option>
                <option value="6">June</option>
                <option value="7">July</option>
                <option value="8">August</option>
                <option value="9">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>

           </select>
             </div>
                <input type="submit" value="Show">
            </form>
             <!-- DROP DOWN-->
              <!-- DROP DOWN-->


            <div class="dropdown2">
            <label> From </label>
                <select>
                <option value="December">2017-12-10</option>
                <option value="December">2018-01-10</option>
                <option value="December">2018-02-10</option>
                <option value="December">2018-03-10</option>
                <option value="December">2018-04-10</option>
                <option value="December">2018-05-10</option>
                <option value="December">2018-06-10</option>
                <option value="December">2018-07-10</option>
                <option value="December">2018-08-10</option>
                <option value="December">2018-09-10</option>
                <option value="December">2018-10-10</option>
                <option value="December">2018-11-10</option>
                </select>
            </div>
                 <!-- DROP DOWN-->

            <div class="dropdown3">
            <label> To </label>
                <select>
                <option value="December">2018-01-10</option>
                <option value="December">2018-02-10</option>
                <option value="December">2018-03-10</option>
                <option value="December">2018-04-10</option>
                <option value="December">2018-05-10</option>
                <option value="December">2018-06-10</option>
                <option value="December">2018-07-10</option>
                <option value="December">2018-08-10</option>
                <option value="December">2018-09-10</option>
                <option value="December">2018-10-10</option>
                <option value="December">2018-11-10</option>
                <option value="December">2018-12-10</option>
                </select>
            </div>
             <!-- DROP DOWN-->
            <input type="submit" value="Submit">
            <div class="linechart"id="linechart">
                <script type="text/javascript">
                    window.onload = function () {
                        var chart = new CanvasJS.Chart("chartContainer",
                            {
                                //width: 750,
                                //height: 260,
                                theme: "light2", //"light1", "dark1", "dark2"

                                title: {
                                    text: "Daily Spendings of {{$monthName}}",
                                    fontSize: 20
                                },
                                exportEnabled: true,
                                axisX:{
                                    minimum: 1,
                                    interval: 1,
                                },
                                data: [
                                    {
                                        type: "area",
                                        fillOpacity: .4,
                                        lineThickness: 3,
                                        dataPoints: [
                                                @for($i=1;$i<=31;$i++)
                                                    { x: {{$i}}, y: {{$monthExpenses[$i]}} },
                                                @endfor
                                        ]
                                    }
                                ],
                                axisX:{

                                    title:"Day of the month ",
                                },
                                axisY:{
                                    title:"Money spent",
                            },

                                backgroundColor: 'transparent',
                            });
                        chart.render();
                    }
                </script>
                <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

                <body>
                <div id="chartContainer" style="width: 600px; height: 400px;">
                </div>
                </body>
            </div>
             <!-- DROP DOWN-->

    <div class="ColumnChart"id="ColumnChart">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['bar']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Categories', 'Spent money', 'Budget'],
                ['Food', 80, 20],
                ['Emergency\nfund', 20, 15],
                ['Housing', 15, 10],
                ['Utilities', 30, 25],
                ['Personal\ncare', 60, 65],
                ['Enterta\ninment', 70, 65],
                ['Transport', 80, 75],
                ['Health\ncare', 5, 2],
                ['Pets', 10, 8],
                ['Other', 10, 11]
            ]);

            var options = {
                chart: {
                    title: 'Expences with categories',

                },
                backgroundColor: 'transparent',
                fontSize: 15
            };

            var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

            chart.draw(data, google.charts.Bar.convertOptions(options));
        }
    </script>

    <div id="columnchart_material" style="width: 800px; height: 400px;"></div>
</div>

        </div>
    </div>
</div>
@endsection