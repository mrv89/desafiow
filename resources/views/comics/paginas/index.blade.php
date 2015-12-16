@extends('app')

@section('content')

<div class="large-12 columns">

	@include('partials.title', array('type' => '', 'textTitle' => 'Comics'))
	
	<table style="width:100%;">

		<thead>
			<tr>
				<th>Imagen Asociada</th>
				<th>Página</th>
				<th>Comic Asociado</th>
			</tr>
		</thead>
		<tbody>
		@foreach($comics_paginas as $pagina)

			<tr>
				<td><a href="{!! action('ComicsPaginasController@edit', ['id' => $pagina->id]) !!}"> <div style="background-image:url({{ url(). '/' .$pagina->url_img }});height:50px;width:50px;background-position:center center;"></div> </a></td>
				<td><a href="{!! action('ComicsPaginasController@edit', ['id' => $pagina->id]) !!}"> {{ $pagina->posicion }}</a></td>
				<td><a href="{!! action('ComicsPaginasController@edit', ['id' => $pagina->id]) !!}"> {{ $pagina->comic_id }}</a></td>
			</tr>

		@endforeach
		</tbody>

	</table>

</div>

@stop