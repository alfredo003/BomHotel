@extends('themes.theme')
@section('css')
<link href=" {{ asset('css/formNew.css') }}" rel="stylesheet" />
@endsection
@section('content')

<div class="page-heading">
                <h1 class="page-title"><i class="ti-shopping-cart-full"></i> Registrar Consumo</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item">Transações</li>
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">
                        <button class="btn btn-success" data-toggle="modal" data-target="#modal-consumo"><i class="fa fa-plus"></i> Novo Consumo</button>
                       
                        </div>
                    </div>
                    <div class="ibox-body">
                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                   
                                    <th>Codigo Reserva</th>
                                    <th>Hospede</th>
                                    <th>Quarto</th>
                                    <th>Serviço</th>
                                    <th>Produto</th>
                                    <th>Total</th>
                                    <th>Acção</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                           @foreach($consumos as $consumo)
                               
                                     <tr>
                                            
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td> <span class="badge badge-warning m-r-5 m-b-5"></span></td>
                                            <td></td>
                                            <td>
                                               
                                            <button class="btn btn-danger" title="Eliminar Utilizador" data-toggle="modal" data-target="#modal-confirm">
                                            <i class="ti-trash"></i></button>
                                             
                                            <a class="btn btn-info" title="Actividades do Utilizador "href="">
                                            <i class="ti-eye"></i></a>
                                            <a class="btn btn-warning" title="Editar dados do utilizador" data-toggle="modal" data-target="#modal-utilizador-edit" 
                                            href=""><i class="ti-pencil"></i></a>
                          
                                           </td>
                                            </td>
                                            
                                    </tr>
                                   
                            </div> </div>
                                          
                              @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
    @include('modal_consumo')       
            
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
           
