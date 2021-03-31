		
				
		<!-- Start Checkout -->
		<section class="shop checkout section">
			<div class="container">
				<div class="row"> 

					<div class="col-lg-6 col-12">
						<!-- Button Widget -->
						<div class="single-widget get-button">
							<div class="content">
								<form id="formUser" name="formUser" method="post" onSubmit="return UserCadastrar();" style="margin-top:50px;" >
									<div class="row" style="text-align: right; ">

											<div class="col-lg-12 col-md-12 col-12" style="padding-right:150px;">
												<div class="form-group">
													<label>Usuário:</label>
													<input type="text" id="NomeUSER" name="NomeUSER" placeholder="">
													<div id="alertNome" style="text-align: center; color:#f00"></div>
												</div>
											</div>

											<div class="col-lg-12 col-md-12 col-12" style="padding-right:150px;">
												<div class="form-group">
													<label>Email:</label>
													<input type="text" id="emailUSER" name="emailUSER" placeholder="">
													<div id="alertNome" style="text-align: center; color:#f00"></div>
												</div>
											</div>

											<div class="col-lg-12 col-md-12 col-12" style="padding-right:150px;">
												<div class="form-group">
													<label>Senha:</label>
													<input type="text" id="SenhaUSER" name="SenhaUSER" placeholder="">
													<div id="alertPreco" style="text-align: center; color:#f00"></div>
												</div>
											</div>

											<div class="col-lg-12 col-md-12 col-12" style="text-align:center; padding-right:150px; padding-left:150px;">
												<button class="btn" type="submit">Cadastrar</button>
												<br><br>
											</div>
										</div>

										<div class="col-lg-6 col-md-6 col-6">
											<center>
												<img src="" id="imgEscolhida" style="max-height:250px;">
												<input type="text" id="imgProd" name="imgProd" placeholder="" style="display:none">
											</center>
										</div>
										
								</form>
							</div>
						</div>
						<!--/ End Button Widget -->
					</div>

					<div class="col-lg-6 col-12">
						<div class="order-details">
							<!-- Order Widget -->
							<div class="single-widget">
								<h2>Usuários</h2>
								<div class="content">
									<ul>
										<?php include('../conn_db.php');
                                            
										$busca_cupons = " select * from TB_Usuarios where Ativo != 'E' ORDER BY id DESC ";

										$result_cupons = mysqli_query($conn, $busca_cupons) or die ("Erro 0x001085-SQLProtudos - ".mysqli_error($conn)); 
										
										$rows_cupons = mysqli_num_rows($result_cupons);
										
										while($row_cupons = mysqli_fetch_array($result_cupons))
										{
											$SQL_id    	= $row_cupons['id'];
											$SQL_Usuario 	= $row_cupons['Usuario'];
											$SQL_Email  	= $row_cupons['Email'];											
											$SQL_Ativo 	= $row_cupons['Ativo'];	

											if($SQL_Ativo != '1')
											{
												$color = ' color:#f00; ';
												$title = 'Ativar';
											}
											else{
												$color = '';
												$title = 'Desativar';
											}
											
										?>
										<li>
											<b><?php print $SQL_Usuario; ?></b> 
											<span >
												<b><?php print $SQL_Email; ?></b>
												<a title="<?php print $title; ?>" alt="<?php print $title; ?>" href="#" style="margin-left:15px; <?php print $color; ?>" onclick="UserEdit('editar', '<?php print $SQL_id; ?>')">
													<i class="ti-reload"></i>
												</a>
												<a title="Excluir" alt="Excluir" href="#" style="margin-left:15px;" onclick="UserEdit('excluir', '<?php print $SQL_id; ?>')"><i class="ti-trash remove-icon"></i></a>												
											</span>
										</li>										
										<?php } ?>								
									</ul>
								</div>
							</div>
							<!--/ End Order Widget -->
							
							
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Checkout -->
		
	
 