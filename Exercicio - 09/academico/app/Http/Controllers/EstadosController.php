<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estado;
class EstadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
    $estados = Estado::all();
    return view('estado.index')->with('estados',$estados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Estado::create($request->all());
        session()->flash('mensagem', 'Inserido com sucesso!');
        return redirect()->action('EstadosController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Estado $estado)
    {
        return view('estado.show')->with('estado',$estado);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Estado $estado)
    {
        return view('estado.edit')->with('estado',$estado);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estado $estado)
    {
        $estado->fill($request->all());
        $estado->save();
        session()->flash('mensagem', 'Alterado com sucesso!');
        return redirect()->route('estados.show', $estado->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estado $estado)
    {
        $estado->delete();
        session()->flash('mensagem', 'Deletado com sucesso!');
        return redirect()->action('EstadosController@index');
    }
}
