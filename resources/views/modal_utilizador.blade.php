          <!-- CADASTRAR UTILIZADOR -->
        <div class="modal fade" id="modal-utilizador">
                            <div class="modal-dialog modal-xl">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">    
                                  <span class="badge badge-primary m-r-5 m-b-5"><i class="ti-write"></i> Criar Novo Utilizador</span>
                                  </h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <form class="form-horizontal" action="{{ route('user.store') }}" method="post">
                                  @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Nome</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text"  name ="name" placeholder="Ex: Alfredo Manuel">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Utilizador</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="username" placeholder="Ex:-------------">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="email" placeholder="Email / Nº Telefone">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Perfil</label>
                                        <div class="col-sm-10">
                                        <select class="form-control input-sm" name="profile">
                                       @foreach($permicoes as $permicao)
                                      
                                          <option value="{{ $permicao->name }}">{{ $permicao->name }}</option>
                                          
                                       @endforeach
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
                                        <label class="col-sm-7 col-form-label"><span class="badge badge-primary m-r-5 m-b-5">
                                       <i class="ti-timer"></i> Data Expiração de senha</span></label>
                                        <div class="col-sm-12">
                     
                                        <input class="form-control" type="date" name="date_exp" placeholder="">
                              
                                        </div>
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



                      