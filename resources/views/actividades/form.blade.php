<div class="large-12 columns">

	{!! Form::label('nombre', 'Nombre' ) !!}
	{!! Form::text('nombre', null, ['class' => 'input', 'placeholder' => 'Nombre del Desafío'] ) !!}

</div><!-- /large-12 -->

<div class="large-12 columns">

	{!! Form::label('desafio_id', 'Desafío Asociado') !!}

	@if( isset($actividad->desafio_id) )

		{!! Form::select('desafio_id', $desafios, $actividad->desafio_id) !!}
	
	@else
	
		{!! Form::select('desafio_id', $desafios) !!}
	
	@endif

</div><!-- /large-12 -->	

<div class="large-12 columns">	

	{!! Form::submit($buttonText, ['class' => 'button small']) !!}

</div>	 	