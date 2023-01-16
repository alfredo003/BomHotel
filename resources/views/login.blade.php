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
      
        <form id="login-form" action="{{ route('login.do')}}" method="post" style="background: #18ab8e">
           @csrf

            <h2 class="login-title">
            <a class="link" href="#"><img src="{{ asset('img/logofff.png') }}"></a>
        </h2>
            <div class="form-group">
                <div class="input-group-icon right">
                    <div class="input-icon"></div>
                    <select class="form-control" name="hotel" >
                    
                        <option value="m">Hotel Infotur</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group-icon right">
                    <div class="input-icon"><i class="fa fa-user"></i></div>
                    <input class="form-control" type="text" name="username" placeholder="Utilizador" autocomplete="off">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group-icon right">
                    <div class="input-icon"><i class="fa fa-lock font-16"></i></div>
                    <input class="form-control" type="password" name="password" placeholder="Palavra-passe">
                </div>
            </div>
            <div class="form-group d-flex justify-content-between">
                <label class="ui-checkbox ui-checkbox-info"style="color:#fff;">
                    <input type="checkbox">
                    <span class="input-span"></span>Lembrar-me</label>
                <a href="#" style="font-weight: bold;color:#fff;"> Esquece a senha!</a>
            </div>
            <div class="form-group">
                <button class="btn btn-danger btn-block" type="submit" style="font-weight:bold;border-radius:0px;">INICIAR SESSÃO</button>
            </div>
            <div class="social-auth-hr">
                <span>Idioma :</span>
            </div>
           
            <div class="text-center">
                <a  href="#" style="color:#fff;">Portugues (Angola <img src="{{ asset('img/ao.png') }}">)</a>
            </div>
        </form>
    </div>
    <!-- BEGIN PAGA BACKDROPS-->
  
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