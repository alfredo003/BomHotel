<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\MyHotel;
use App\Reserva;
use App\Permicoes;
use App\Reserva_v;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    public function __construct()
    {
       
         
    }
    
    public function home()
    {
        if(Auth::check() === true){
           
         return view('home',[
            'title' => 'Bem-vindo - BomHotel - Sistema de gestão de Hotel',
            'active' => 'active'
            ]);}
             return redirect()->route('login.index');
        
    }

    public function myHotel()
    {
        if(Auth::check() === true){
        $myhotel = MyHotel::all();
       return view('myHotel',[
            'title' => 'Infotur | BomHotel',
            'hotel' => $myhotel,
            'active' => 'config'
        ]);}
        return redirect()->route('login.index');
    }
  


    public function checkout()
    {     if(Auth::check() === true){
        $reservas = Reserva_v::all();
        return view('checkOut',[
            'title' => 'Check-Out | Bom Hotel',
            'reservas' => $reservas,
            'active' => 'reserva'
        ]);}
        return redirect()->route('login.index');
    }

    public function noPermicao()
    {
        if(Auth::check() === true){
        return view('noPermicoes',[
            'title' => 'Acesso Negado!'
          

        ]); }
        return redirect()->route('login.index');
    }

    public function Permicao()
    {
        $permicoes = Permicoes::all();
        if(Auth::check() === true && Auth::User()->profile == 'Administrador'){
        return view('permicoes',[
            'title' => 'Definir Acesso - Bomhotel',
            'permicoes' =>$permicoes,
            'active' => 'config'
        ]); }
        return redirect()->route('login.index');
    }

    public function PermicaoStore(Request $request)
    {
       $permicao = new Permicoes;
       $permicao->name = $request->name;
       $permicao->descricao = $request->descricao;
       $permicao->menu = $request->menu;
       $permicao->save();
       return redirect()->route('Permicao.index');
    }

    public function mapaOcupacao()
    {
       

        $reservas = Reserva::all();
        return view('mapaOcupacao',[
            'title' => 'Mapa de Ocupação - BomHotel',
            'reservas' =>$reservas,
            'active' => 'reserva'
        ]);
    }
}
