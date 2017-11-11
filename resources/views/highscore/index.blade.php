@extends('master')

@section('css')
@parent
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highcharts/6.0.2/css/highcharts.css" />
{{-- <link rel="stylesheet" href="{{ asset('css/account.css') }}"> --}}
@endsection

@section('content')
	<div class="ui container">
		<br>

		<table class="highchart" data-graph-container-before="1" data-graph-type="column">
		  <thead>
		      <tr>
		          <th>Jogos digitais</th>
		          <th>Segurança</th>
		          <th>ADS</th>
		      </tr>
		   </thead>
		   <tbody>
		      
		      <tr>
		          <td>February</td>
		          <td>12000</td>
		          <td>12000</td>
		      </tr>
		  </tbody>
		</table>
	</div>
@endsection

@section('js')
	@parent
	<script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/6.0.2/js/highcharts.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/highchartTable/2.0.0/jquery.highchartTable.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
		  $('table.highchart').highchartTable();
		});
	</script>
@endsection