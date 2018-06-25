<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cidade;
use App\Estado;
class CidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cidades = Cidade::all(); 
        $estados = Estado::all(); 
        return view('cidade.index')->with('cidades',$cidades)->with('estados',$estados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estados = Estado::all(); 
        return view('cidade.create')->with('estados',$estados);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        Cidade::create($request->all());
        session()->flash('mensagem', 'Inserido com sucesso!');
        return redirect()->action('CidadesController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Cidade $cidade)
    {
        $estado = Estado::find($cidade->estado_id);
        return view('cidade.show')->with('cidade', $cidade)->with('estado',$estado);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Cidade $cidade)
    {
        $estados = Estado::all(); 
        return view('cidade.edit')->with('cidade', $cidade)->with('estados', $estados);;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cidade $cidade)
    {
        $cidade->fill($request->all());
        $cidade->save();
        session()->flash('mensagem', 'Alterado com sucesso!');
        return redirect()->route('cidades.show', $cidade->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cidade $cidade)
    {
        $cidade->delete();
        session()->flash('mensagem', 'Deletado com sucesso!');
        return redirect()->action('CidadesController@index');
    }
}
