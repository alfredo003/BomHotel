<?php

namespace App\Http\Controllers;
use App\Bedroom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class bedroomsController extends Controller
{
    public function index()
    {
        if(Auth::User()->profile == 'Administrador'){
        $bedrooms = Bedroom::all();
        return view('novaAcomodacao',[
            'title' => 'Acomodação ( Quartos ) - Bom Hotel',
            'bedrooms'=> $bedrooms,
            'active' => 'config'
        ]);}

        return redirect()->route('erro.noPermicao');
    }

    public function store(Request $request)
    {
     $badroom = new Bedroom();
     $badroom->create($request->except(['_token']));
     return redirect()->route('badroom.index');
    }

    public function update(Request $request, Bedroom $bedroom)
    {
       $bedroom->codigo = $request->codigo;
        $bedroom->andar = $request->andar;
        $bedroom->capacidade = $request->capacidade;
        $bedroom->tipo = $request->tipo;
        $bedroom->descricao = $request->descricao;
        $bedroom->observacao = $request->observacao;
        if(!empty($request->photo) || !empty($request->status)){
            $bedroom->photo = $request->photo;
            $bedroom->status = $request->status;
            }
       $bedroom->save();
       
     return redirect()->route('badroom.index');
    }


    public function destroy(Bedroom $bedroom)
    {
        $bedroom->delete();
        return redirect()->route('badroom.index');
    }

}
