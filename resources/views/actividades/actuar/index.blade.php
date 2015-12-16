@extends('app')

@section('content')

<div class="large-12 columns">
	
	@include('partials.title', array('type' => '', 'textTitle' => 'Actuar'))

<table style="width:100%;">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Contenido</th>
			<th>Desafío Asociado</th>
		</tr>
	</thead>
	<tbody>
	@foreach($actividadActuar as $actuar)

		<tr>
			<td><a href="{!! action('ActuarController@edit', ['id' => $actuar->id]) !!}"> {{ $actuar->nombre }}</a></td>
			<td><a href="{!! action('ActuarController@edit', ['id' => $actuar->id]) !!}"> {{ $actuar->contenido }}</a></td>
			<td><a href="{!! action('ActuarController@edit', ['id' => $actuar->id]) !!}"> {{ $actuar->actividad_id }}</a></td>
		</tr>

	@endforeach
	</tbody>
</table>


</div>

@stop