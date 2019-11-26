<!DOCTYPE html>
<html lang="en">

        <?php require_once("inc/head.php") ?> 

        <?php $title = "Cadastro"; ?>

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