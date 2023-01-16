@extends('themes.theme')
@section('css')
<link href=" {{ asset('css/formNew.css') }}" rel="stylesheet" />
@endsection
@section('content') 
<div class="page-heading">
                <h1 class="page-title">Acomodações</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item">Configurações</li>
                </ol>
            </div>
            <div class="page-content fade-in-up">

            <button  data-toggle="modal" data-target="#modal-acomodacao" class="btn btn-outline-success">
            <i class="fa fa-plus"></i> Inserir</button>
            <button  class="btn btn-info" data-toggle="modal" data-target="#modal-acomodacao" class="btn bt-info">
            <i  class="ti-reload"></i> Gerar Automático</button>
             <hr>
             <p class="badge badge-success m-b-5">Disponivel</p>
             <p class="badge badge-warning m-b-5">Manutenção</p>
             <hr>
                <div class="row">
                
                 @foreach($bedrooms as $bedroom)
                     <div class="col-md-3">
                         @if($bedroom->status == 'Disponivel')
                        <div class="ibox ibox-success">
                        @elseif($bedroom->status == 'Manutençao')
                        <div class="ibox ibox-warning">
                         @endif


                            <div class="ibox-head">
                                <div class="ibox-title">Acomodação #{{ $bedroom->codigo }}</div>
                                <div class="ibox-tools">
                                    <a href=""data-toggle="modal" data-target="#modal-acomodacaocog{{ $bedroom->codigo }}">
                                         <i class="fa fa-cog"></i>
                                    </a>
                               </div>
                            </div> 
                             <img class="card-img-top" src="{{ asset("".(empty($bedroom->photo) ? "img/image.png": $user->photo) ."") }}">   
                            <div class="ibox-body">
                             <p>Tipo: {{ $bedroom->tipo }}</p>
                             <p>Andar: {{ $bedroom->Andar }}</p>
                             <p>Capacidade: {{ $bedroom->capacidade }}</p>
                             <p> <small>Observações:{{ $bedroom->observacao }}</small> </p>
                            </div>
                        </div>
                    </div>


                    <div class="modal fade" id="modal-acomodacaocog{{ $bedroom->codigo }}">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">    
                              <span class="badge badge-primary m-r-5 m-b-5"><i class="ti-write"></i> Editar Acomodação [{{$bedroom->id}}]</span>
                              </h4>
                         
                                <form action="{{ route('bedroom.destroy',['bedroom' =>$bedroom->id]) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                 <button type="submit" class="text-danger" style="background:transparent;border:none;"><i class="ti-trash"></i> Eliminar</button>
                                </form>
                             
                            </div>
                            <div class="modal-body">
                            <div class="clf">
                            
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab-9-1">
                         
                         <form action="{{ route('bedroom.update',['bedroom' => $bedroom->id])}}" method="POST">
                             @csrf
                             @method('put')
                            <div class="row">
                            
                                <div class="col-sm-2 form-group">
                                    <label>Código</label>
                                    <input class="form-control" type="text" placeholder="" name="codigo" value="{{ $bedroom->codigo }}">
                                </div> 
                                <div class="col-sm-4 form-group">
                                    <label>Andar</label>
                                    <input class="form-control" type="text" placeholder="Nº" name="andar" value="{{ $bedroom->Andar }}">
                                </div>
                                 <div class="col-sm-4 form-group">
                                    <label>Capacidade</label>
                                    <select class="form-control" name="capacidade">
                                        <option value="{{ $bedroom->capacidade }}">{{ $bedroom->capacidade }}</option>
                                        <option value="2">3 Camas</option>
                                        <option></option>
                                        </select>
                                </div>
                                
                            </div>
                            <div class="row">
                               
                                <div class="col-sm-6 form-group">
                                    <label>Foto</label>
                                    <input class="form-control" type="file" name="photo" placeholder="Telefone ou Corréio Electronico">
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label>Tipo</label>
                                    <select class="form-control" name="tipo">
                                        <option value="{{ $bedroom->tipo }}">{{ $bedroom->tipo }}</option>
                                        <option value="SUITI">SUITI</option>
                                        <option></option>
                                        </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5 form-group">
                                    <label>Descrição</label>
                                    <textarea class="form-control" name="descricao" type="text" >{{ $bedroom->descricao }}</textarea>
                                </div>
                             
                                <div class="col-sm-5 form-group">
                                    <label>Obsevações</label>
                                    <textarea class="form-control" name="observacao" type="text">{{ $bedroom->observacao }}</textarea>
                                </div>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>Estado do Quarto</label>
                                <select class="form-control" name="status">
                                    <option value="{{ $bedroom->status }}">{{ $bedroom->status }}</option>
                                    <option value="Disponivel">Disponivel</option>
                                    <option value="Manutençao">Manutençao</option>
                                    </select>
                            </div>
                          
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-info" style="background:#3498db;"><i class="ti-check-box"></i> Actualizar</button>
                              
                            </div>
                        </form>
                                
                                </div>
                            </div>
                           
                          </div>
                          <!-- /.modal-content -->
                        </div> </div></div></div>
                    @endforeach
                
                               
              
                                  
                                
                                 
                  
                </div>
                
                
            </div>
           @include('modal_acomodacao')
            @endsection