<div class="modal fade" id="modal-hospede">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                <span class="badge badge-success m-r-5 m-b-5" style=""> <div class="ibox-title"><i class="ti-write"></i> Cadastar Novo Hospede </div></span>
                           
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body"> 
                            
                            
                                <div class="tab-content">
                                        <div class="tab-pane fade show active" id="tab-9-1">
                                 
                                 <form action="{{ route('hospede.store') }}" method="POST">
                                     @csrf

                                     <span class="badge badge-danger m-r-5 m-b-5"> Dados Pessoais</span>
                                    <div class="row">
                                    
                                        <div class="col-sm-6 form-group">
                                            <label>Nome Completo</label>
                                            <input class="form-control" type="text" name="name" placeholder="ex:Alfredo Chivela Manuel">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Endereço de Email</label>
                                            <input class="form-control" type="text" name="email" placeholder="Telefone ou Corréio Electronico">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 form-group">
                                            <label>Numero de idetificação</label>
                                            <input class="form-control" type="text" name="numIdt" placeholder="Nº">
                                        </div>
                                        <div class="col-sm-4 form-group">
                                            <label>Tipo de Idetificação</label>
                                            <select class="form-control" name="tipoIdt">
                                                <option value="BI- Bilhete de Idetificação">BI- Bilhete de Idetificação</option>
                                                <option value="Cedula Pessoal">Cedula Pessoal</option>
                                                </select>
                                        </div>
                                        <div class="col-sm-4 form-group">
                                            <label>Pais Emissor</label>
                                            <select class="form-control" name="Pais">
                                                <option value="Angola">Angola</option>
                                                <option value="Portugal">Portugal</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 form-group">
                                            <label>Nacionalidade</label>
                                            <input class="form-control" type="text" name="nascionalidade" placeholder="">
                                        </div>
                                        <div class="col-sm-4 form-group">
                                            <label>Cidade de Morada</label>
                                            <input class="form-control" type="text" name="morada" placeholder=" ">
                                        </div>
                                        <div class="col-sm-4 form-group">
                                            <label>NIF</label>
                                            <input class="form-control" type="text" name="nif" placeholder=" ">
                                        </div>
                                        <div class="col-sm-4 form-group">
                                            <label>Data de Nascimento</label>
                                            <input class="form-control" type="date" name="dataNasc">
                                        </div>
                                        <div class="col-sm-4 form-group">
                                            <label>Tipo de Hospede</label>
                                            <select class="form-control" name="tipoHospede">
                                                <option value="Normal">Normal</option>
                                                <option value="Empresarial">Empresarial</option>
                                                </select>
                                        </div>
                                       
                                      
                                    </div>
                                <input type="hidden" name="user" value="{{ Auth::User()->id }}">
                                   
                                   <div class="modal-footer justify-content-between">
                             
                                       
                                        <button class="form-control btn btn-success" type="submit"><i class="fa fa-user"></i>  Confirmar Hospede</button>
                                     </div>
                                </form>
                          
                                        </div>
                                 
                                     
                                    </div>
                                </div>
                               
                              </div>
                              <!-- /.modal-content -->
                            </div>   </div>