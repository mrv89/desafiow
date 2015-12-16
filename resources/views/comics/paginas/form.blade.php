<div class="large-12 columns">

	{!! Form::label('url_img', 'Imagen Asociada' ) !!}
	{!! Form::file('url_img', null, ['class' => 'input', 'id' => 'file', 'placeholder' => 'Link de la imagen'] ) !!}

</div><!-- /large-12 -->

<div class="large-6 columns">
	
	{!! Form::label('posicion', 'Posición' ) !!}
	{!! Form::text('posicion', null, ['class' => 'input', 'placeholder' => 'Posición de la página'] ) !!}							
			
</div>

<div class="large-6 columns">

	{!! Form::label('comic_id', 'Comic Asociado') !!}
	
	@if( isset($comicPagina->comic_id) )
	
	{!! Form::select('comic_id', $comics, $comicPagina->comic_id) !!}

	@else	
	
		{!! Form::select('comic_id', $comics) !!}
	
	@endif

</div><!-- /large-12 -->	

<div class="large-12 columns">	

	{!! Form::submit($buttonText, ['class' => 'button small']) !!}

</div>	 	