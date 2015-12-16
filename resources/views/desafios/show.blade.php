@extends('app')

@section('content')
	<div class="large-12 columns">
		@include('partials.title', array('type' => '', 'textTitle' => $desafio->nombre))
		<h3>{{ $desafio->titulo }}</h3>
		<div class="content">{{ $desafio->contenido }}</div>
	</div>
@stop