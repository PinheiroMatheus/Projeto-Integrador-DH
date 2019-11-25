<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Cadastro</title>
</head>
<body id="body-cadastro">
    <div class="container pt-4 mt-5 pb-2" id="cont-cadastro1">
        <div class="text-center">
            <h2><b>CADASTRO</b></h2>
        </div>
    </div>
    <div class="container pt-5 mt-1 pb-2 mb-5" id="cont-cadastro2">
        <form class="px-4">
            <div class="form-group mt-3">
              <label for="exemploEmail">Email</label>
              <input type="email" class="form-control" id="exemploEmail" aria-describedby="emailHelp" placeholder="Digite seu Email">
            </div>
            <div class="form-group">
                <label for="exemploEmail">Confirmar Email</label>
                <input type="email" class="form-control" id="exemploEmail" aria-describedby="emailHelp" placeholder="Confirme seu Email">
            </div>
            <div class="form-group">
              <label for="exemploSenha">Senha</label>
              <input type="password" class="form-control" id="exemploSenha" placeholder="Digite sua senha">
              <small id="pass-help" class="form-text text-muted">Sua senha deve conter no mínimo 6 caracteres</small>
            </div>
            <div class="form-group">
                <label for="exemploSenha">Confirmar Senha</label>
                <input type="password" class="form-control" id="exemploSenha" placeholder="Confirme sua senha">
            </div>
            <div class="form-group">
                <label for="exemploEmail">Nome da Empresa</label>
                <input type="text" class="form-control mb-5" id="exemploEmail" aria-describedby="emailHelp" placeholder="Diga-nos o nome da sua Empresa">
            </div>            
            <button type="submit" class="btn btn-primary btn-block mt-2 mb-3">Cadastrar</button>
            <button type="submit" class="btn btn-primary btn-block mt-2 mb-3">Voltar</button>
          </form>   
    </div>
</body>
</html>