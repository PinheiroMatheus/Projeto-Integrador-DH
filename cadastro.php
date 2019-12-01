<!DOCTYPE html>
<html lang="en">
        <?php require_once("inc/head.php") ?> 
        <?php $title = "Cadastro"; ?>
<body id="body-cadastro">
    <div class="container px-5" id="div-master">
        <div class="text-center my-5 pt-5" id="div-img">
            <img  class="" src="" alt="Logo">
        </div>
        <div class="container text-center" id="div-titulo">
            <h1><b>Cadastre-se</b></h1>
        </div>
        <form>
            <div class="row mt-5">
              <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12 pb-4">
              <label for="exampleInputEmail1">Nome</label>
                <input type="text" class="form-control" placeholder="">
              </div>
              <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12 pb-4">
              <label for="exampleInputEmail1">Sobrenome</label>
                <input type="text" class="form-control" placeholder="">
              </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
            </div>
            <div class="form-group pt-3">
                <label for="exampleInputPassword1">Senha</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="">
            </div>
        </form>
        <button type="button" class="btn btn-primary btn-md btn-block mt-4 mb-5">Cadastrar</button>
        <div class="text-center my-5" id="div-span">
            <span>Ao clicar em "Cadastrar" você estará aceitando os <a href="http://" id="div-span">Termos de serviço</a></span><br>
            <span>Já tem uma conta? <a href="" id="div-span">Login</a></span>
        </div>
    </div>
</body>
</html>