<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>{{ $title }}</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="{{ asset('img/icon.png') }}" rel="icon">
  <link href="{{ asset('img/icon.png') }}" rel="apple-touch-icon">

    <link href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }} " rel="stylesheet" />
    <link href="{{ asset('vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href=" {{ asset('vendors/themify-icons/css/themify-icons.css') }}" rel="stylesheet" />
    <!-- PLUGINS STYLES-->  
    <link href="{{ asset('vendors/select2/dist/css/select2.min.css') }}" rel="stylesheet" />
    <link href=" {{ asset('vendors/jvectormap/jquery-jvectormap-2.0.3.css') }}" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="{{ asset('vendors/DataTables/datatables.min.css') }}" rel="stylesheet" />
    <link href=" {{ asset('css/scroll.css') }}" rel="stylesheet" />
    <link href=" {{ asset('css/main.min.css') }}" rel="stylesheet" />
  
    @yield('css')
</head>

<body class="fixed-navbar">
    <div class="page-wrapper">
        <!-- START HEADER-->
		<header class="header">
            <div class="page-brand">
                <a class="link" href="{{ url('home') }}">
                    <span class="brand"><img src="{{ asset('img/logofff.png') }}" style='width:160px;'>
                        <span class="brand-tip"></span>
                    </span>
                    <span class="brand-mini"><img src="{{ asset('img/iconFFF.png') }}"></span>
                </a>
            </div>
            <div class="flexbox flex-1">
                <!-- START TOP-LEFT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li>
                        <a class="nav-link sidebar-toggler js-sidebar-toggler"><i class="ti-menu"></i></a>
                    </li>
                    <li>
                        <form class="navbar-search" action="javascript:;">
                            <div class="rel">
                                <span class="search-icon"><i class="ti-search"></i></span>
                                <input class="form-control" placeholder="Pesquisar aqui...">
                            </div>
                        </form>
                    </li>
                </ul>
                <!-- END TOP-LEFT TOOLBAR-->
                <!-- START TOP-RIGHT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li class="dropdown dropdown-inbox">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope-o"></i>
                            <span class="badge badge-primary envelope-badge">9</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media">
                            <li class="dropdown-menu-header">
                                <div>
                                    <span><strong>9 Novas</strong> Mensagens</span>
                                    <a class="pull-right" href="mailbox.html">Ver +</a>
                                </div>
                            </li>
                            <li class="list-group list-group-divider scroller" data-height="240px" data-color="#71808f">
                                <div>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <img src="./assets/img/users/u1.jpg" />
                                            </div>
                                            <div class="media-body">
                                                <div class="font-strong"> </div>Mandy<small class="text-muted float-right">Just now</small>
                                                <div class="font-13">Sistema Optimo</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <img src="{{ asset('img/users/u2.jpg') }}" />
                                            </div>
                                            <div class="media-body">
                                                <div class="font-strong"></div>Cavalo<small class="text-muted float-right">18 mins</small>
                                                <div class="font-13">Valeu</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <img src="./assets/img/users/u3.jpg" />
                                            </div>
                                            <div class="media-body">
                                                <div class="font-strong"></div>Sami<small class="text-muted float-right">18 mins</small>
                                                <div class="font-13">Good Job</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <img src="./assets/img/users/u4.jpg" />
                                            </div>
                                            <div class="media-body">
                                                <div class="font-strong"></div>Cavalo<small class="text-muted float-right">3 hrs</small>
                                                <div class="font-13">Thanks Man</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-notification">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell-o rel"><span class="notify-signal"></span></i></a>
                        <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media">
                            <li class="dropdown-menu-header">
                                <div>
                                    <span><strong>5 Novas</strong> Notificações</span>
                                    <a class="pull-right" href="javascript:;">Ver +</a>
                                </div>
                            </li>
                            <!--<li class="list-group list-group-divider scroller" data-height="240px" data-color="#71808f">
                                <div>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <span class="badge badge-success badge-big"><i class="fa fa-check"></i></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-13">4 task compiled</div><small class="text-muted">22 mins</small></div>
                                        </div>
                                    </a>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <span class="badge badge-default badge-big"><i class="fa fa-shopping-basket"></i></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-13">You have 12 new orders</div><small class="text-muted">40 mins</small></div>
                                        </div>
                                    </a>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <span class="badge badge-danger badge-big"><i class="fa fa-bolt"></i></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-13">Server #7 rebooted</div><small class="text-muted">2 hrs</small></div>
                                        </div>
                                    </a>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <span class="badge badge-success badge-big"><i class="fa fa-user"></i></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-13">New user registered</div><small class="text-muted">2 hrs</small></div>
                                        </div>
                                    </a>
                                </div>
                            </li>-->
                        </ul>
                    </li>
                    <li class="dropdown dropdown-user">
                        <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                            <img src="{{ asset('img/infotur.png') }}" />
                            <span></span>Infortur-namibe<i class="fa fa-angle-down m-l-5"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="profile.html"><i class="fa fa-user"></i>Meu Perfil</a>
                            <a class="dropdown-item" href="profile.html"><i class="fa fa-cog"></i>Definição</a>
                            <a class="dropdown-item" href="javascript:;"><i class="fa fa-support"></i>Suporte</a>
                            <li class="dropdown-divider"></li>
                            <a class="dropdown-item" data-toggle="modal" data-target="#modal-sair"><i class="fa fa-power-off"></i>Terminar</a>
                        </ul>
                    </li>
                </ul>
              
                <!-- END TOP-RIGHT TOOLBAR-->
            </div>
        </header>
        <!-- END HEADER-->
        <div class="modal fade" id="modal-sair">
            <div class="modal-dialog modal-xl">
              <div class="modal-content">
               
                <div class="modal-body">
                 <center> <form class="form-horizontal" action="" method="POST">
                 @csrf
                 @method('delete')
                  <div class="icon-confirm">
                  <i class="ti-power-off" style="font-size:100pt;color:#e74c3c;"></i>
                   </div>
                    
                    <div class="form-group row">
                          <div class="col-sm-12">
                             <p> <h2>Deseja Encerrar a conta!</h2></p>
                             <p> <h5>Volte Sempre...</h5></p>
                             <hr>
                           
                          </div>
                        <div class="col-sm-12">
                                <a class="btn  btn-success" href="{{ route('logout') }}">Confirmar</a>
                                <button class="btn  btn-default" type="button" class="close" data-dismiss="modal" aria-label="Close">
                                Cancelar</button>
                        </div>
                     </div>
                    
                 </form></center>
                </div>
               
              </div>
              <!-- /.modal-content -->
            </div> </div>
        <!-- START SIDEBAR-->
              
