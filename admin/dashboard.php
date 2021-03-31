<?php

include('../header.php');

?>

<body class="js">
	
	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->
	
	
	<!-- Header -->
	<header class="header shop">
		<!-- Topbar -->
		<div class="topbar">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-12 col-12">
						<!-- Top Left -->
						<div class="top-left">
							<ul class="list-main">
								<li><i class="ti-headphone-alt"></i> +55 (11) 1234-5678</li>
								<li><i class="ti-email"></i> atendimento@shop.com.br</li>
							</ul>
						</div>
						<!--/ End Top Left -->
					</div>
					<div class="col-lg-7 col-md-12 col-12">
						<!-- Top Right -->
						<div class="right-content">
							<ul class="list-main">
								<li><i class="ti-location-pin"></i> Localização</li>
								<li><i class="ti-alarm-clock"></i> <a href="#">Ofertas do Dia</a></li>
								<li><i class="ti-user"></i> <a href="#">Minha conta</a></li>
								<li><i class="ti-power-off"></i><a href="login.html#">Login</a></li>
							</ul>
						</div>
						<!-- End Top Right -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Topbar -->
		

		<div class="header-inner">
			<div class="container">
				<div class="cat-nav-head">
					<div class="row">
						
						<div class="col-lg-9 col-12">
							<div class="menu-area">
								<!-- Main Menu -->
								<nav class="navbar navbar-expand-lg">
									<div class="navbar-collapse">	
										<div class="nav-inner">	
											<ul class="nav main-menu menu navbar-nav">													
												<li class="active"><a href="#">Produtos</a>
													<ul class="dropdown">
														<li><a href="javascript:void(0)" onclick="loadPage('listaProdutos.php');">Lista</a></li>
														<li><a data-toggle="modal" data-target="#exampleModal" href="#" onclick="loadModal('CadProd.php');"> Cadastrar</a></li>
													</ul>
												</li>
												<li><a href="javascript:void(0);" onclick="loadPage('cupom.php');">Cupons</a></li>
												<li><a href="javascript:void(0);" onclick="loadPage('ususario.php');">Usuários</a></li>																										
											</ul>
										</div>
									</div>
								</nav>
								<!--/ End Main Menu -->	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Header Inner -->
	</header>
	<!--/ End Header -->
	
	<script type="text/javascript">

	window.onload = function() {
		//loadPage('listaProdutos.php');          
	}
	
	function loadPage(pagina){		
		$.ajax({
			url: pagina
			}).done(function(data) { // 
			$('#contentAdmin').html(data);	
		});

		return false;
	}

	function loadModal(pagina){		
		$.ajax({
			url: pagina
			}).done(function(data) { // 
			$('#contentModal').html(data);	
		});
	}



	function Excluir(tb, id){
		
		$.ajax({
            url: 'excluir.php?tb='+tb+'&id='+id,
            success: function (data) {
                if(tb == 'TB_Produtos'){
					loadPage('listaProdutos.php');
				}
            },
            complete: function (data) {                
            }
        });
	}


	function Editar(tipo, id, acao){

		if(tipo == 'Produto'){

			if(acao == 'editar'){			
			document.getElementById("NomeProd_"+id).contentEditable = "true";
			document.getElementById("NomeProd_"+id).style.border = "1px solid #f00";

			document.getElementById("PrecoProd_"+id).contentEditable = "true";
			document.getElementById("PrecoProd_"+id).style.border = "1px solid #f00";

			document.getElementById("btnsFunc_"+id).style.display = "block";
			}

			if(acao == 'cancelar'){
				document.getElementById("NomeProd_"+id).contentEditable = "false";
				document.getElementById("NomeProd_"+id).style.border = "0px";

				document.getElementById("PrecoProd_"+id).contentEditable = "false";
				document.getElementById("PrecoProd_"+id).style.border = "0px";

				document.getElementById("btnsFunc_"+id).style.display = "none";
			}
		}
	}

	function Salvar(tb, id){
		var NomeProd = document.getElementById('NomeProd_'+id).innerText; 
		var PrecoProd = document.getElementById('PrecoProd_'+id).innerText; 

		//console.log(NomeProd,PrecoProd);

		$.ajax({
            url: 'editar.php?tb='+tb+'&id='+id+'&nome='+NomeProd+'&preco='+PrecoProd,
            success: function (data) {
                if(tb == 'TB_Produtos'){
					loadPage('listaProdutos.php');
				}
            },
            complete: function (data) {                
            }
        });
	}


	function CupomEdit(editar, id){
		$.ajax({
            url: 'editCupom.php?id='+id+'&acao='+editar,
            success: function (data) {
                loadPage('cupom.php');				
            },
            complete: function (data) {                
            }
        });
	}

	function CupomCadastrar(){
		$.ajax({
            type: 'POST',
            url: 'CadCumpom.php',
            data: $('#formProd').serialize(), 
            beforeSend: function() {                                
            },
            success: function (data) {
            },
            complete: function (data) {
                loadPage('cupom.php');		
            }
        });

		return false;
	}


	function UserEdit(editar, id){
		$.ajax({
            url: 'editUser.php?id='+id+'&acao='+editar,
            success: function (data) {
                loadPage('ususario.php');				
            },
            complete: function (data) {                
            }
        });
	}

		function UserCadastrar(){
		$.ajax({
            type: 'POST',
            url: 'CadUser.php',
            data: $('#formUser').serialize(), 
            beforeSend: function() {                                
            },
            success: function (data) {
            },
            complete: function (data) {
                loadPage('ususario.php');		
            }
        });

		return false;
		}
	

	

	</script>

	<div id="contentAdmin"></div>
	
	
	<!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close" id="closemodal"><span class="ti-close" aria-hidden="true"></span></button>
				</div>
				<div class="modal-body">
					<div class="row no-gutters">
						<div class="col-lg-10 offset-lg-1 col-12" style=" padding-top:80px;" id="contentModal">
							
							
							

						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
    <!-- Modal end -->
	
	
	<!-- Start Footer Area -->
	<br><br>
	<footer class="footer">	
		<!-- Footer Top -->
		<div class="footer-top section">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer about">
							<div class="logo">
								<a href="#"><img src="../images/logo2.png" alt="#"></a>
							</div>
							<p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pulvinar odio sit amet scelerisque consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pulvinar odio sit amet scelerisque consequat. </p>
							<p class="call">Atendimento<span><a href="tel:1112345678">+55 11 1234-5678</a></span></p>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>Informações</h4>
							<ul>
								<li><a href="#">Sobre nós</a></li>
								<li><a href="#">Perguntas</a></li>
								<li><a href="#">Termos & Condições</a></li>
								<li><a href="#">Contato</a></li>
								<li><a href="#">Ajuda</a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>Serviços</h4>
							<ul>
								<li><a href="#">Pagamento</a></li>
								<li><a href="#">Devolução</a></li>
								<li><a href="#">Envio</a></li>
								<li><a href="#">Compras</a></li>
								<li><a href="#">Política & Privacidade</a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer social">
							<h4>Entre em contato</h4>
							<!-- Single Widget -->
							<div class="contact">
								<ul>
									<li>Av Paulista - 100</li>
									<li>São Paulo - SP.</li>
									<li>atendimento@shop.com.br</li>
									<li>+55 (11) 1234-5678</li>
								</ul>
							</div>
							<!-- End Single Widget -->
							<ul>
								<li><a href="#"><i class="ti-facebook"></i></a></li>
								<li><a href="#"><i class="ti-twitter"></i></a></li>
								<li><a href="#"><i class="ti-flickr"></i></a></li>
								<li><a href="#"><i class="ti-instagram"></i></a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Footer Top -->
		<div class="copyright">
			<div class="container">
				<div class="inner">
					<div class="row">
						<div class="col-lg-6 col-12">
							<div class="left">
								<p> Layout Refência -> Copyright © 2020 <a href="http://www.wpthemesgrid.com" target="_blank">Wpthemesgrid</a> </p>
							</div>
						</div>
						<div class="col-lg-6 col-12">
							<div class="right">
								<img src="../images/payments.png" alt="#">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- /End Footer Area --
 
	<?php include('../scripts.php'); ?>

</body>
</html>