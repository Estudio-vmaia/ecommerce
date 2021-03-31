<div class="row">
	<div class="col-lg-6 col-6" >
		<h3>Cadastro de Produtos</h3>
		<form id="formCupom" name="formCupom" method="post" onSubmit="return SalvarProd();" style="margin-top:50px;" >
			<div class="row">

				<div class="col-lg-6 col-md-6 col-6">
					<div class="col-lg-12 col-md-12 col-12">
						<div class="form-group">
							<label>Nome:</label>
							<input type="text" id="NomeProd" name="NomeProd" placeholder="">
							<div id="alertNome" style="text-align: center; color:#f00"></div>
						</div>
					</div>
					
					<div class="col-lg-12 col-md-12 col-12">
						<div class="form-group">
							<label>Preço:</label>
							<input type="text" id="PrecoProd" name="PrecoProd" placeholder="">
							<div id="alertPreco" style="text-align: center; color:#f00"></div>
						</div>
					</div>

					<div class="col-lg-12 col-md-12 col-12" style="text-align:center">
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
				
			</div>
		</form>
	</div>

	<div class="col-lg-6 col-6" >
		<?php
		$dir = "../images/products/";

		// Open a directory, and read its contents
		if (is_dir($dir)){
		if ($dh = opendir($dir)){
			while (($file = readdir($dh)) !== false){
			//echo "filename:" . $file . "<br>";
			if($file != '.' && $file != '..' ){
				print ' <img class="default-img" src="../images/products/'.$file.'" alt="#" width="80px" style="margin-bottom:5px;"  onclick="setImg(\''.$file.'\');"> ';
			}
			
			}
			closedir($dh);
		}
		}
		?>

		<script>
			function setImg(img){											
				document.getElementById('imgEscolhida').src = '../images/products/'+img; 
				document.getElementById('imgProd').value = img;											
			}

			function SalvarProd(){		
				$.ajax({
				type: 'POST',
				url: 'salvar.php?tb=TB_Produtos',
				data: $('#formProd').serialize(), 
				beforeSend: function() {                                
					//ModalLoad();
				},
				success: function (data) {												
				},
				complete: function (data) {
					loadPage('listaProdutos.php');   
					document.getElementById('closemodal').click(); 
				}
			});

			return false;
		}
			
		</script>
	</div>
</div>