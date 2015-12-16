
<div class="large-12 columns">

	{!! Form::label('nombre', 'Nombre' ) !!}
	{!! Form::text('nombre', null, ['class' => 'input', 'placeholder' => 'Nombre del Desafío'] ) !!}

</div><!-- /large-12 -->

<div class="large-12 columns">

	{!! Form::label('titulo', 'Título' ) !!}
	{!! Form::text('titulo', null, ['class' => 'input', 'placeholder' => 'Título del Desafío'] ) !!}

</div><!-- /large-12 -->

<div class="large-12 columns">
	
	{!! Form::label('mision', 'Misión' ) !!}
	{!! Form::text('mision', null, ['class' => 'input', 'placeholder' => 'Nombre de la misión'] ) !!}
			
</div>

<div class="large-12 columns">
	
	{!! Form::label('contenido', 'Contenido' ) !!}
	{!! Form::textarea('contenido', null, ['class' => 'input-textarea'] ) !!}									
			
</div>

<div class="large-6 columns">

	{!! Form::label('video_url', 'Vídeo URL' ) !!}
	{!! Form::text('video_url', null, ['class' => 'input', 'placeholder' => 'URL del Vídeo'] ) !!}
		
</div><!-- /large-6 -->

<div class="large-6 columns">						
	
	{!! Form::label('fecha_creacion', 'Fecha de Publicación' ) !!}
	{!! Form::input('date','fecha_creacion', date('Y-m-d'), ['class' => 'input', 'placeholder' => ''] ) !!}				
		
</div>				

<div class="large-12 columns">

	<hr>

	{!! Form::submit($buttonText, ['class' => 'button small']) !!}

</div>		