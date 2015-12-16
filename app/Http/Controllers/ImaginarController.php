<?php

namespace App\Http\Controllers;
use App\Imaginar;
use App\Actividad;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ImaginarController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actividadImaginar = Imaginar::orderBy('id','desc')->get();
        return view('actividades.imaginar.index', compact('actividadImaginar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $actividades = Actividad::lists('nombre', 'id');
    
        return view('actividades.imaginar.create', compact('actividades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Imaginar::create( $request->all() );

        return redirect('imaginar');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $imaginar =  Imaginar::findOrFail($id);
        return view('actividades.imaginar.show', compact('imaginar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $imaginar = Imaginar::findOrFail($id);

        $actividades = Actividad::lists('nombre','id');

        return view('actividades.imaginar.edit', compact('imaginar', 'actividades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $imaginar = Imaginar::findOrFail( $id );

        $imaginar->update( $request->all() );

        return redirect('imaginar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
