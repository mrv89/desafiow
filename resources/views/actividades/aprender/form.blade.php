<div class="large-12 columns">

	{!! Form::label('nombre', 'Nombre' ) !!}
	{!! Form::text('nombre', null, ['class' => 'input', 'placeholder' => 'Nombre del Aprender'] ) !!}

</div><!-- /large-12 -->

<div class="large-12 columns">
	
	{!! Form::label('contenido', 'Contenido' ) !!}
	{!! Form::textarea('contenido', null, ['class' => 'input-textarea'] ) !!}									
			
</div>

<div class="large-12 columns">

	{!! Form::label('actividad_id', 'Actividad Asociada') !!}
	
	@if( isset($actuar->actividad_id) )
	
	{!! Form::select('actividad_id', $actividades, $aprender->actividad_id) !!}

	@else	
	
		{!! Form::select('actividad_id', $actividades) !!}
	
	@endif

</div><!-- /large-12 -->	

<div class="large-12 columns">

	<hr>

	{!! Form::submit($buttonText, ['class' => 'button small']) !!}

</div>		