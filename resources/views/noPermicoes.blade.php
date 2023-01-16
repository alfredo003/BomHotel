<!DOCTYPE html>
<html>

<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>{{ $title }}</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="{{ asset('img/icon.png') }}" rel="icon">
    <link href="{{ asset('img/icon.png') }}" rel="apple-touch-icon">
  
    <link href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendors/themify-icons/css/themify-icons.css') }}" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
    <link href="{{ asset('css/pages/auth-light.css') }}" rel="stylesheet" />
</head>


<body class="bg-silver-300">
    <div class="content">
        <div class="brand">
            <a class="link" href="index.html">Acesso Negado!</a>
        </div>
        <div>
            <div class="text-center m-b-20">
                <img class="img-circle" src="{{ asset('img/icon.png') }}" width="110px" />
            </div>
            <form class="text-center" id="lock-form" action="javascript:;" method="post">
                <h5 class="font-strong">{{ Auth::User()->name }}</h5>
                <p class="font-13">Não tens permissão para acessar essa sessão por favor entre em contacto com o Administrador</p>
              
                <div class="form-group">
                    <a class="btn btn-success btn-block" href="{{ route('admin.home')}}"> <i class="ti-angle-left"></i>  Pagina Inicial</a>
                </div>
            </form>
        </div>
    </div>
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS -->
    <script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/popper.js/dist/umd/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS -->
    <script src="{{ asset('vendors/jquery-validation/dist/jquery.validate.min.js') }}" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script type="text/javascript">

  /*$(function () {
  $("#login-form").submit(function (e) {
        e.preventDefault();

        var form = $(this);
        var action = " {{ route('login.do') }} ";
        var data = form.serialize();
        
      $.ajax({
            url: action,
            data: data,
            type: "post",
            dataType: "json",
            
            success: function(response) {
            
                if(response.success == true){

                }else{
                    alert('erro')
                }
             }
        });

    });
});*/

        $(function() {
            $('#login-form').validate({
                errorClass: "help-block",
                rules: {
                    school: {
                        required: true
                    },
                    user: {
                        required: true
                    },
                    password: {
                        required: true
                    }
                },
                highlight: function(e) {
                    $(e).closest(".form-group").addClass("has-error")
                },
                unhighlight: function(e) {
                    $(e).closest(".form-group").removeClass("has-error")
                },
            });
        });
    </script>
</body>

</html>