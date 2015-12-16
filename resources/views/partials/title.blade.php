@if ($type == 'add')
   <h2><i class="fa fa-pencil-square"></i> Agregar {!! $textTitle !!}</h2>
@elseif ($type == 'edit')
    <h2><i class="fa fa-pencil-square-o"></i> Editar {!! $textTitle !!}</h2>
@else
    <h2><i class="fa fa-pencil-square-o"></i> {!! $textTitle !!}</h2>
@endif