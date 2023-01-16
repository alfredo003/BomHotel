@extends('themes.theme')
@section('css')
<link href=" {{ asset('css/formNew.css') }}" rel="stylesheet" />
@endsection
@section('content')
<div class="page-heading">
                <h1 class="page-title"><i class="ti-calendar"></i> Mapa de Ocupação</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item">Ocupação</li>
                </ol>
            </div>
            <div class="page-content fade-in-up">

    
             <hr>
             <p class="badge badge-info m-b-5">Confirmado</p>
             <p class="badge badge-success m-b-5">Reservado</p>
             <p class="badge badge-danger m-b-5">Reserva expirada</p>
             <hr>
                <div class="row">
                
                 @foreach($reservas as $reserva)
                     <div class="col-md-3">
                        @if($reserva->checkin == 'activo')
                        <div class="ibox ibox-info">
                        @elseif(empty($bedroom->checkin))
                        <div class="ibox ibox-success">
                         @endif
                       <div class="ibox-head">
                                <div class="ibox-title">Acomodação #{{ $reserva->id}}</div>
                                <div class="ibox-tools">
                                    <a href=""data-toggle="modal" data-target="#modal-acomodacaocog{{ $reserva->id }}">
                                         <i class="fa fa-cog"></i>
                                    </a>
                               </div>
                            </div> 
                             
                            <div class="ibox-body">
                             <p>Hospede: {{ $reserva->id }}</p>
                             <p>Entrada: {{ $reserva->Entrada }}</p>
                             <p>Saida: {{ $reserva->saida }}</p>
                             <p> <small>Acomodação:{{ $reserva->bedroom }}</small> </p>
                            </div>
                        </div>
                    </div>


                    @endforeach
                
                               
              
                                  
                                
                                 
                  
                </div>
                
                
            </div>
           @include('modal_acomodacao')
            @endsection