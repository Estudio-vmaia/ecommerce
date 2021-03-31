<!-- Start Product Area -->
<div class="product-area section"  style="padding-top:30px;">
            <div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<h2>Lista de Produtos</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="product-info">
							
							<div class="tab-content" id="myTabContent">
								<!-- Start Single Tab -->
								<div class="tab-pane fade show active" id="man" role="tabpanel">
									<div class="tab-single">
										<div class="row">
											
                                            <?php

                                            include('../conn_db.php');
                                            
                                            $busca_produtos = " Select * from TB_Produtos where ativo = 1 ORDER BY id DESC";

                                            $result_produtos = mysqli_query($conn, $busca_produtos) or die ("Erro 0x001085-SQLProtudos - ".mysqli_error($conn)); 
                                            
                                            $rows_produtos = mysqli_num_rows($result_produtos);
                                            
                                            while($row_produtos = mysqli_fetch_array($result_produtos))
                                            {
                                                $SQL_id      	= $row_produtos['id'];
                                                $SQL_Produto 	= $row_produtos['Produto'];
                                                $SQL_Preco   	= $row_produtos['Preco'];
                                                $SQL_Imagem  	= $row_produtos['Imagem'];	
                                                $SQL_ImagemZoom = $row_produtos['ImagemZoom'];																		
                                            
                                            ?>
                                                
                                                <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="javascript:void(0)">
                                                                <img class="default-img" src="../images/products/<?php print $SQL_Imagem; ?>" alt="#">
                                                                <img class="hover-img" src="../images/products/<?php print $SQL_ImagemZoom; ?>" alt="#">
                                                            </a>
                                                            <div class="button-head">
                                                                <div class="product-action">
                                                                    <a title="Wishlist" href="#" onclick="Editar('Produto','<?php print $SQL_id; ?>','editar');"><i class="ti-reload"></i><span>EDITAR</span></a>
                                                                    <a title="Compare" href="#" onclick="Excluir('TB_Produtos','<?php print $SQL_id; ?>');"><i class="ti-close"></i><span>EXCLUIR</span></a> 
                                                                </div>                                                                
                                                            </div>
                                                        </div>
                                                        <div class="product-content">
                                                            <h3>
                                                                <a href="javascript:void(0)" id="NomeProd_<?php print $SQL_id; ?>">
                                                                    <?php print $SQL_Produto; ?>
                                                                </a>
                                                            </h3>
                                                            <div class="product-price">
                                                                <span>R$ <span  id="PrecoProd_<?php print $SQL_id; ?>"><?php print $SQL_Preco; ?></span></span>
                                                            </div>

                                                            <div id="btnsFunc_<?php print $SQL_id; ?>" style="display:none">
                                                                <button class="btn" type="button" style="padding: 10px 10px;" onclick="Editar('Produto','<?php print $SQL_id; ?>','cancelar');">Cancelar</button>
                                                                <button class="btn" type="button" style="padding: 10px 10px;" onclick="Salvar('TB_Produtos', <?php print $SQL_id; ?>);">Salvar</button>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>

                                            <?php
                                            }
                                            ?>    

										</div>
									</div>
								</div>
								<!--/ End Single Tab -->
								
							</div>
						</div>
					</div>
				</div>
            </div>
    </div>
	<!-- End Product Area -->



