@extends('themes.theme')
@section('content')
            <div class="page-heading">
                <h1 class="page-title">Definir Acesso</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item">Configurações</li>
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-lg-4 col-md-5">
                        <form class="form-horizontal" action="{{ route('Permicao.store') }}" method="post">
                            @csrf

                              <div class="form-group row">
                                <label class="col-sm-7 col-form-label"><span class="badge badge-primary m-r-5 m-b-5">
                                    <i class="ti-timer"></i> Nome da Função</span></label>

                                  <div class="col-sm-12">
                                      <input class="form-control" type="text"  name ="name" placeholder="Ex: Alfredo Manuel">
                                  </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-7 col-form-label"><span class="badge badge-danger m-r-5 m-b-5">
                                    <i class="ti-timer"></i> Descrição (Não é obrigatório)</span></label>

                                  <div class="col-sm-12">
                                      <textarea class="form-control" name="descricao">
                                      </textarea>
                                  </div>
                              </div>
                            
                              
                             
                              
                              <div class="form-group row">
                                  <label class="col-sm-7 col-form-label"><span class="badge badge-primary m-r-5 m-b-5">
                                 <i class="ti-timer"></i> Menu de Acesso</span></label>
                                  <div class="col-sm-12">
                                    <select class="form-control input-sm" name="menu">
                                        <option >-----------</option>
                                        <option value="Reservas">Reservas</option>
                                        <option value="Administrativa">Administrativa</option>
                                        <option value="Configurações">Configurações</option>
                                    </select>
                                  </div>
                              </div>
                              
                               <div class="modal-footer justify-content-between">
                           <button type="submit" class="btn btn-info" style="background:#3498db;"><i class="ti-check-box"></i> Cadastrar</button>
                          </div>
                          </form>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <div class="ibox">
                            <div class="ibox-body">
                              
                                        <h4 class="text-info m-b-20 m-t-20"><i class="fa fa-key"></i> Acessos do Sistema</h4>
                                        <table class="table table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Função</th>
                                                    <th>Descrição</th>
                                                    <th>Acessos</th>
                                                    <th>Data Cadastro</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if($permicoes)
                                                    @foreach($permicoes as $permicao) 
                                                <tr>
                                                  <td>{{ $permicao->id }}</td>
                                                    <td># {{ $permicao->name }}</td>
                                                    <td>{{ $permicao->descricao }}</td>
                                                    <td>
                                                        <span class="badge badge-success">{{ $permicao->menu }}</span>
                                                    </td>
                                                    <td>{{ $permicao->created_at }}</td>  
                                                </tr>@endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                   
                              
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