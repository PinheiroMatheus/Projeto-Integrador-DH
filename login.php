<!DOCTYPE html>
<html lang="en">

        <?php require_once("inc/head.php") ?>

        <?php $title = "Login"; ?>

<body id="login">
        <div class="media container pt-5 center-text pb-5 mt-5 px-4" id="cont-login1">
            <img src="..." alt="..." class="img-thumbnail rounded mx-auto d-block" id="img1">
        </div>
        <div class="container px-4" id="cont-login2">
            <form>
                <div class="form-group pt-5 ">
                  <label for="exampleInputEmail1"></label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu email">
                </div>
                <div class="form-group ">
                  <label for="exampleInputPassword1"></label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Digite sua senha">
                </div>
                <div class="pt-2 pb-2 ">
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