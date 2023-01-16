@extends('themes.theme')
@section('css')
<link href=" {{ asset('css/formNew.css') }}" rel="stylesheet" />
@endsection
@section('content')
 
<div class="page-heading">
                <h1 class="page-title"><i class="ti-user"></i> Cadastrar Hospedes</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item">Gestão de Reservas</li>
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modal-hospede"><i class="fa fa-plus"></i> Hospede</button>
                        <button class="btn btn-outline-primary"><i class="ti-printer"></i> Imprimir</button>
                        </div>
                    </div>
                    <div class="ibox-body">
                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                     <th>Visivel</th>
                                    <th>Nome</th>
                                    <th>Nacionalidade</th>
                                    <th>Nº Idetif</th>
                                    <th>Email</th>
                                    <th>Tipo Hospede</th>
                                    <th>Data Cadastro</th>
                                    <th>Config</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                           @foreach($hospedes as $hospede)
                               
                           
                            <tr>
                                    <td><span class="text-success"><i class="fa fa-check"></i></span></td>
                                    <td>{{ $hospede->name}}</td>
                                    <td>{{ $hospede->nascionalidade}}</td>
                                    <td>{{ $hospede->numIdt}}</td>
                                    <td>{{ $hospede->email}}</td>
                                    <td><span class="badge badge-warning m-r-5 m-b-5">{{ $hospede->tipoHospede}}</span></td>
                                    <td>{{ $hospede->created_at}}</td>
                                    <td>
                                    <button class="text-warning" style="background:transparent;border:none;" data-toggle="modal" data-target="#modal-confirm">
                                    <i class="ti-pencil"></i></button>
                                    <a class="text-info" style="background:transparent;border:none;" href="" >
                                    <i class="ti-eye"></i></a>
                                    </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
              
            </div>
            @include('modal_hospede')
            
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
           
