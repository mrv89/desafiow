@extends('app')

@section('content')

<div class="large-12 columns">

	@include('partials.title', array('type' => 'edit', 'textTitle' => 'Imaginar'))

</div><!-- /large-12 -->

<div class="large-8 columns">	
	
	<div class="row">

	{!! Form::model($imaginar,['method' => 'PATCH', 'action' => ['ImaginarController@update', $imaginar->id]]) !!}

	@include('actividades.imaginar.form', ['buttonText' => 'Actualizar Imaginar'])

	{!! Form::close() !!}

	</div><!-- /row -->

	@if($errors->any())
		<ul class="alert">
			@foreach($errors->all() as $error)
			<li>{{$error}}
			@endforeach
		</ul>
	@endif

</div><!-- /large-8 -->

<div class="large-4 columns">
	sidebar
</div><!-- /large-4 -->

@stop