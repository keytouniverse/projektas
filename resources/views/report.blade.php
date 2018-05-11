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
}
th{
    text-align: left;
}
th, td {
    text-align: left;
}
tr:nth-child(even) {background-color:#CEECF5;}
tr:first-child {
    background-color: #58ACFA;
    font-weight: bold;
}
    </style>
<title> Report</title>
@section('content')
    <div class="container">
        <div class="row justify-content-center">
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
    <script>
                $(function () {
                    $("#nav-placeholder").load("meniu.html");
                });
            </script>
 <script>
        $(function () {
            $("#nav-placeholder").load("meniu.html");
        });
    </script>
    <!--end of Navigation bar-->
    <pad5>

        <Label>From</Label>
        <form action ="/showreports" method = "get">
        <input type="date" name="from"/>

        <Label>To</Label>
        <input type="date" name="to"/>
        <input type="submit" value="Show">
            <table style="width:100%">
                <tr>
                    <th>Nr</th>
                    <th>Category</th>
                    <th>Amount</th>
                    <th>Date</th>
                </tr>
        @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->categories_id}}</td>
                <td>{{$user->amount}}</td>
                <td>{{$user->created_at}}</td>
            </tr>
        @endforeach
            </table>
        </form>
        <br>
        <br>
        <br>
        <table style="width:100%">
            <tr>
                <th>Nr</th>
                <th>Category</th>
                <th>Amount</th>
                <th>Date</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Food</td>
                <td>50</td>
                <td>2018-04-02</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Transport</td>
                <td>13.5</td>
                <td>2018-03-29</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Housing</td>
                <td>150.4</td>
                <td>2018-03-15</td>
            </tr>
        </table>

    </pad5>
                </div>
            </div>
        </div>
    </div>

@endsection