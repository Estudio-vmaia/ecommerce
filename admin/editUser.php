<?php

include('../conn_db.php');

$id = @$_GET['id'];
$acao = @$_GET['acao'];

if($acao == 'editar'){
                                
    $busca_status = " select * from TB_Usuarios where id = ".$id;

    $result_status = mysqli_query($conn, $busca_status) or die ("Erro 0x001085-SQLProtudos - ".mysqli_error($conn)); 

    $rows_status = mysqli_num_rows($result_status);

    while($row_status = mysqli_fetch_array($result_status))
    {
        $SQL_ativo = $row_status['Ativo'];
    }

    if($SQL_ativo == '1')
    {
        $statusNew = 0;
    }
    else{
        $statusNew = 1;
    }
}

if($acao == 'excluir')
{
    $statusNew = 'E';
}

$SQl_Update = ' UPDATE TB_Usuarios SET ';
$SQl_Update .= "Ativo = '".$statusNew."' ";
$SQl_Update .= ' WHERE id = '.$id;

$SQl_Update = mysqli_query($conn, $SQl_Update) or die ("Erro 0x00110-SQLUpdateCRUD - ".mysqli_error($conn)); 

?>