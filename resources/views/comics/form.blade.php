<div class="large-12 columns">

	{!! Form::label('nombre', 'Nombre' ) !!}
	{!! Form::text('nombre', null, ['class' => 'input', 'placeholder' => 'Nombre del Comic (Referencia interna)'] ) !!}

</div><!-- /large-12 -->

<div class="large-12 columns">
	
	{!! Form::label('descripcion', 'Descripción (opcional)' ) !!}
	{!! Form::textarea('descripcion', null, ['class' => 'input-textarea'] ) !!}									
			
</div>

<div class="large-12 columns">

	{!! Form::label('desafio_id', 'Desafío Asociado') !!}
	
	@if( isset($comic->desafio_id) )
	
	{!! Form::select('desafio_id', $desafios, $comic->desafio_id) !!}

	@else	
	
		{!! Form::select('desafio_id', $desafios) !!}
	
	@endif

</div><!-- /large-12 -->	

<div class="large-12 columns">	

	{!! Form::submit($buttonText, ['class' => 'button small']) !!}

</div>	 	