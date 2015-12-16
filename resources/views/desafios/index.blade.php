@extends('app')

@section('content')

<div class="large-12 columns">
	
	@include('partials.title', array('type' => '', 'textTitle' => 'Desafíos'))

	<table style="width:100%;">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Contenido</th>
				<th>Autor</th>
				<th>Fecha</th>
			</tr>
		</thead>
		<tbody>
	@foreach($desafios as $desafio)
		<tr>
			<td style="width:35%;"><a href="{{ url('/desafios', $desafio->id) }}"> {{ $desafio->nombre }}</a></td>
			<td style="width:35%;"><a href="{{ url('/desafios', $desafio->id) }}"> {{ $desafio->contenido }}</a></td>
			<td> {{ $desafio->user_id }}</td>
			<td> {{ $desafio->fecha_creacion }}</td>			
		</tr>
	@endforeach
		</tbody>
	</table>
</div>
@stop