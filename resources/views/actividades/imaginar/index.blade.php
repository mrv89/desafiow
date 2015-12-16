@extends('app')

@section('content')

<div class="large-12 columns">
	
	@include('partials.title', array('type' => '', 'textTitle' => 'Imaginar'))

<table style="width:100%;">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Contenido</th>
			<th>Desafío Asociado</th>
		</tr>
	</thead>
	<tbody>
	@foreach($actividadImaginar as $imaginar)

		<tr>
			<td><a href="{!! action('ImaginarController@edit', ['id' => $imaginar->id]) !!}"> {{ $imaginar->nombre }}</a></td>
			<td><a href="{!! action('ImaginarController@edit', ['id' => $imaginar->id]) !!}"> {{ $imaginar->contenido }}</a></td>
			<td><a href="{!! action('ImaginarController@edit', ['id' => $imaginar->id]) !!}"> {{ $imaginar->actividad_id }}</a></td>
		</tr>

	@endforeach
	</tbody>
</table>


</div>

@stop