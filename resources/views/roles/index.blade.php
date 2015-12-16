@extends('app')

@section('content')

<div class="large-12 columns">
	
	@include('partials.title', array('type' => '', 'textTitle' => 'Roles'))
	
<table style="width:100%;">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Jerarquía</th>
			<th>Descripción</th>
			
		</tr>
	</thead>
	<tbody>
	@foreach($roles as $rol)

		<tr>
			<td><a href="{{ url('/roles', $rol->id) }}"> {{ $rol->nombre }}</a></td>
			<td><a href="{{ url('/roles', $rol->id) }}"> {{ $rol->jerarquia }}</a></td>
			<td><a href="{{ url('/roles', $rol->id) }}"> {{ $rol->descripcion }}</a></td>
						
		</tr>

	@endforeach
	</tbody>
</table>

</div>

@stop