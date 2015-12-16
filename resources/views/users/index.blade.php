@extends('app')

@section('content')

<div class="large-12 columns">
	
	@include('partials.title', array('type' => '', 'textTitle' => 'Usuarios'))
	
<table style="width:100%;">
	<thead>
		<tr>
			<th>Email</th>
			<th>Nombres</th>
			<th>Apellido Paterno</th>
			<th>Apellido Materno</th>
			
		</tr>
	</thead>
	<tbody>
	@foreach($usuarios as $usuario)
		<tr>
			<td><a href="{{ url('/usuarios', $usuario->id) }}"> {{ $usuario->email }}</a></td>
			<td><a href="{{ url('/usuarios', $usuario->id) }}"> {{ $usuario->nombres }}</a></td>
			<td><a href="{{ url('/usuarios', $usuario->id) }}"> {{ $usuario->apellido_paterno }}</a></td>
			<td><a href="{{ url('/usuarios', $usuario->id) }}"> {{ $usuario->apellido_materno }}</a></td>
						
		</tr>
	@endforeach
	</tbody>
</table>

</div>

@stop