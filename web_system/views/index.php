<?php
?>
<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img class="first-slide"
                 src="../views/imagem/carousel-1.jpeg"
                 alt="First slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Esperamos conscientizá-los</h1>
                    <p>Fazemos mais por você</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Entre Agora</a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="second-slide"
                 src="../views/imagem/carousel-2.jpg"
                 alt="Second slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Teste remédios Paliativos</h1>
                    <p>Embora sejam menos eficientes, sua automedicação é mais segura</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Leia Mais</a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="third-slide"
                 src="../views/imagem/carousel-3.png"
                 alt="Third slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Entre em contato conosco</h1>
                    <p>dê sugestões, fale com o suporte e procure mais a respeito dos médicos necessários</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Entre em contato</a></p>
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div><!-- /.carousel -->


<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
        <div class="col-lg-4">
            <img class="img-circle"
                 src="imagem/logo.png"
                 alt="Generic placeholder image" width="140" height="140">
            <h2>Jogo educativo</h2>
            <p>Um jogo desenvolvido para ajudar as crianças e jovens a entender a importancia de evitar a automedicação, mostrando-lhes os maleficios que esta prática pode causar.</p>
            <p><a class="btn btn-default" href="<?='../views/gerenciadorView.php?selectPage='.($_SESSION['PageCodification'] -> getChave("mobileGame.php"))?>" role="button">Baixar &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="img-circle"
                 src="imagem/sintoma.jpg"
                 alt="Generic placeholder image" width="140" height="140">
            <h2>Meus sintomas</h2>
            <p>Formulário de perguntas com o objetivo de acelerar o diagnóstico do paciente para que este procure um médico especializado, além de indicar tratamentos naturais paliativos com o intuito de evitar a automedicação compulsiva.</p>
            <p><a class="btn btn-default" href="<?='../views/gerenciadorView.php?selectPage='.($_SESSION['PageCodification'] -> getChave("questionService/mainService.php"))?>" role="button">Acesse &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="img-circle"
                 src="imagem/receita.jpg"
                 alt="Generic placeholder image" width="140" height="140">
            <h2>Receitas</h2>
            <p>Acesso específico para farmácias e médicos cadastrados para geração de receitas controladas por sistema de código de barras.</p>
            <p><a class="btn btn-default" href="<?='../views/gerenciadorView.php?selectPage='.($_SESSION['PageCodification'] -> getChave("drugstoreSystem/login.php"))?>" role="button">Entrar &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->