@extends('themes.theme')

@section('css')
<link href="{{ asset('vendors/fullcalendar/dist/fullcalendar.min.css') }}" rel="stylesheet" />
<link href="{{ asset('vendors/fullcalendar/dist/fullcalendar.print.min.css') }}" rel="stylesheet" media="print" />
@endsection
 
@section('content')


            <!-- START PAGE CONTENT-->
            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-teal color-white widget-stat">
                            <a href="{{ route('Reserva.index') }}" style="color: #ffffff;">
                                <div class="ibox-body">
                                    <h2 class="m-b-5 font-strong">201</h2>
                                    <div class="m-b-5">NOVA RESERVA</div><i class="ti-agenda widget-stat-icon"></i>
                                    <div><i class="fa fa-upload m-r-5"></i><small>25 - Reservas Hoje</small></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-success color-white widget-stat">
                            <a href="{{ route('checkin.index') }}" style="color: #ffffff;">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong">1250</h2>
                                <div class="m-b-5">CHECK-IN</div><i class="ti-import widget-stat-icon"></i>
                                <div><i class="fa fa-level-up m-r-5"></i><small>0% Efectuado Nesse Mes</small></div>
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-danger color-white widget-stat">
                            <a href="{{ route('checkout.index')}}" style="color: #ffffff;">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong">0</h2>
                                <div class="m-b-5">CHECK-OUT</div><i class="ti-export widget-stat-icon"></i>
                                <div><i class="fa fa-level-down m-r-5"></i><small>0% Efectuado Nesse Mes</small></div>
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-info color-white widget-stat">
                            <a href="{{ route('consumo.index')}}" style="color: #ffffff;">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong">0</h2>
                                <div class="m-b-5">REGISTRAR CONSUMO</div><i class="ti-shopping-cart-full widget-stat-icon"></i>
                                <div><i class="fa fa-level-down m-r-5"></i><small>0</small></div>
                            </div>
                            </a>
                        </div>
                    </div>
                          <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-warning color-white widget-stat">
                            <a href="{{ route('hospede.index') }}" style="color: #ffffff;">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong">108</h2>
                                <div class="m-b-5">CADASTRAR HOSPEDE</div><i class="ti-user widget-stat-icon"></i>
                                <div><i class="ti-save m-r-5"></i><small>[200] Novos Hospedes</small></div>
                            </div>
                            </a>
                        </div>
                    </div>
                          <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-grey color-white widget-stat">
                            <a href="{{ route('mapaOcupacao.index') }}" style="color: #ffffff;">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong">108</h2>
                                <div class="m-b-5">MAPA DE OCUPAÇÕES</div><i class="ti-calendar widget-stat-icon"></i>
                                <div><i class="ti-layout-grid3"></i><small> 12% Quartos Ocupados</small></div>
                            </div>
                            </a>
                        </div>
                    </div>
                          <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-pink color-white widget-stat">
                            <a href="{{ url('acomodacao') }}" style="color: #ffffff;">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong">108</h2>
                                <div class="m-b-5">ACOMODAÇÕES / QUARTOS</div><i class="ti-id-badge widget-stat-icon"></i>
                                <div><i class="ti-settings m-r-5"></i><small>-----</small></div>
                            </div>
                            </a>
                        </div>
                    </div>
                          <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-purple color-white widget-stat">
                            <a href="login.php" style="color: #ffffff;">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong">108</h2>
                                <div class="m-b-5">TRANSAÇÃO GERAL</div><i class="ti-money widget-stat-icon"></i>
                                <div><i class="ti-pulse m-r-5"></i><small>------</small></div>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
                
                
              
                
       
            </div>
     
         
            
@endsection

