<?php
    include('conn_db.php');

    $id = $_REQUEST['id'];

    $busca_produtos = " select * from TB_Produtos where id =  ".$id;

    $result_produtos = mysqli_query($conn, $busca_produtos) or die ("Erro 0x001085-SQLBuscaProtudos - ".mysqli_error($conn)); 
    
    $rows_produtos = mysqli_num_rows($result_produtos);
    
    while($row_produtos = mysqli_fetch_array($result_produtos))
    {
        $SQL_id      	= $row_produtos['id'];
        $SQL_Produto 	= $row_produtos['Produto'];
        $SQL_Preco   	= $row_produtos['Preco'];
        $SQL_Imagem  	= $row_produtos['Imagem'];	
        $SQL_ImagemZoom = $row_produtos['ImagemZoom'];	
    }

?>
<li id="LI-<?php print $SQL_id; ?>">
    <a href="#" onclick="removeProd('<?php print $SQL_id; ?>')" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
    <a class="cart-img" href="#"><img src="images/products/<?php print $SQL_Imagem; ?>" alt="#"></a>
    <h4><a href="#"><?php print $SQL_Produto; ?></a></h4>
    <p class="amount">R$ <?php print $SQL_Preco; ?></p>
    <div id="price_<?php print $SQL_id; ?>" style="display:none"><?php print $SQL_Preco; ?></div>
</li>