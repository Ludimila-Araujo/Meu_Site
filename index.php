<title> Meu Site_Padaria PLus </title>

<?php

include_once("templates/topo.php");
include_once("templates/menu.php");

if(empty($_SERVER['QUERY_STRING'])){
    $var = "paginaprincipal.php";
    @include_once($var);
}

if (isset($_GET['pg'])) {
    $pg = $_GET['pg'];
  
    if ($pg == 'paginaprincipal') {
        include_once 'paginaprincipal.php';
    } elseif ($pg == 'quemsomos') {
        include_once 'quemsomos.php';
    } elseif ($pg == 'nossosprodutos') {
        include_once 'nossosprodutos.php';
    } elseif ($pg == 'faleconosco') {
        include_once 'faleconosco.php';
    } elseif ($pg == 'envia_msg') {
        include_once 'envia_msg.php';
    } else {
        echo "<h2>Página não encontrada.</h2>";
    }
} 
 
@include_once("rodape.php");

?>