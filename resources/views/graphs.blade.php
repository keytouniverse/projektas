@extends('layouts.app')
<!DOCTYPE HTML>
<html>
<head>
@section('content')

<div class="container">
    <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Choose a month
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#">January</a>
        <a class="dropdown-item" href="#">February</a>
        <a class="dropdown-item" href="#">March</a>
        <a class="dropdown-item" href="#">April</a>
        <a class="dropdown-item" href="#">May</a>
        <a class="dropdown-item" href="#">June</a>
        <a class="dropdown-item" href="#">July</a>
        <a class="dropdown-item" href="#">August</a>
        <a class="dropdown-item" href="#">September</a>
        <a class="dropdown-item" href="#">October</a>
        <a class="dropdown-item" href="#">November</a>
        <a class="dropdown-item" href="#">December</a>
    </div>
    </div>
    <br>
        <input type="submit" value="Submit">
    <br>
    <br>
    </form>


<script type="text/javascript">
    window.onload = function () {
	var chart = new CanvasJS.Chart("chartContainer",
	{
        //width: 750,
        //height: 260,
        theme: "light2", //"light1", "dark1", "dark2"
        backgroundColor: "white",
		title: {
			text: "Daily Spendings",
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
				{ x: 1, y: 71 },
				{ x: 2, y: 55 },
				{ x: 3, y: 50 },
				{ x: 4, y: 65 },
                { x: 5, y: 105 },
				{ x: 6, y: 68 },
				{ x: 7, y: 28 },
				{ x: 8, y: 34 },
				{ x: 9, y: 14 },
                { x: 10, y: 71 },
				{ x: 11, y: 55 },
                { x: 12, y: 71 },
				{ x: 13, y: 50 },
				{ x: 14, y: 65 },
                { x: 15, y: 105 },
				{ x: 16, y: 68 },
				{ x: 17, y: 28 },
				{ x: 18, y: 34 },
				{ x: 19, y: 14 },
                { x: 20, y: 71 },
                { x: 21, y: 71 },
				{ x: 22, y: 55 },
				{ x: 23, y: 50 },
				{ x: 24, y: 65 },
                { x: 25, y: 105 },
				{ x: 26, y: 68 },
				{ x: 27, y: 28 },
				{ x: 28, y: 34 },
				{ x: 29, y: 14 },
                { x: 30, y: 71 },
                { x: 31, y: 71 },

			]
		}
		],
        axisX:{

            title:"day of the month ",
        },
        axisY:{
            title:"spent money",
        }
	});
	chart.render();
}
</script>
<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</head>
<body>
<div id="chartContainer" style="height: 300px; width: 100%;">
</div>
</body>
</html>
</div>
@endsection