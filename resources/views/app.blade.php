<!doctype html>
<html class="no-js" lang="en">
	<head>
	
	<meta charset="utf-8" />
	
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<title>DesafioW</title>
	
	<link rel="stylesheet" href="{{ asset('/css/foundation.css') }}" />
	
	<link rel="stylesheet" href="{{ asset('/css/app.css') }}" />

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,900,700' rel='stylesheet' type='text/css'>
	
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600|Roboto:400,500,700,900' rel='stylesheet' type='text/css'>

	</head>

	<body>

	<div class="row row-full" style="background-color:#fff;">

      <div style="padding-left:0;" class="large-2 columns">
        
        <h1><img src="{{ asset('/img/logo.png') }}" alt="DesafioW"></h1>
      
      </div><!-- /large-3 -->
      
      <div class="large-10 columns">
        
        <div class="pull-right">
	    
	        <ul id="top-menu" class="dropdown menu" data-dropdown-menu>
	    
	          <li>

	            <a>Hola, Emilio Venegas</a>
	            
	          </li>
	    
	          <li>
	    
	            <a href="#"><i class="fa fa-align-justify"></i></a>
	    
	            <ul class="menu">
	    
	              <li><a href="#">Item 2A</a></li>
	    
	              <li><a href="#">Item 2B</a></li>
	    
	            </ul>
	    
	          </li>
	          
	        </ul>

        </div><!-- /pull-right -->
      
      </div><!-- /large-9 -->
    
    </div><!-- /row -->

    <div class="row row-full" data-equalizer>
     
      <div style="padding-left:0;" class="large-2 columns" data-equalizer-watch>
     	
        <ul id="sidenav" class="vertical menu" style="">

          <li><a href="#"><i class="fa fa-desktop"></i> Administración</a></li>
     
          <li>

            <a href="#"><i class="fa fa-rocket"></i> Desafíos </a>
     
            <ul class="nested vertical menu">
     
              <li><a href="{{ url('/desafios') }}">Todos los Desafíos</a></li>
     
              <li><a href="{{ url('/desafios/create') }}">Añadir Nuevo</a></li>             
     
            </ul>
     
          </li>
     
          <li>

          	<a href="#"><i class="fa fa-pencil"></i> Actividades</a>

          	<ul class="nested vertical menu">
     
              <li><a href="{{ url('/actividades') }}">Todas las Actividades</a></li>
     
              <li><a href="{{ url('/actividades/create') }}">Añadir Nueva</a></li>             
     
            </ul>

          </li>

          <li>

          	<a href="#"><i class="fa fa-globe"></i> Actuar</a>

          	<ul class="nested vertical menu">
     
              <li><a href="{{ url('/actuar') }}">Todos los Actuar</a></li>
     
              <li><a href="{{ url('/actuar/create') }}">Añadir Nuevo</a></li>             
     
            </ul>

          </li>

          <li>

          	<a href="#"><i class="fa fa-graduation-cap"></i>  Aprender</a>

          	<ul class="nested vertical menu">
     
              <li><a href="{{ url('/aprender') }}">Todos los Aprender</a></li>
     
              <li><a href="{{ url('/aprender/create') }}">Añadir Nuevo</a></li>             
     
            </ul>

          </li>
     
          <li>

          	<a href="#"> <i class="fa fa-lightbulb-o"></i>  Imaginar</a>

          	<ul class="nested vertical menu">
     
              <li><a href="{{ url('/imaginar') }}">Todos los Imaginar</a></li>
     
              <li><a href="{{ url('/imaginar/create') }}">Añadir Nuevo</a></li>             
     
            </ul>

          </li>     
     
          <li>

          	<a href="#"><i class="fa fa-object-group"></i> Comics</a>

          	<ul class="nested vertical menu">
          		
          		<li><a href="{{ url('/comics') }}">Todos los Comics</a></li>

          		<li><a href="{{ url('/comics/create') }}">Añadir Nuevo</a></li>

          		<li><a href="{{ url('/comics-paginas') }}">Todas las Páginas</a></li>

          		<li><a href="{{ url('/comics-paginas/create') }}">Añadir Nueva</a></li>

          	</ul>

          </li>
     
          <li>

          	<a href="#"><i class="fa fa-users"></i> Usuarios</a>

          	<ul class="nested vertical menu">
          		
          		<li><a href="{{ url('/usuarios') }}">Todos los usuarios</a></li>

          		<li><a href="{{ url('/usuarios/create') }}">Añadir Nuevo</a></li>
          		
          		<li><a href="{{ url('/roles') }}">Roles</a></li>
          		
          		<li><a href="{{ url('/roles/create') }}">Añadir Nuevo Rol</a></li>

          	</ul>

          </li>          
     
        </ul><!-- /vertical-menu -->
     
      </div><!-- /large-3 -->
     
      <div class="large-10 columns" data-equalizer-watch>

	      <div class="row">

	        <div class="large-12">
	      
	          <nav aria-label="You are here:" role="navigation">
	      
	            <ul class="breadcrumbs">
	      
	              <li><a href="#">Home</a></li>
	      
	              <li><a href="#">Features</a></li>
	      
	              <li class="disabled">Gene Splicing</li>
	      
	              <li>
	      
	                <span class="show-for-sr">Current: </span> Cloning
	      
	              </li>
	      
	            </ul>
	      
	          </nav>

	        </div><!-- /large-12 -->

	      </div><!-- /row -->

	      <div class="row">
	      	@yield('content')
	      </div>     

      </div><!-- /large-9 -->
    
    </div><!-- /row -->

  

	<div class="row row-full">
		
	</div>
		
	<!-- Scripts -->
	<script src="{{ asset('/js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('/js/vendor/what-input.min.js') }}"></script>
    <script src="{{ asset('/js/foundation.min.js') }}"></script>
    <script src="{{ asset('/js/app.js') }}"></script>
    <script src="{{ asset('/js/menu.js') }}"></script>

	</body>

</html>