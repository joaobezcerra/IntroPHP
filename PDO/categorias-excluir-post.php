<?php require_once 'global.php' ?>
<?php
try{
    $id = $_GET['id'];

    $categoria = new Categoria($id);

    var_dump($categoria);

    $categoria->deletar();

    header('Location: categorias.php');
} catch (Exception $e) {
    ERRO::trataErro($e);
}