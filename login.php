<title>Login</title>
<!DOCTYPE html>
<html lang="en">
    <?php require_once("inc/head.php") ?>
</head>
<body id="body-login2">
    <div class="container px-5 my-5" id="div-master-login">
        <div class="text-center my-5 pt-5" id="div-img-login">
            <img  class="" src="" alt="Logo">
        </div>
        <div class="container text-center" id="div-titulo-login">
            <h1><b>Login</b></h1>
        </div>
        <form class="pt-5">
        <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
            </div>
            <div class="form-group pt-3">
                <label for="exampleInputPassword1">Senha</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="">
            </div>
        </form>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
          <label class="form-check-label" for="inlineCheckbox1">Lembrar-me</label>
        </div>
        <button type="button" class="btn btn-primary btn-md btn-block mt-4">Login</button>
        <a href="http://localhost/BeyMind/index.php" class="btn btn-primary btn-md btn-block mt-3 mb-5" role="button" aria-disabled="true">Voltar ao Menu</a>
        <div class="text-center my-5" id="div-span">
            <span>Ainda não tem cadastro? Tente <a href="http://localhost/BeyMind/cadastro.php" id="div-span">Cadastrar-se</a></span><br>
            <span>Esqueceu sua senha? <a href="" data-toggle="modal" data-target="#exampleModal" id="div-span">Clique aqui</a></span>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Digite seu email</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <form>
                            <div class="form-group">
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              <small id="emailHelp" class="form-text text-muted">Iremos te enviar um email para redefinição de senha</small>
                            </div>
                        </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Reenviar</button>
                            <button type="button" class="btn btn-primary">Enviar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>