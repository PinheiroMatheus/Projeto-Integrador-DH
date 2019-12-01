<!DOCTYPE html>
<html lang="en">
    <?php require_once("inc/head.php") ?>
    <?php $title = "Login"; ?>
</head>
<body id="body-login2">
    <div class="container px-5" id="div-master-login">
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
        <button type="button" class="btn btn-primary btn-md btn-block mt-3 mb-5">Voltar ao Menu</button>
        <div class="text-center my-5" id="div-span">
            <span>Ainda não tem cadastro? Tente <a href="http://localhost/BeyMind/cadastro.php" id="div-span">Cadastrar-se</a></span><br>
            <span>Esqueceu sua senha? <a href="" id="div-span">Clique aqui</a></span>
        </div>
    </div>
</body>
</html>