	

	<div class="large-12 columns">

		{!! Form::label('nombre', 'Nombre' ) !!}
		{!! Form::text('nombre', null, ['class' => 'input', 'placeholder' => 'Nombre del Imaginar'] ) !!}
	
	</div><!-- /large-12 -->

	<div class="large-12 columns">
		
		{!! Form::label('contenido', 'Contenido' ) !!}
		{!! Form::textarea('contenido', null, ['class' => 'input-textarea'] ) !!}									
				
	</div>

	<div class="large-12 columns">

		{!! Form::label('actividad_id', 'Actividad Asociada') !!}
		
		@if( isset($imaginar->actividad_id) )
	
			{!! Form::select('actividad_id', $actividades, $imaginar->actividad_id) !!}

		@else	
		
			{!! Form::select('actividad_id', $actividades) !!}
		
		@endif
	
	</div><!-- /large-12 -->	

	<div class="large-12 columns">
	
		<hr>

		{!! Form::submit($buttonText, ['class' => 'button small']) !!} 
	
	</div>		