@extends('layouts.app')
<!--
 * Created by PhpStorm.
 * User: Tomas
 * Date: 2018-04-11
 * Time: 02:32
-->
<style>

    table, th, td {
    border: 1px solid black;
    border-radius: 100px;
}
table{
    border: 3px solid black;

 }
th{
    text-align: center;
}
td{
    height: 35px;
}
th, td {
    text-align: center;
}
tr:nth-child(even) {background-color: #E0ECF8;}
tr:nth-child(odd) {background-color: #E0F2F7;}

tr:hover {background-color: #81BEF7;}

tr:first-child {
    height: 35px;
     border: 3px solid black;
    background-color: #81BEF7;
    font-weight: bold;
    text-align: center;
}
Label{
    font-size: 15px;
        color: black;
        font-weight: bold;
}
input[type="submit"] {
        margin-left:10px;
        border-radius: 100px;
        background-color: #0B3861;
        color: white;
        font-weight: bold;
        width: 100px;  
        height: 30px;
    }
.atitraukti
{
      position: fixed;
      left: 37%; 
}
.atitraukti2
{
      position: fixed;
      left: 45%; 
}
    </style>
<title> Report</title>
@section('content')
    <div class="container">
        <div class="row justify-content-center">
        <br> <br>
            <div class="col-md-8">

                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
                    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
                    <script>

            $("#datepicker_from").datepicker({
                changeMonth: true,
                changeYear: true,
                format: 'DD-MM-YYYY',
                startDate: '01-10-2017',
                onSelect: function (dateText) {
                    $("#datepicker_to").datepicker('option','minDate',dateText);
                }
        });
        $("#datepicker_to").datepicker({
           changeMonth : true,
           changeYear: true,
            format: 'DD-MM-YYYY',
            endDate: '01-11-2017',

        });
    </script>
        
        <form action ="/showReport" method = "get">
        <div class="atitraukti">
        <Label>From</Label> 
        <input type="date" name="from"/>
        <Label>To</Label>
        <input type="date" name="to"/>
        </div>

        <br> <br>
        <div class="atitraukti2">
        <input type="submit" value="Show">
        </div>
        <br> <br>
            <table style="width:100%">
                <tr>
                    <th>Nr</th>
                    <th>Category</th>
                    <th>Amount</th>
                    <th>Date</th>
                </tr>
                <!--{{$sumting = 1}};-->
        @foreach($users as $user)
            <tr>

                <td>{{$user->id}}</td>
                <td>{{$categoriesNames[$user->categories_id]}}</td>
                <td>{{$user->amount}}</td>
                <td>{{$user->created_at}}</td>
                <!--{{$sumting = $sumting + 1}};-->
            </tr>
        @endforeach
            </table>
        </form>
    </pad5>
                </div>
            </div>
        </div>
    </div>

@endsection