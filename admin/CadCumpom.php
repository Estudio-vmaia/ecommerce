<?php

include('../conn_db.php');

$tb = @$_GET['tb'];

$NomeCP = @$_POST['NomeCP'];
$TipoCP = @$_POST['TipoCP'];
$ValorCP = @$_POST['ValorCP'];

$SQl_Update = ' INSERT TB_Cupom SET ';
$SQl_Update .= "Cupom = '".$NomeCP."', ";
$SQl_Update .= "Tipo = '".$TipoCP."', ";
$SQl_Update .= "Valor = '".$ValorCP."' ";

print $SQl_Update;

$SQl_Update = mysqli_query($conn, $SQl_Update) or die ("Erro 0x00110-SQLUpdateCRUD - ".mysqli_error($conn)); 

?>