@extends('themes.theme')
@section('css')
<link href=" {{ asset('css/formNew.css') }}" rel="stylesheet" />
@endsection
@section('content')

<div class="page-heading">
                <h1 class="page-title"><i class="ti-id-badge"></i> Utilizadores</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item">Configurações</li>
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modal-utilizador"><i class="fa fa-plus"></i> Inserir</button>
                        <button class="btn btn-outline-primary"><i class="ti-printer"></i> Imprimir</button>
                        </div>
                    </div>
                    <div class="ibox-body">
                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>*</th>
                                    <th>Nome</th>
                                    <th>Utilizador</th>
                                    <th>Palavra-passe</th>
                                    <th>Perfil</th>
                                    <th>Data Cadastro</th>
                                    <th>Config</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                           @foreach($users as $user)
                               
                                     <tr>
                                            <td> <div>
                                                <img src="{{ asset("".(empty($user->photo) ? "img/avatar.png": $user->photo) ."") }}" width="50px">
                                            </div></td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->username }}</td>
                                            <td>{{  mb_substr($user->password,30) }}</td>
                                            <td> <span class="badge badge-warning m-r-5 m-b-5">{{ $user->profile }}</span></td>
                                            <td>{{ date('d/m/Y H:i',strtotime($user->created_at ))}}</td>
                                            <td>
                                               
                                            <button class="btn btn-danger" title="Eliminar Utilizador" data-toggle="modal" data-target="#modal-confirm">
                                            <i class="ti-trash"></i></button>
                                             
                                            <a class="btn btn-info" title="Actividades do Utilizador "href="{{ route('user.show',['user' => $user->id]) }}">
                                            <i class="ti-eye"></i></a>
                                            <a class="btn btn-warning" title="Editar dados do utilizador" data-toggle="modal" data-target="#modal-utilizador-edit-{{ $user->id}}" 
                                            href=""><i class="ti-pencil"></i></a>
                          
                                           </td>
                                            </td>
                                            
                                    </tr>
                                   <!-- EDITAR UTILIZADOR -->

                                   <div class="modal fade" id="modal-utilizador-edit-{{ $user->id}}">
                                    <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h4 class="modal-title">    
                                        <span class="badge badge-warning m-r-5 m-b-5"><i class="ti-write"></i> Editar Utilizador [ {{ $user->name}}]</span>
                                        </h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">
                                        <form class="form-horizontal" action="{{ route('user.update',['user'=>$user->id]) }}" method="post">
                                        @csrf
                                        @method('put')
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Nome</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text"  name ="name" value=" {{ $user->name }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Utilizador</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" name="username" value=" {{ $user->username }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" name="email" value=" {{ $user->email }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Perfil</label>
                                                <div class="col-sm-10">
                                                <select class="form-control input-sm" name="profile">
                                                    <option value="{{ $user->profile }}">{{ $user->profile }}</option>
                                                <option value="Front-Office - Recepção">Front-Office - Recepção</option>
                                            
                                            </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Palavra-passe</label>
                                            <div class="col-sm-10">
                                            <input class="form-control" type="password" name="password" placeholder="">
                                                </div>
                                        </div>
                                            
                                            <div class="form-group row">
                                                <label class="col-sm-7 col-form-label"><span class="badge badge-warning m-r-5 m-b-5">
                                            <i class="ti-timer"></i> Data Expiração de senha</span></label>
                                                <div class="col-sm-12">
                            
                                                <input class="form-control" type="date" name="date_exp" value=" {{ $user->date_exp }}">
                                    
                                                </div>
                                            </div>
                                            
                                            <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="btn btn-info" style="background:#3498db;"><i class="ti-reload"></i> Actualizar</button>
                                        </div>
                                        </form>
                                        </div>
                                    
                                    </div>
                              <!-- /.modal-content -->
                            </div> </div>
                                            @include('modal_confirmar')
                              @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            @include('modal_utilizador')
            
@section('js')
          <script src="{{ asset('vendors/DataTables/datatables.min.js') }}" type="text/javascript"></script>
          <script type="text/javascript">
        $(function() {
            $('#example-table').DataTable({
                pageLength: 10,
                //"ajax": './assets/demo/data/table_data.json',
                /*"columns": [
                    { "data": "name" },
                    { "data": "office" },
                    { "data": "extn" },
                    { "data": "start_date" },
                    { "data": "salary" }
                ]*/
            });
        })
    </script>
    @endsection
@endsection
           
