<?php

include('../conn_db.php');

$tb = @$_GET['tb'];
$id = @$_GET['id'];

$nome = @$_GET['nome'];
$preco = @$_GET['preco'];

$SQl_Update = ' UPDATE '.$tb.' SET ';

$SQl_Update .= "Produto = '".$nome."', ";
$SQl_Update .= "Preco = '".$preco."' ";

$SQl_Update .= ' WHERE id = '.$id;

$SQl_Update = mysqli_query($conn, $SQl_Update) or die ("Erro 0x00110-SQLUpdateCRUD - ".mysqli_error($conn)); 

?>