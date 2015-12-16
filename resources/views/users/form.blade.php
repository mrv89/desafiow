
<div class="large-12 columns">

	{!! Form::label('nombres', 'Nombres' ) !!}
	{!! Form::text('nombres', null, ['class' => 'input', 'placeholder' => 'Nombres'] ) !!}

</div><!-- /large-12 -->

<div class="large-12 columns">

	{!! Form::label('apellido_paterno', 'Apellido Paterno' ) !!}
	{!! Form::text('apellido_paterno', null, ['class' => 'input', 'placeholder' => 'Apellido Paterno'] ) !!}

</div><!-- /large-12 -->

<div class="large-12 columns">
	
	{!! Form::label('apellido_materno', 'Apellido Materno' ) !!}
	{!! Form::text('apellido_materno', null, ['class' => 'input', 'placeholder' => 'Apellido Materno'] ) !!}
			
</div>

<div class="large-6 columns">
	
	{!! Form::label('email', 'Email' ) !!}
	{!! Form::text('email', null, ['class' => 'input', 'placeholder' => 'Email'] ) !!}								
			
</div>

<div class="large-6 columns">

	{!! Form::label('rut', 'RUT' ) !!}
	{!! Form::text('rut', null, ['class' => 'input', 'placeholder' => 'RUT'] ) !!}
		
</div><!-- /large-6 -->	

<div class="large-12 columns">

	<hr>

	{!! Form::submit($buttonText, ['class' => 'button small']) !!}

</div>		