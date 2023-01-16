<div class="modal fade" id="modal-checkin-{{ $reserva->id_reserva }}">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                <span class="badge badge-success m-r-5 m-b-5" style=""> <div class="ibox-title"><i class="ti-write"></i> Finalizar Check-in</div></span>
                           
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                            
                            
                                <div class="tab-content">
                                        <div class="tab-pane fade show active" id="tab-9-1">
                                 
                                 <form action="{{ route('checkin.store')}}" method="POST">
                                 @csrf
                                     <span class="badge badge-danger m-r-5 m-b-5"> Dados da Reserva [Codigo : {{ $reserva->codigo}}]</span>
                                    <div class="row">
                                    
                                        <div class="col-sm-6 form-group">
                                            <label>Hospede</label>
                                            <input class="form-control" type="text" placeholder="ex:Alfredo Chivela Manuel" value="{{ $reserva->name}}">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Endereço de Email</label>
                                            <input class="form-control" type="text" placeholder="Telefone ou Corréio Electronico" value="{{ $reserva->email}}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 form-group">
                                            <label>Acomodação</label>
                                            <input class="form-control" type="text" placeholder="Nº" value="{{ $reserva->codigo}}-{{ $reserva->tipo}}">
                                        </div>
                                    
                                        <div class="col-sm-4 form-group">
                                            <label>Nascionalidade</label>
                                            <select class="form-control">
                                                <option>{{ $reserva->nascionalidade}}</option>
                                                <option></option>
                                                </select>
                                        </div>
                                         <div class="col-sm-4 form-group">
                                            <label>Data Reserva</label>
                                            <input class="form-control" type="text"  value="{{ date('d/m/Y H:i',strtotime($reserva->created_at ))}}">
                                        </div>
                                    </div>
                                    <span class="badge badge-danger m-r-5 m-b-5"><i class="ti-money"></i> Efectuar Pagamento</span>
                                    <div class="row">
                                        <div class="col-sm-4 form-group">
                                            <label>Tipo de Pagamento</label>
                                            <select class="form-control" name="tipopagamento">
                                              <option>------</option>
                                                <option value="Cartão Multicaixa">Cartão Multicaixa</option>
                                                <option value="Dinheiro Físico">Dinheiro Físico</option>
                                                <option value="Transferecia Bancária">Transferecia Bancária</option>
                                                </select>
                                        </div>
                                        <div class="col-sm-4 form-group">
                                            <label>Preço</label>
                                            <input class="form-control" type="text" placeholder="kz" name="preco">
                                        </div>
                                       
                                       
                                      
                                    </div>
                                <input type="hidden" name="hospede" value="{{ $reserva->id_hospede}}">
                                <input type="hidden" name="reserva" value="{{ $reserva->id_reserva}}">
                                  <div class="modal-footer justify-content-between">
                             
                                       
                                        <button class="form-control btn btn-success" type="submit"><i class="fa fa-user"></i>  Confirmar Check-In</button>
                                     </div>
                                </form>
                          
                                        </div>
                                 
                                     
                                    </div>
                                </div>
                                
                              </div>
                              <!-- /.modal-content -->
                            </div>