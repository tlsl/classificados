<?php 
require 'config.php';

if(!empty($_SESSION['login.php'])){
    header("Location: login.php");
    exit;
}

require 'classes/anuncios.php'; 

    $a=new Anuncios();

if(isset($_GET['id']) && !empty($_GET['id'])) {
 $a->excluirAnuncio($_GET['id']);
}
header('Location: meus-anuncios.php');
?>
