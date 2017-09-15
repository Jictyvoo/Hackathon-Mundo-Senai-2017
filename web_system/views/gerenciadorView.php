<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>O que tomar?</title>

    <!-- Bootstrap core CSS -->
    <link href="../layout/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../layout/css/sticky-footer-navbar.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="../layout/js/html5shiv.js"></script>
    <script src="../layout/js/respond.min.js"></script>

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../layout/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../layout/js/ie-emulation-modes-warning.js"></script>
    <![endif]-->

</head>
<body>

<?php
include_once("../models/PageCodification.php");
include_once("../util/ArrayList.php");
include_once("../util/Graph.php");

session_start();
//session_destroy();
if (!isset($_SESSION['navbarSelected'])) {
    $_SESSION['navbarSelected'] = "login.php";
    $_SESSION['PageCodification']->associaCodificacaoPagina();
}
if (!isset($_SESSION['paginaAnterior']))
    $_SESSION['paginaAnterior'] = "login.php";
if (isset($_SESSION['PageCodification']) == false)
    $_SESSION['PageCodification'] = new PageCodification(array("index.php", "drugstoreSystem/login.php",
        "mobileGame.php", "questionService/login.php"));
if (!isset($_GET['selectPage'])) {
    $paginaDestino = $_SESSION['paginaAnterior'];
} else {
    $paginaDestino = $_SESSION['PageCodification']->getCodigoPagina($_GET['selectPage']);
}
$_SESSION['navbarSelected'] = $paginaDestino;
?>
<!-- Wrap all page content here -->
<div id="wrap">

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">O que está sentindo?</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="<?php echo $_SESSION['navbarSelected'] == 'login.php' ? 'active' : ''; ?>">
                        <a href="gerenciadorView.php?selectPage=<?= $_SESSION['PageCodification']->getCodigos(0) ?>">Home</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Actions <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class=""><a href="#">Create Storage Information</a></li>
                            <li class=""><a href="#">Edit Storage Information</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Items Category</li>
                            <li class=""><a href="#">Manipulate Item</a></li>
                            <li class=""><a href="#">List Items</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>

    <div class="container">
        <?php
        switch ($paginaDestino) {
            case "index.php":
                include("index.php");
                break;

            default:
                # code...
                break;
        }
        ?>
    </div>
</div>
<div id="footer">
    <div class="container">
        <!-- Yes, you are allowed to remove this -->
        <p class="text-muted">© 2017 Hagenix Systems. Powered by <a href="http://php.net" target="_blank">PHP</a>
        </p>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../layout/js/jquery-1.10.2.min.js"></script>
<script src="../layout/js/bootstrap.min.js"></script>

</body>
</html>