<?php

include('../conn_db.php');

if ( (isset($_REQUEST['username'])) && (isset($_REQUEST['password'])) )
{
    $user =  $_REQUEST['username'];
    $pass =  $_REQUEST['password'];
    
    $busca_user = " select * from TB_Usuarios where Usuario = '".$user."' or Email = '".$user."' ";

    $result_user = mysqli_query($conn, $busca_user) or die ("Erro 0x00510-BuscaUser - ".mysqli_error($conn)); 

    $user_senha = '';
    while($row_user = mysqli_fetch_array($result_user))
    {
        $user_senha = $row_user['Senha'];
    }

    if( md5($pass) != $user_senha)
    {
        print 'Usuário ou Senha inválidos';        
    }
    else
    {
        print 'valido';
    }

}
?>