<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body id="login">
        <div class="container text-center pt-5 pb-5 mt-5 px-4" id="cont-login1">
            <h2>Logo</h2>
        </div class="container" id="test">
        <div class="container" id="cont-login2">
            <form>
                <div class="form-group pt-5 px-4">
                  <label for="exampleInputEmail1"></label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu email">
                </div>
                <div class="form-group px-4">
                  <label for="exampleInputPassword1"></label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Digite sua senha">
                </div>
                <div class="pt-2 pb-2 px-4">
                    <a href="#">Esqueci minha senha</a>
                </div>
                <button type="submit" class="btn btn-primary px-4 btn-block mt-3">Entrar</button>
              </form>
        </div>
        <div class="container text-center pt-4 px-4 pb-3" id="cont-login3">
            <p>Não tem uma conta? <a href="cadastro.php">Registre-se</a></p>
        </div>
        <div class="container pt-2 pb-4 px-4 mt-5 mb-5" id="btn-login1">
            <span><button type="submit" class="btn px-4 btn-primary btn-block mt-3">Voltar ao Menu</button></span>
        </div>
</body>
</html>