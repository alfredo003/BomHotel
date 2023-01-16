@extends('themes.theme')
@section('css')
<link href=" {{ asset('css/formNew.css') }}" rel="stylesheet" />
<link href="{{ asset('vendors/select2/dist/css/select2.min.css') }}" rel="stylesheet" />
@endsection
@section('content')
<div class="page-heading">
                <h1 class="page-title"> <i class="ti-agenda"></i> Criar Novas Reservas</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item">Gestão de Reservas</li>
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-md-12">
                    <div class="ibox">
                            <div class="ibox-head">
                               <span class="badge badge-success m-r-5 m-b-5"> <div class="ibox-title">Nova Reserva</div></span>
                            </div>
                            <div class="ibox-body">
                                <div class="clf">
                                    <ul class="nav nav-tabs tabs-line-left">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#tab-9-1" data-toggle="tab"><i class="fa fa-user"></i> Principal</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#tab-9-2" data-toggle="tab"><i class="fa fa-heartbeat"></i> Acompanhantes</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#tab-9-2" data-toggle="tab"><i class="fa fa-heartbeat"></i> Observações</a>
                                        </li>
                          
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="tab-9-1">
                                 
                                 <form action="{{ route('Reserva.store')}} " method="POST">
                                   @csrf
                                    <div class="row">
                                    
                                        <div class="col-sm-12 form-group">
                                            <label>Hospede</label>
                                           
                                            <select class="form-control"  name="hospede">
                                                 <option value=""> .......</option>
                                                @foreach($hospedes as $hospede)
                                                <option value="{{ $hospede->id }}">{{ $hospede->name }}</option>
                                                @endforeach
                                               
                                                </select>
                                   </div>
                                       
                                     
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 form-group">
                                            <label>Quatidade Hospedes</label>
                                            <input class="form-control" type="number" name="quat_hospede" placeholder="----">
                                        </div>
                                        <div class="col-sm-4 form-group">
                                            <label>Entrada Prevista</label>
                                            <input class="form-control" type="date" name="Entrada">
                                        </div>
                                        <div class="col-sm-4 form-group">
                                            <label>Saida Prevista</label>
                                            <input class="form-control" type="date" name="saida">
                                        </div>
                                    </div>
                                    <span class="badge badge-danger m-r-5 m-b-5"><i class="fa fa-home"></i> Acomodação</span>
                                    <div class="row">
                                        <div class="col-sm-4 form-group">
                                            <label>Classificação</label>
                                            <select class="form-control" name="classificacao" >
                                                <option value="teste">teste</option>
                                                <option></option>
                                                </select>
                                        </div>
                                        <div class="col-sm-4 form-group">
                                            <label>Composição</label>
                                            <select class="form-control" name="composicao">
                                                <option value="teste">teste</option>
                                            </select>
                                        </div>
                                       
                                        <div class="col-sm-4 form-group">
                                            <label>Acomodação</label>
                                            <select class="form-control" name="bedroom">
                                                <option value=""> .......</option>
                                                @foreach($bedrooms as $bedroom)
                                                <option value="{{ $bedroom->id }}">{{ $bedroom->tipo }}</option>
                                                @endforeach
                                                </select>
                                        </div>
                                    </div>
                                 <!-- <div class="row">
                                   <div class="col-sm-3 form-group">
                                        <div class="card" style="width:300px;">
                                            <img class="card-img-top" src="{{ asset('img/22.png') }}">
                                                <div class="card-body">
                                                    <h4 class="card-title">Jane Smith</h4>
                                                    <div>Some quick example text.</div>
                                                </div>
                                                <ul class="list-group list-group-divider no-margin">
                                                    <li class="list-group-item" style="border-top-color:#e1eaec;">Sales
                                                        <span class="badge badge-danger badge-circle float-right">4</span>
                                                    </li>
                                                    <li class="list-group-item">Photos
                                                        <span class="badge badge-info badge-circle float-right">7</span>
                                                    </li>
                                                    <li class="list-group-item">Friends
                                                        <span class="badge badge-warning badge-circle float-right">24</span>
                                                    </li>
                                                </ul>
                                                <div class="card-footer">
                                                    <a class="text-info"><i class="fa fa-star"></i> Follow</a>
                                                    <span class="pull-right text-muted font-13">Joined in 12.01</span>
                                                </div>
                                        </div>
                                   </div>-->
                                    </div>
                                    <input type="hidden" name="user" value="{{ Auth::User()->id}}">
                                   
                                   <center> <div class="form-group">
                                       
                                        <button class="form-control btn btn-primary" type="submit"><i class="fa fa-check"></i>  Confirmar</button>
                                    </div> </center> 
                                </form>
                          
                                        </div>
                                  
                                     
                                    </div>
                                </div><br>
                               
                            </div>
                        </div>

                       
                    </div>
                
                </div>
                
                
            </div>
            @section('js')
            <script src="{{ asset('vendors/select2/dist/js/select2.full.min.js') }}" type="text/javascript"></script>

            @endsection
           
            @endsection