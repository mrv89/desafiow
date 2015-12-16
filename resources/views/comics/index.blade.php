@extends('app')

@section('content')

<div class="large-12 columns">

	@include('partials.title', array('type' => '', 'textTitle' => 'Comics'))
	
	<table style="width:100%;">

		<thead>
			<tr>
				<th>Nombre</th>
				<th>Descripción</th>
				<th>Desafío Asociado</th>
			</tr>
		</thead>
		<tbody>
		@foreach($comics as $comic)

			<tr>
				<td><a href="{!! action('ComicsController@edit', ['id' => $comic->id]) !!}"> {{ $comic->nombre }}</a></td>
				<td><a href="{!! action('ComicsController@edit', ['id' => $comic->id]) !!}"> {{ $comic->descripcion }}</a></td>
				<td><a href="{!! action('ComicsController@edit', ['id' => $comic->id]) !!}"> {{ $comic->desafio_id }}</a></td>
			</tr>

		@endforeach
		</tbody>

	</table>

</div>

@stop