@extends('themes.theme')
@section('css')
<link href=" {{ asset('css/formNew.css') }}" rel="stylesheet" />
@endsection
@section('content')

<div class="page-heading">
                <h1 class="page-title"><i class="ti-shopping-cart-full"></i> Produtos</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item">Administrativo</li>
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modal-produto"><i class="fa fa-plus"></i> Inserir</button>
                      
                        </div>
                    </div>
                    <div class="ibox-body">
                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Codigo</th>
                                    <th>Descrição</th>
                                    <th>Valor</th>
                                    <th>Estoque</th>
                                    <th>Codigo de Barra</th>
                                    <th>Status</th>
                                    <th>Config</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                           @foreach($produtos as $produto)
                               
                                     <tr>
                                            
                                            <td>{{ $produto->id }}</td>
                                            <td>{{ $produto->descricao }}</td>
                                            <td>{{ $produto->valor }}</td>
                                            <td> <span class="badge badge-warning m-r-5 m-b-5">{{ $produto->estoque }}</span></td>
                                            <td>{{ $produto->codigobarra }}</td>
                                            <td>{{ $produto->status }}</td>
                                            <td>
                                                <form  action="{{ route('produto.destroy',['Produto'=>$produto->id]) }}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                            <button class="btn btn-danger" title="Eliminar Produto"> <i class="ti-trash"></i></button>
                                                </form>
                                             
                                            <a class="btn btn-warning" title="Editar Produto" data-toggle="modal" data-target="#modal-Produto-edit-{{ $produto->id}}" 
                                            href=""><i class="ti-pencil"></i></a>
                          
                                           </td>
                                            
                                            
                                    </tr>
                                  
                            </div> </div>
                                         
                              @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
    @include('modal_produto')     
            
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
           
