<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once("inc/head.php") ?>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">    <title>Document</title>
    <title>Contato</title>
</head>
<body>
    <?php require_once("inc/header.php") ?>
    <div class="container text-center mt-5" id="titulo">
        <h1><b>Contate-nos</b></h1>
    </div>
    <div class="container-fluid my-5 px-5" id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14629.55518769143!2d-46.6889560302246!3d-23.55447584999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m3!3e0!4m0!4m0!5e0!3m2!1spt-BR!2sbr!4v1575298739872!5m2!1spt-BR!2sbr" width="100%" height="350px" frameborder="0" style="border:1;" allowfullscreen=""></iframe>
    </div>
    <div class="container row px-5 py-5">
        <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12">
            <h3>Telefone</h3>
            <span>(11) 9xxxx - xxxx</span>
            <hr>
            <h3>Email</h3>
            <span>suporte@beymind</span>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12">
            <div class="row pl-5">
            <h3>Escreva para nós</h3>
            <form>
                <div class="form-row">
                    <div class="col-6">
                        <input type="text" class="form-control" placeholder="Nome">
                    </div>
                    <div class="col-6">
                        <input type="text" class="form-control" placeholder="Sobrenome">
                    </div>
                    <div class="col-12 pt-4 form-group" id="form-box">
                        <textarea type="text" class="form-control" placeholder="Conteúdo" rows="6"></textarea>
                    </div>
                </div>
            </form>
            </div>
        </div>

    </div>






    <?php require_once("inc/footer.php") ?>
</body>
</html>