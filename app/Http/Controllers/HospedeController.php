<?php

namespace App\Http\Controllers;

use App\Hospede;
use Illuminate\Http\Request;

class HospedeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hospedes = Hospede::all();
        return view('cadastroHospede',[
            'title' => 'Hospedes - Bom Hotel',
            'hospedes' => $hospedes,
            'active' => 'reserva'
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

        //var_dump($request->all());
        $hospede = new Hospede();
        $hospede->create($request->except(['_token']));
       return redirect()->route('hospede.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hospede  $hospede
     * @return \Illuminate\Http\Response
     */
    public function show(Hospede $hospede)
    {
        return view('hospede_profile',[
            'hospede'=>$hospede,
            'title' => $hospede->name.' - Hospede',
            'active' => 'reserva'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hospede  $hospede
     * @return \Illuminate\Http\Response
     */
    public function edit(Hospede $hospede)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hospede  $hospede
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hospede $hospede)
    {
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hospede  $hospede
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hospede $hospede)
    {
        //
    }
}