<nav class="page-sidebar" id="sidebar" style="font-family: calibri;text-transform: uppercase;">
            <div id="sidebar-collapse">
                <div class="admin-block d-flex">
                    <div>
                        <img src="{{ asset('img/avatar.png') }}" width="45px" />
                    </div>
                    <div class="admin-info">
                        <div class="font-strong">{{ Auth::User()->name }}</div><small>{{ Auth::User()->profile }}</small></div>
                </div>
                <ul class="side-menu metismenu">
                    <li class="active">
                        <a class="active" href="{{ url('home') }}"><i class="sidebar-item-icon fa fa-home"></i>
                            <span class="nav-label">Página Inicial</span>
                        </a>
                    </li>
                    <li class="heading">MENU</li>
                    <li class="{{ ($active == 'reserva') ? 'active':'' }}">
                        <a href="javascript:;"><i class="sidebar-item-icon ti-agenda"></i>
                            <span class="nav-label">Reservas</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                        <li>
                                <a href="{{ route('hospede.index') }}">Cadastrar Hospede</a>
                            </li>
                        <li>
                                <a href="{{ route('Reserva.index') }}">Nova Reserva</a>
                            </li>
                            <li>
                                <a href="{{ route('checkin.index') }}">Check-In</a>
                            </li>
                            <li>
                                <a href="{{ route('checkout.index')}}">Check-Out</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon ti-calendar"></i>
                            <span class="nav-label">Ocupações</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="{{ route('mapaOcupacao.index') }}">Mapa de Ocupações</a>
                            </li>
                            <li>
                                <a href="historico_ocupacoes.php">Historico de Ocupações</a>
                            </li>
                            
                        </ul>
                    </li>
                    
                    <li class="{{ ($active == 'transacao') ? 'active':'' }}">
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-money"></i>
                            <span class="nav-label">Transações</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="{{ route('consumo.index')}}">Consumo</a>
                            </li>
                            <li>
                                <a href="lista_produto.php">Transações Geral</a>
                            </li>
                        </ul>
                    </li>
                    <li class="{{ ($active == 'Restaurante') ? 'active':'' }}">
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-edit"></i>
                            <span class="nav-label">Restaurante</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            
                            <li>
                                <a href="lista_produto.php">Lista de Produtos</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="{{ ($active == 'Administrativa') ? 'active':'' }}">
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-map"></i> <!--<i class="sidebar-item-icon fa fa-envelope"></i> -->
                            <span class="nav-label">Administrativa</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="{{ route('produto.index')}}">Novo Produto</a>
                            </li>
                            <li>
                                <a href="new_funcionario.php">Adicionar Funcionario</a>
                            </li>
                            <li>
                                <a href="list_funcionario.php">Lista de Funcionario</a>
                            </li>
                          
                        </ul>
                    </li>
                     <li class="{{ ($active == 'config') ? 'active':'' }}">
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-cogs"></i>
                            <span class="nav-label">Configurações</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="{{ url('utilizador') }}">Utilizadores</a>
                            </li>
                            <li>
                                <a href="{{ route('myHotel.index') }}">Meu Hotel</a>
                            </li>
                            <li>
                                <a href="{{ url('acomodacao') }}">Acomodações</a>
                            </li>
                            <li>
                                <a href="tarifa.php">Tarifa</a>
                            </li>
                            <li>
                                <a href="{{ route('Permicao.index')}}">Permições</a>
                            </li>
                            
                        </ul>
                    </li>
                  
                   
                   
                </ul>
            </div>
        </nav>
        <!-- END SIDEBAR-->
        
        <!-- START MAIN-->
       
        <!-- END MAIN-->
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <main>
           @yield('content')
        </main>

          
            <!-- END PAGE CONTENT-->
            <footer class="page-footer">
                <div class="font-13">{{ date('Y') }} © <b> BomHotel</b> - todos direitos reservads</div>
                <a class="px-4" href="http://themeforest.net/item/adminca-responsive-bootstrap-4-3-angular-4-admin-dashboard-template/20912589" target="_blank">Devs:TIMO</a>
                <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
            </footer>
        </div>
   </div>
    <!-- END THEME CONFIG PANEL-->

    <script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/popper.js/dist/umd/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/metisMenu/dist/metisMenu.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS--> 
     <script src="{{ asset('vendors/select2/dist/js/select2.full.min.js') }}" type="text/javascript"></script>
     <script src="{{ asset('vendors/jquery-knob/dist/jquery.knob.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/chart.js/dist/Chart.min.js') }} " type="text/javascript"></script>
    <script src=" {{ asset('vendors/jvectormap/jquery-jvectormap-2.0.3.min.js') }}" type="text/javascript"></script>
    <script src=" {{ asset('vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/jvectormap/jquery-jvectormap-us-aea-en.js') }}" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
  
    <script src="{{ asset('js/app.min.js') }}" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script src="{{ asset('js/scripts/dashboard_1_demo.js') }}" type="text/javascript"></script>
    
    @yield('js') 
  
</body>

</html>