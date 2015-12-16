<?php

namespace App\Http\Controllers;
use App\ComicPagina;
use App\Comic;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Input as Input;

class ComicsPaginasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics_paginas = ComicPagina::orderBy('id', 'desc')->get();

        return view('comics.paginas.index', compact('comics_paginas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comics = Comic::lists('nombre', 'id');
        return view('comics.paginas.create', compact('comics'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Input::hasFile('url_img')){
            $img = Input::file('url_img');
            $img->move('uploads/comics', $img->getClientOriginalName());           
            $pageStore = $request->all();
            $pageStore['url_img'] = 'uploads/comics/' . $img->getClientOriginalName(); 
            ComicPagina::create( $pageStore );
            return redirect('comics-paginas');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
