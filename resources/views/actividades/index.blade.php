@extends('app')

@section('content')

<div class="large-12 columns">
	
	@include('partials.title', array('type' => '', 'textTitle' => 'Actividades'))
	
<table style="width:100%;">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Desafío Asociado</th>
			
		</tr>
	</thead>
	<tbody>
	@foreach($actividades as $actividad)

		<tr>
			<td><a href="{{ url('/actividades', $actividad->id) }}"> {{ $actividad->nombre }}</a></td>
			<td><a href="{{ url('/actividades', $actividad->id) }}"> {{ $actividad->desafio_id }}</a></td>
						
		</tr>

	@endforeach
	</tbody>
</table>

</div>

@stop