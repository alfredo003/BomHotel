<div class="modal fade" id="modal-acomodacao">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">    
                                  <span class="badge badge-primary m-r-5 m-b-5"><i class="ti-write"></i> Cadastrar Acomodação</span>
                                  </h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div> 
                                <div class="modal-body">
                                <div class="clf">
                                
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="tab-9-1">
                             
                             <form action="{{ route('badroom.store')}}" method="POST">
                                 @csrf
                                <div class="row">
                                
                                    <div class="col-sm-2 form-group">
                                        <label>Código</label>
                                        <input class="form-control" type="text" placeholder="" name="codigo">
                                    </div> 
                                    <div class="col-sm-4 form-group">
                                        <label>Andar</label>
                                        <input class="form-control" type="text" placeholder="Nº" name="andar">
                                    </div>
                                     <div class="col-sm-4 form-group">
                                        <label>Capacidade</label>
                                        <select class="form-control" name="capacidade">
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
                                            <option value="SUITI">SUITI</option>
                                            <option value="SUITI">SUITI</option>
                                            <option value="SUITI">SUITI</option>
                                            <option value="SUITI">SUITI</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-5 form-group">
                                        <label>Descrição</label>
                                        <textarea class="form-control" name="descricao" type="text" placeholder="Ex:....."></textarea>
                                    </div>
                                 
                                    <div class="col-sm-5 form-group">
                                        <label>Obsevações</label>
                                        <textarea class="form-control" name="observacao" type="text" placeholder="Ex:....."></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12 form-group">
                                    <label>Estado do Quarto</label>
                                    <select class="form-control" name="status">
                                        <option value="Disponivel">Disponivel</option>
                                        <option value="Manutençao">Manutençao</option>
                                        </select>
                                </div>
                               
                                <center> <div class="form-group">
                                   
                                   <button class="form-control btn btn-success" type="submit"><i class="fa fa-upload"></i>  Confirmar Cadastro</button>
                               </div> </center> 
                            </form>
                      
                                    </div>
                                </div>
                               
                              </div>
                              <!-- /.modal-content -->
                            </div>  </div>