<?php

namespace App\Http\Controllers;

use App\Procedure;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
class ProcedureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function todos(){
        $procedures = Procedure::all();
        return view('procedimentos')->with('lista',$procedures);
    }
     public function index()
    {
        $procedures = Procedure::all();
        return view('adm.list_procedures')->with('lista',$procedures);
    }

    public function indexOp()
    {
        $procedures = Procedure::all();
        return view('operador.read_procedures')->with('lista',$procedures);
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adm.create_procedures');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Procedure::create($request->all());
        session()->flash('mensagem', 'Inserido com sucesso!');
        return redirect()->action('ProcedureController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Procedure  $procedure
     * @return \Illuminate\Http\Response
     */
    public function show(Procedure $procedure)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Procedure  $procedure
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    $procedure = Procedure::find($id);
    return view('adm.update_procedures')->with('procedure', $procedure) ;
    }

    public function editOp($id)
    {
    $procedure = Procedure::find($id);
    return view('operador.update_price')->with('linha', $procedure) ;
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Procedure  $procedure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $procedure = Procedure::find($id);
        $procedure->fill($request->all());
        $procedure->save();
        session()->flash('mensagem', 'Alterado com sucesso!');
        return redirect()->action('ProcedureController@index');
    }

    public function updateOp(Request $request)
    {
        $procedure = Procedure::find($request->request->get('id'));
        $procedure->fill($request->all());
        $procedure->save();
        session()->flash('mensagem', 'Alterado com sucesso!');
        return redirect()->action('ProcedureController@indexOp');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Procedure  $procedure
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $procedure = Procedure::find($id);
        try{
            $procedure->delete();
        }catch(QueryException $e){
        session()->flash('mensagem', 'Falha! Esse procedimento possui exames agendados');
        return redirect()->action('ProcedureController@index');
        }
        session()->flash('mensagem', 'Deletado com sucesso!');
        return redirect()->action('ProcedureController@index');
    }
}
