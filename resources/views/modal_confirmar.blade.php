

<div class="modal fade" id="modal-confirm">
                            <div class="modal-dialog modal-xl">
                              <div class="modal-content">
                               
                                <div class="modal-body">
                                 <center> <form class="form-horizontal" action="{{ route('user.destroy',['user'=>$user->id]) }}" method="POST">
                                 @csrf
                                 @method('delete')
                                  <div class="icon-confirm">
                                  <i class="ti-face-sad" style="font-size:100pt;color:#e74c3c;"></i>
                                   </div>
                                    
                                    <div class="form-group row">
                                          <div class="col-sm-12">
                                             <p> <h2>Deseja eliminar o Utilizador?</h2></p>
                                             <p> <h5>{{ $user->name }} / {{ $user->username }}</h5></p>
                                             <hr>
                                           
                                          </div>
                                        <div class="col-sm-12">
                                                <button class="btn  btn-danger" type="submit">Confirmar</button>
                                                <button class="btn  btn-default" type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                Cancelar</button>
                                        </div>
                                     </div>
                                    
                                 </form></center>
                                </div>
                               
                              </div>
                              <!-- /.modal-content -->
                            </div> </div>