<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <title>BeyMind</title>
    </head> 
    <body>

    <header>
        <?php include_once("inc/header.php"); ?>
    </header>

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-md-block w-100" src="assets/img/imgcrs.jpg" alt="Primeiro Slide">
            </div>
        </div>
    </div>

    <section class="row" id="sobre">
		<article class="col-12 my-5 d-flex flex-column justify-content-center align-items-center">
			<h2>Entenda mais sobre nossos serviços e escolha o que mais se adapta a necessidade da sua empresa.</h2>
		</article>
	</section>

    <div class="card-deck">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Produto 1</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="card-link">Escolher</a>
             </div>
        </div>
    <div class="card">
            <div class="card-body">
                <h5 class="card-title">Produto 2</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="card-link">Escolher</a>
            </div>
    </div>
    <div class="card">
            <div class="card-body">
                <h5 class="card-title">Produto 3</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="card-link">Escolher</a>
            </div>
    </div>
    </div>

    <section class="depoimento" id="id_depoimento">
        <div class="depoimento-header">
            <h2>                        </h2>

        </div>
    </section>

    </body>
        <footer>
            <?php include_once("inc/footer.php"); ?>
        </footer>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>