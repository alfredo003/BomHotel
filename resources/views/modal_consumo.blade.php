<div class="modal fade" id="modal-consumo">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
        <span class="badge badge-success m-r-5 m-b-5" style=""> <div class="ibox-title"><i class="ti-bookmark-alt"></i> Efectuar Consumo </div></span>
   
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body"> 
    
    
        <div class="tab-content">
                <div class="tab-pane fade show active" id="tab-9-1">
         
         <form action="{{ route('consumo.store') }}" method="POST">
             @csrf

            <div class="row">
            
                <div class="col-sm-6 form-group">
                    <label>Reserva</label>
                    <select class="form-control" name="reserva">
                        <option>-----------</option>
                        @foreach($hospedes as $hospede)
                        <option value="{{ $hospede->id}}">{{ $hospede->name}}</option>
                       
                        @endforeach
                        </select>
                </div>
                <div class="col-sm-6 form-group">
                    <label>Produto</label>
                    <select class="form-control" name="produto">
                        <option>-----------</option>
                        @foreach($produtos as $produto)
                        <option value="{{ $produto->id}}">{{ $produto->descricao}}</option>
                      
                        @endforeach
                        </select>
                </div>

            </div>
            <div class="row">
                <div class="col-sm-4 form-group">
                    <label>Quantidade</label>
                    <input class="form-control" type="text" name="quantidade" placeholder="--------">
                </div>
                 <div class="col-sm-6 form-group">
                    <label>Serviço</label>
                    <select class="form-control" name="servico">
                        <option>-----------</option>
                        @foreach($servicos as $servico)
                        <option value="{{ $servico->id}}">{{ $servico->descricao}}</option>
                      
                        @endforeach
                </div>
            </div>
            
        </div>
              
            </div>
        <input type="hidden" name="user" value="{{ Auth::User()->id }}">
           
           <div class="modal-footer justify-content-between">
     
               
                <button class="form-control btn btn-success" type="submit"><i class="ti-shopping-cart"></i>  Confirmar Consumo</button>
             </div>
        </form>
  
                </div>
         
             
            </div>
        </div>
       
      </div>
      <!-- /.modal-content -->
    </div>   </div>