<?php

namespace App\Http\Controllers;

use App\Consumo;
use App\Hospede;
use App\Produto;
use App\Reserva;
use Illuminate\Http\Request;

class ConsumoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consumos = Consumo::all();
        $hospedes = Hospede::all();
        $produtos = Produto::where('status','Produto')->get();
        $servicos = Produto::where('status','Serviço')->get();
 
        return view('registrarConsumo',[
            'title' => 'Registrar Consumo - Bom Hotel',
            'consumos' => $consumos,
            'produtos' => $produtos,
            'hospedes' => $hospedes,
            'servicos' => $servicos,
            'active' => 'transacao'
        ]);
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
        $consumo = new Consumo();
        $consumo->reserva = $request->reserva;
      
        $consumo->produto = $request->servico;
       
       
        $consumo->quantidade = $request->quantidade;
        $consumo->user = $request->user;
       
        $consumo->save();
      
        return redirect()->route('consumo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Consumo  $consumo
     * @return \Illuminate\Http\Response
     */
    public function show(Consumo $consumo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Consumo  $consumo
     * @return \Illuminate\Http\Response
     */
    public function edit(Consumo $consumo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Consumo  $consumo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consumo $consumo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Consumo  $consumo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consumo $consumo)
    {
        //
    }
}
