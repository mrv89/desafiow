	

	<div class="large-6 medium-6 small-12 columns">

		{!! Form::label('nombre', 'Nombre' ) !!}
		{!! Form::text('nombre', null, ['class' => 'input', 'placeholder' => 'Nombre del Rol (Ej. Super Admin, Invitado, etc'] ) !!}
	
	</div><!-- /large-12 -->

	<div class="large-6 medium-6 small-12 columns">

		{!! Form::label('jerarquia', 'Jerarquía (Privilegios)' ) !!}
		{!! Form::select('jerarquia', [
		   '1' => '1',
		   '2' => '2',
		   '3' => '3']
		) !!}
				
		
	
	</div><!-- /large-12 -->	

	<div class="large-12 columns">
		
		{!! Form::label('descripcion', 'Descripción' ) !!}
		{!! Form::textarea('descripcion', null, ['class' => 'input-textarea'] ) !!}									
				
	</div>

	

	<div class="large-12 columns">
	
		<hr>

		{!! Form::submit($buttonText, ['class' => 'button small']) !!} 
	
	</div>		