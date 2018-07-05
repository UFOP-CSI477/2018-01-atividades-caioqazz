<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Test;
use App\Procedure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $id = Auth::user()->id;
    $exames =  Test::where('user_id',  $id )->get();;
    return view('pacientes.read')->with('lista',$exames);
    }
    
   
    public function relatorio(){
         $sql = DB::select('SELECT users.name, procedures.name AS procedures, procedures.price  FROM  tests, users , procedures WHERE tests.user_id=  users.id AND  tests.procedure_id =  procedures.id ');
         $sql2 = DB::select('SELECT SUM(procedures.price) AS totalprice FROM  tests, users , procedures WHERE tests.user_id=  users.id AND  tests.procedure_id =  procedures.id ');
          $sql3 = DB::select('SELECT COUNT(  procedures.id ) AS totalcount FROM  tests, users , procedures WHERE tests.user_id=  users.id AND  tests.procedure_id =  procedures.id ');
        
        
         
         return view('adm.relatorio')->with('lista',$sql)->with('total',$sql2)->with('total2',$sql3);
      
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $procedures =  Procedure::all();
       return view('pacientes.add_tests')->with('procedures',$procedures);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Test::create($request->all());
        session()->flash('mensagem', 'Inserido com sucesso!');
        return redirect()->action('TestController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function show(Test $test)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $teste = Test::find($id);
      $procedures = Procedure::all();
      return view('pacientes.update')->with('teste',$teste)->with('procedures',$procedures);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $teste = Test::find($id);
        $teste->fill($request->all());
        $teste->save();
        session()->flash('mensagem', 'Remarcado com sucesso!');
        return redirect()->action('TestController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teste = Test::find($id);
        $teste->delete();
        session()->flash('mensagem', 'Desmarcado com sucesso!');
        return redirect()->action('TestController@index');
    }
}
