<?php

include('../conn_db.php');

$tb = @$_GET['tb'];

$NomeUSER = @$_POST['NomeUSER'];
$emailUSER = @$_POST['emailUSER'];
$SenhaUSER = @$_POST['SenhaUSER'];

$SenhaUSER = md5($SenhaUSER);

$SQl_Update = ' INSERT TB_Usuarios SET ';
$SQl_Update .= "Usuario = '".$NomeUSER."', ";
$SQl_Update .= "Email = '".$emailUSER."', ";
$SQl_Update .= "Senha = '".$SenhaUSER."' ";

print $SQl_Update;

$SQl_Update = mysqli_query($conn, $SQl_Update) or die ("Erro 0x00110-SQLUpdateCRUD - ".mysqli_error($conn)); 

?>