<?php

include('../conn_db.php');

$tb = @$_GET['tb'];

$nome = @$_POST['NomeProd'];
$preco = @$_POST['PrecoProd'];
$imgProd = @$_POST['imgProd'];

$SQl_Update = ' INSERT '.$tb.' SET ';
$SQl_Update .= "Produto = '".$nome."', ";
$SQl_Update .= "Preco = '".$preco."', ";
$SQl_Update .= "Imagem = '".$imgProd."', ";
$SQl_Update .= "ImagemZoom = '".$imgProd."' ";

print $SQl_Update;

$SQl_Update = mysqli_query($conn, $SQl_Update) or die ("Erro 0x00110-SQLUpdateCRUD - ".mysqli_error($conn)); 

?>