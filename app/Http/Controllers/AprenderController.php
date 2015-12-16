<?php

namespace App\Http\Controllers;
use App\Aprender;
use App\Actividad;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AprenderController extends Controller
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
        $actividadAprender = Aprender::orderBy('id','desc')->get();
        return view('actividades.aprender.index', compact('actividadAprender'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $actividades = Actividad::lists('nombre', 'id');
        return view('actividades.aprender.create', compact('actividades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Aprender::create( $request->all() );
        return redirect('aprender');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aprender = Aprender::findOrFail( $id );
        return view('actividades.aprender.show', compact('aprender'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aprender = Aprender::findOrFail($id);

        $actividades = Actividad::lists('nombre', 'id');    

        return view('actividades.aprender.edit', compact('aprender', 'actividades'));
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
        $aprender = Aprender::findOrFail( $id );

        $aprender->update( $request->all() );

        return redirect('aprender');
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
