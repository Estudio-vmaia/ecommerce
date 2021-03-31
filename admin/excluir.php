<?php

include('../conn_db.php');

$tb = @$_GET['tb'];
$id = @$_GET['id'];

	$SQl_Update = ' UPDATE '.$tb.' SET ';
    $SQl_Update .= "Ativo = 0 ";
	$SQl_Update .= ' WHERE id = '.$id;

    //print $SQl_Update;

    $SQl_Update = mysqli_query($conn, $SQl_Update) or die ("Erro 0x00118-SQLUpdateCRUD - ".mysqli_error($conn)); 

?>