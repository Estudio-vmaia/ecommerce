<?php

include('conn_db.php');

$cpGet = $_REQUEST['cpGet'];

$busca_cupom = " Select * from TB_Cupom where Cupom = '".$cpGet."' ";

$result_cupom = mysqli_query($conn, $busca_cupom) or die ("Erro 0x001085-SQLCupom - ".mysqli_error($conn)); 

$rows_cupom = mysqli_num_rows($result_cupom);

while($row_cupom = mysqli_fetch_array($result_cupom))
{
    $SQL_id     = $row_cupom['id'];
    $SQL_Cupom  = $row_cupom['Cupom'];
    $SQL_Tipo   = $row_cupom['Tipo'];
    $SQL_Valor  = $row_cupom['Valor'];

    $return_arr[] = array("id" => $SQL_id,
    "Cupom" => $SQL_Cupom,
    "Tipo" => $SQL_Tipo,
    "Valor" => $SQL_Valor);
}

if($rows_cupom == 0)
{
    $return_arr[] = array("id" => '',
    "Cupom" => '',
    "Tipo" => '',
    "Valor" => '');
}

echo json_encode($return_arr);

?>
