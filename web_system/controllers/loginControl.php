<?php
/**
 * Created by PhpStorm.
 * User: cisco
 * Date: 15/09/2017
 * Time: 04:06
 */
include_once ("../models/PageCodification.php");
include_once ("../util/ArrayList.php");

if (! isset ( $_POST ['inputEmail'] ) || ! isset ( $_POST ['inputPassword'] ))
	header ( 'Location: ../views/gerenciadorView.php' );
else {
	header ( 'Location: ' . "../view/gerenciadorView.php?selectPage=" . ($_SESSION ['CodificacaoPaginas']->getChave ( $_SESSION ['paginaAnterior'] )) );
}