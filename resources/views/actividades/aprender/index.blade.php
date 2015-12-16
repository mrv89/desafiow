@extends('app')

@section('content')

<div class="large-12 columns">

	@include('partials.title', array('type' => '', 'textTitle' => 'Aprender'))
	
	<table style="width:100%;">

		<thead>
			<tr>
				<th>Nombre</th>
				<th>Contenido</th>
				<th>Desafío Asociado</th>
			</tr>
		</thead>
		<tbody>
		@foreach($actividadAprender as $aprender)

			<tr>
				<td><a href="{!! action('AprenderController@edit', ['id' => $aprender->id]) !!}"> {{ $aprender->nombre }}</a></td>
				<td><a href="{!! action('AprenderController@edit', ['id' => $aprender->id]) !!}"> {{ $aprender->contenido }}</a></td>
				<td><a href="{!! action('AprenderController@edit', ['id' => $aprender->id]) !!}"> {{ $aprender->actividad_id }}</a></td>
			</tr>

		@endforeach
		</tbody>

	</table>

</div>

@stop