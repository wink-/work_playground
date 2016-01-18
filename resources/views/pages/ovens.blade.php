@extends('layouts.master')

@section('content')
<div class="col-xs-3" style="height: 200px">
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover table-condensed">
            <caption><strong>Ovens</strong></caption>
            <thead>
                <tr>
                    <th>Name</th><th>Temperature</th><th>Reading Time</th>
                </tr>
            </thead>
            <tbody>

                {!! $grieve->temperature < 150 ? '<tr>' : '<tr class="hot">'!!}
                    <td>Grieve</td>
                    <td>{{$grieve->temperature}}</td>
                    <td>{{$grieve->created_at->toDayDateTimeString()}}</td>
                </tr>
                {!! $quincy->temperature < 150 ? '<tr>' : '<tr class="hot">'!!}
                    <td>Quincy</td>
                    <td>{{$quincy->temperature}}</td>
                    <td>{{$quincy->created_at->toDayDateTimeString()}}</td>
                </tr>
                {!! $lindberg->temperature < 150 ? '<tr>' : '<tr class="hot">'!!}
                    <td>Lindberg</td>
                    <td>{{$lindberg->temperature}}</td>
                    <td>{{$lindberg->created_at->toDayDateTimeString()}}</td>
                </tr>
            </tbody>   
        </table>
    </div>
</div>
<div class="container-fluid canvas-holder" style="width:900px; height: 400px; background: ;">
    <canvas id ="grieve"></canvas>
</div>

<div class="container-fluid canvas-holder" style="width:900px; height: 400px; background: ;">
    <canvas id ="quincy"></canvas>
</div>

<div class="container-fluid canvas-holder" style="width:900px; height: 400px; background: ;">
    <canvas id ="lindberg"></canvas>
</div>
@endsection



@section('before-scripts-end')

	<script>

	var grieve = document.getElementById("grieve").getContext("2d");
	var LineChartDemo = new Chart(grieve, {
		type: 'line',
			data: {
				labels: {!! json_encode($dates_grieve) !!},
				datasets: [{
					label: 'Temperature of Grieve',
					pointBorderWidth: 1,
					data: {!! json_encode($temperatures_grieve) !!}

				}]
			},
			options:{

				scales:{
					yAxes:[{
						type: "linear",
						scaleLabel:{
							display:true,
							labelString: "Degrees Fahrenheit"
						},
						ticks:{
							beginAtZero:true,
							suggestedMax: 600
						}
					}],
					xAxes:[{
						type: "time"

					}],				
				}
			}
	});		
	</script>

	<script>
	var quincy = document.getElementById("quincy").getContext("2d");
	var LineChartDemo = new Chart(quincy, {
		type: 'line',
			data: {
				labels: {!! json_encode($dates_quincy) !!},
				datasets: [{
					label: 'Temperature of Quincy',
					data: {!! json_encode($temperatures_quincy) !!},
					pointBorderWidth: 0
				}]
			},
			options:{
				scales:{
					yAxes:[{
						type: "linear",
						scaleLabel:{
							display:true,
							labelString: "Degrees Fahrenheit"
						},						
						ticks:{
							beginAtZero:true,
							suggestedMax: 600
						}
					}],
					xAxes:[{
						type: "time"

					}],				
				}
			}
	});		
	</script>
	<script>
	var lindberg = document.getElementById("lindberg").getContext("2d");
	var LineChartDemo = new Chart(lindberg, {
		type: 'line',
			data: {
				labels: {!! json_encode($dates_lindberg) !!},
				datasets: [{
					label: 'Temperature of Lindberg',
					data: {!! json_encode($temperatures_lindberg) !!},
					pointBorderWidth: 0
				}]
			},
			options:{
				scales:{
					yAxes:[{
						type: "linear",
						scaleLabel:{
							display:true,
							labelString: "Degrees Fahrenheit"
						},						
						ticks:{
							beginAtZero:true,
							suggestedMax: 600
						}
					}],
					xAxes:[{
						type: "time"

					}],				
				}
			}
	});		
	</script>
@endsection