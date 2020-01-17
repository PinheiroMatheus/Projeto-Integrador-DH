<title>Cadastro</title>
<!DOCTYPE html>
<html lang="en">
        <?php require_once("inc/head.php") ?> 
<body id="body-cadastro">
    <div class="container my-5 px-5" id="div-master-cadastro">
        <div class="text-center my-5 pt-5" id="div-img">
            <img  class="" src="" alt="Logo">
        </div>
        <div class="container text-center" id="div-titulo">
            <h1><b>Cadastre-se</b></h1>
        </div>
        <form name="signup" method="post" action="cadastro_back.php">
            <div class="row mt-5">
              <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12 pb-3">
              <label for="exampleInputEmail1"></label>
                <input type="text" class="form-control" placeholder="Nome" name="Nome">
              </div>
              <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12 pb-3">
              <label for="exampleInputEmail1"></label>
                <input type="text" class="form-control" placeholder="Sobrenome" name="Sobrenome">
              </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1"></label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" name="Email">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1"></label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="CPF_CNPJ" name="CPF_CNPJ">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1"></label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha" name="Senha">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1"></label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirmar senha">
            </div>
                <input type="submit" class="btn btn-primary btn-md btn-block mt-5" value="Cadastrar">
        </form>
        <a href="http://localhost/BeyMind/index.php" class="btn btn-primary btn-md btn-block mt-3 mb-5" role="button" aria-disabled="true">Voltar ao Menu</a>
        <div class="text-center my-5" id="div-span">
            <!-- <span>Ao clicar em "Cadastrar" você estará aceitando os <a href="http://" id="div-span">Termos de serviço</a></span><br> -->
            <span>Ao clicar em "Cadastrar" você estará aceitando os <a href="" data-toggle="modal" data-target="#exampleModal" id="div-span">Termos de serviço</a></span><br>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="text-left modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Termos de serviço</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque cumque ratione quasi fugit repellendus. Deleniti corporis, recusandae deserunt minima aliquam delectus quis ipsum inventore voluptatum suscipit ipsam fuga quaerat non!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque cumque ratione quasi fugit repellendus. Deleniti corporis, recusandae deserunt minima aliquam delectus quis ipsum inventore voluptatum suscipit ipsam fuga quaerat non!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque cumque ratione quasi fugit repellendus. Deleniti corporis, recusandae deserunt minima aliquam delectus quis ipsum inventore voluptatum suscipit ipsam fuga quaerat non!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque cumque ratione quasi fugit repellendus. Deleniti corporis, recusandae deserunt minima aliquam delectus quis ipsum inventore voluptatum suscipit ipsam fuga quaerat non!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque cumque ratione quasi fugit repellendus. Deleniti corporis, recusandae deserunt minima aliquam delectus quis ipsum inventore voluptatum suscipit ipsam fuga quaerat non!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque cumque ratione quasi fugit repellendus. Deleniti corporis, recusandae deserunt minima aliquam delectus quis ipsum inventore voluptatum suscipit ipsam fuga quaerat non!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque cumque ratione quasi fugit repellendus. Deleniti corporis, recusandae deserunt minima aliquam delectus quis ipsum inventore voluptatum suscipit ipsam fuga quaerat non!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque cumque ratione quasi fugit repellendus. Deleniti corporis, recusandae deserunt minima aliquam delectus quis ipsum inventore voluptatum suscipit ipsam fuga quaerat non!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque cumque ratione quasi fugit repellendus. Deleniti corporis, recusandae deserunt minima aliquam delectus quis ipsum inventore voluptatum suscipit ipsam fuga quaerat non!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque cumque ratione quasi fugit repellendus. Deleniti corporis, recusandae deserunt minima aliquam delectus quis ipsum inventore voluptatum suscipit ipsam fuga quaerat non!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque cumque ratione quasi fugit repellendus. Deleniti corporis, recusandae deserunt minima aliquam delectus quis ipsum inventore voluptatum suscipit ipsam fuga quaerat non!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque cumque ratione quasi fugit repellendus. Deleniti corporis, recusandae deserunt minima aliquam delectus quis ipsum inventore voluptatum suscipit ipsam fuga quaerat non!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque cumque ratione quasi fugit repellendus. Deleniti corporis, recusandae deserunt minima aliquam delectus quis ipsum inventore voluptatum suscipit ipsam fuga quaerat non!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque cumque ratione quasi fugit repellendus. Deleniti corporis, recusandae deserunt minima aliquam delectus quis ipsum inventore voluptatum suscipit ipsam fuga quaerat non!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque cumque ratione quasi fugit repellendus. Deleniti corporis, recusandae deserunt minima aliquam delectus quis ipsum inventore voluptatum suscipit ipsam fuga quaerat non!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque cumque ratione quasi fugit repellendus. Deleniti corporis, recusandae deserunt minima aliquam delectus quis ipsum inventore voluptatum suscipit ipsam fuga quaerat non!
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <span class="text-center">Já tem uma conta? <a href="http://localhost/BeyMind/login.php" id="div-span">Login</a></span>
        </div>
    </div>

    

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>