@extends('themes.theme')
@section('css')
<link href=" {{ asset('css/formNew.css') }}" rel="stylesheet" />
@endsection
@section('content')
<div class="page-heading">
                <h1 class="page-title"><i class="ti-import"></i> Efectuar Check-In</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item">Gestão de Reservas</li>
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="row">
                <div class="col-md-1"></div>
                    <div class="col-md-12">
                    <div class="ibox">
                            <div class="ibox-head">
                               <span class="badge badge-success m-r-5 m-b-5" style=""> <div class="ibox-title"><i class="ti-write"></i> Check-In [ Nº0034 ] </div></span>
                            </div>
                       
                            <div class="ibox-body">
                                <div class="clf">
                                
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="tab-9-1">
                                 
                                 <form action="#">
                                    
                                    <div class="row">
                                    
                                        <div class="col-sm-6 form-group">
                                            <label>Hospede</label>
                                            <input class="form-control" type="text" placeholder="ex:Alfredo Chivela Manuel">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Código da Reserva</label>
                                            <input class="form-control" type="text" placeholder="Telefone ou Corréio Electronico">
                                        </div>
                                    </div>
                                   
                                   <center> <div class="form-group">
                                       
                                        <button class="form-control btn btn-success btn-lg" ><i class="fa fa-search"></i>  Pesquisar Reserva</button>
                                    </div> </center> 
                                </form>
                          
                                        </div>
                                 
                                       
                                    </div>
                                </div><br>
                               
                            </div>
                        </div>

                       
                    </div>
                
                </div>
                <span class="badge badge-success m-r-5 m-b-5"> 
                <div class="ibox-title"><i class="ti-agenda"></i> Reservas Resente</div>
                </span>
                <div class="ibox-body">
                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Hospede</th>
                                    <th>Data da Reserva</th>
                                     <th>Acomodação</th> 
                                     <th>Entrada Prevista</th>
                                    <th>Código Reserva</th>
                                    <th>Nacionalidade</th>
                                    <th>Config</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                           @foreach($reservas as $reserva)
                               
                         
                            <tr>
                                    <td>{{ $reserva->name }}</td>
                                    <td>{{ date('d/m/Y H:i',strtotime($reserva->created_at ))}}</td>
                                    <td>{{ $reserva->codigo }} - {{ $reserva->tipo }}</td>
                                    <td>{{ $reserva->Entrada }}</td>
                                    <td><span class="badge badge-danger">{{ $reserva->codigo }}</span></td>
                                    <td>{{ $reserva->nascionalidade }}</td>
                                    <td>
                                    <a class="badge badge-success" data-toggle="modal" data-target="#modal-checkin-{{ $reserva->id_reserva }}" style="color:#fff;">
                                    <i class="ti-location-arrow"></i> Check-In</a>
                                  
                                    </td>
                            </tr>   
                            
                            @include('modal_checkin')
                             @endforeach
                            </tbody>
                        </table>
                    </div>
                
            </div>
         

            
            @endsection
           
           