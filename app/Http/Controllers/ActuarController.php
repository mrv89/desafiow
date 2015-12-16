<?php

namespace App\Http\Controllers;
use App\Actuar;
use App\Actividad;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ActuarController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
    	
    	$actividadActuar = Actuar::orderBy('id','desc')->get();
    	
    	return view('actividades.actuar.index', compact('actividadActuar'));
    }

     public function show($id){
    
    	$actuar = Actuar::findOrFail($id);
    
    	return view('actividades.actuar.show', compact('actuar'));
    
    }

    public function create(){

    	$actividades = Actividad::lists('nombre', 'id');
    
    	return view('actividades.actuar.create', compact('actividades'));
    
    }

    public function store( Request $request ){    
    	
    	Actuar::create( $request->all() );

    	return redirect('actuar');

    }

    public function edit($id){
        
        $actuar = Actuar::findOrFail($id);
        
       	$actividades = Actividad::lists('nombre', 'id');    
        
        return view('actividades.actuar.edit', compact('actuar', 'actividades'));

    }

    public function update($id, Request $request){

        $actuar = Actuar::findOrFail( $id );

        $actuar->update( $request->all() );

        return redirect('actuar');
    }
}
