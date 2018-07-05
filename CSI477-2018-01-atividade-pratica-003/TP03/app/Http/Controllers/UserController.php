<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function todosUsuarios()
    {
        $users = User::all();
        return view('adm.list_clients')->with('lista',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createADM()
    {
        return view('adm.sign_adm');
    }
    public function createOP()
    {
        return view('adm.sign_op');
    }
    public function storeADM(Request $request)
    {
       User::create([
            'name' =>  $request->request->get('name'),
            'email' =>  $request->request->get('email'),
            'type' => '1',
            'password' => Hash::make( $request->request->get('password')),
        ]);
    }
    public function storeOP(Request $request)
    {
        User::create([
            'name' =>  $request->request->get('name'),
            'email' =>  $request->request->get('email'),
            'type' => '2',
            'password' => Hash::make( $request->request->get('password')),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
