          <!-- CADASTRAR UTILIZADOR -->
          <div class="modal fade" id="modal-produto">
            <div class="modal-dialog modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">    
                  <span class="badge badge-primary m-r-5 m-b-5"><i class="ti-shopping-cart-full"></i> Criar Novo Produto</span>
                  </h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form class="form-horizontal" action="{{ route('produto.store') }}" method="post">
                  @csrf
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Descrição</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text"  name ="descricao" placeholder="Nome do produto">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Valor</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="number" name="valor" placeholder="Kz">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Estoque</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="number" name="estoque" placeholder="0">
                        </div>
                    </div>
                    
                     <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Status</label>
                      <div class="col-sm-10">
                        <select class="form-control input-sm" name="status">
                            <option value="Produto">Produto</option>
                            <option value="Serviço">Serviço</option>
                           
                        </select>
                         </div>
                        </div>
                     <div class="form-group row">
                            <label class="col-sm-5 col-form-label"><span class="badge badge-primary m-r-5 m-b-5"> <i class="ti-receipt"></i> Barra Codigo (Não é Obrigatório)</span></label>
                            <div class="col-sm-12">
                                <input class="form-control" type="text" name="codigobarra" placeholder="-------------">
                            </div>
                        </div>
                        <input type="hidden" name="user" value="{{Auth::User()->id}}">
                    </div>
                    
                     <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                  <button type="submit" class="btn btn-info" style="background:#3498db;"><i class="ti-check-box"></i> Cadastrar</button>
                </div>
                </form>
                </div>
               
              </div>
              <!-- /.modal-content -->
            </div>



      