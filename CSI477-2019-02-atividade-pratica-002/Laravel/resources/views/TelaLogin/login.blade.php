<!DOCTYPE html>
    <head>
        <meta charset="UTF-8" />
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="login.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    </head>

    <body>
        <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                <h5 class="card-title text-center">Log In</h5>
                <form class="form-signin" action="{{route('site.login.entrar')}}" method="post">
                    {{ csrf_field() }}
                    <div class="form-label-group">
                    <input type="email" id="inputEmail" name= "email" class="form-control" placeholder="E-mail" required autofocus>
                    <label for="inputEmail">E-mail</label>
                    </div>
    
                    <div class="form-label-group">
                    <input type="password" id="inputPassword" name= "password" class="form-control" placeholder="Senha" required>
                    <label for="inputPassword">Senha</label>
                    </div>
    
                    <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">Lembrar-se de mim</label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Entrar</button>
                    <hr class="my-4">
                    <a href="{{ url('cadastro') }}" class="btn btn-lg btn-google btn-block text-uppercase">Ainda não possui conta?</a>
                    
                </form>
                </div>
            </div>
            </div>
        </div>
        </div>
    </body>
</html>