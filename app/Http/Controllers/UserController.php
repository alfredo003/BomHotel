<?php

namespace App\Http\Controllers;

use App\Permicoes;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::User()->profile == 'Administrador'){
            $permicoes = Permicoes::all();
        $users = User::all();
        return view('utilizador',[
            'title' => 'Utilizador - Bom Hotel',
            'users' => $users,
            'permicoes' => $permicoes,
            'active' => 'config'
        ]);}

       return redirect()->route('erro.noPermicao');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->profile = $request->profile;
        $user->password = Hash::make($request->password);
        $user->date_exp = $request->date_exp;
        $user->save();
      
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('utilizador_profile',[
            'user'=>$user,
            'title' => $user->name.' - Perfil',
            'active' => 'config'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->profile = $request->profile;
        if(!empty($request->password) || !empty($request->date_exp)){
        $user->password = $request->password; 
        $user->date_exp = $request->date_exp;
        }
       
        $user->save();
      
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index');
    }
}
