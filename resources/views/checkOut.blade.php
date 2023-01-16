@extends('themes.theme')
@section('css')
<link href=" {{ asset('css/formNew.css') }}" rel="stylesheet" />
@endsection
@section('content')

<div class="page-heading">
                <h1 class="page-title">Check-Out</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item">Reservas</li>
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="ibox">
                    
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
                                    <a class="badge badge-danger" data-toggle="modal" data-target="#modal-checkin-{{ $reserva->id_reserva }}" style="color:#fff;">
                                    <i class="ti-location-arrow"></i> Check-Out</a>
                                  
                                    </td>
                            </tr>   
                            
                            @include('modal_checkin')
                             @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
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
           
