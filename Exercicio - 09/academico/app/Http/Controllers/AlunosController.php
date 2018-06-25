<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Aluno;
use App\Cidade;
class AlunosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $alunos = Aluno::all(); 
       $cidades = Cidade::all(); 
       return view('aluno.index')->with('alunos',$alunos)->with('cidades',$cidades);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cidades = Cidade::all(); 
        return view('aluno.create')->with('cidades',$cidades);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Aluno::create($request->all());
        session()->flash('mensagem', 'Inserido com sucesso!');
        return redirect()->action('AlunosController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Aluno $aluno)
    {
        $cidade = Cidade::find($aluno->cidade_id);
        return view('aluno.show')->with('aluno', $aluno)->with('cidade',$cidade);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Aluno $aluno)
    {
        $cidades = Cidade::all(); 
        return view('aluno.edit')->with('aluno', $aluno)->with('cidades', $cidades);;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aluno $aluno)
    {
        $aluno->fill($request->all());
        $aluno->save();
        session()->flash('mensagem', 'Alterado com sucesso!');
        return redirect()->route('alunos.show', $aluno->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( Aluno $aluno)
    {
        $aluno->delete();
        session()->flash('mensagem', 'Deletado com sucesso!');
        return redirect()->action('AlunosController@index');
    }
}
