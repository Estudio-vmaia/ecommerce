<?php include('../header.php'); ?>

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
		
	
		<!-- Breadcrumbs -->
		<div class="breadcrumbs" style="background-color:#F7941D">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bread-inner">	
						<img src="../images/logo2.png" alt="#">						
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
				
		<!-- Start Checkout -->
		<section class="shop checkout section">
			<div class="container">
				<div class="row"> 

				<script type="text/javascript">

function validateForm()
{
	user = $('#username').val(); 
    pass = $('#password').val(); 
	
    if(user == '')
    {
        $('#alertuser').text("Preencha o Usuário ou Email");
        $('#username').focus();
        verifuser = '';
    }else{
        $('#alertuser').text("");
        verifuser = 'ok';
    }
    
    if(pass == '')
    {
        $('#alertpass').text("Preencha a Senha");
        $('#pass').focus();
        verifpass = '';
    }else{
        $('#alertpass').text("");
        verifpass = 'ok';
    }
	
	
	if(verifuser == 'ok' && verifpass == 'ok')
    {
		
        $.ajax({
            type: 'POST',
            url: 'validalogin.php',
            data: $('#form_login').serialize(), 
            beforeSend: function() {                                                
            },
            success: function (data) {     				
				if(data.trim() == 'valido'){
                    window.location.href = "dashboard.php";					
                }
                else{
                    $('#alertpass').text(data);                    					
                }               
            },
            complete: function (data) {                
            }
        });
		
    }

	return false;  	
}

</script>

					<div class="col-lg-4 col-4" ></div>
					<div class="col-lg-4 col-4" style="-webkit-box-shadow: 2px 2px 5px 0px rgba(0,0,0,0.75); -moz-box-shadow: 2px 2px 5px 0px rgba(0,0,0,0.75); box-shadow: 2px 2px 5px 0px rgba(0,0,0,0.75); -webkit-border-radius: 10px;
-moz-border-radius: 10px; border-radius: 10px; margin-top:10px;">
						<div class="checkout-form" style="text-align:center">
							<h2 style="margin-bottom:30px;">Login</h2>

							<!-- Form -->
							<form id="form_login" name="form_login" method="post" onSubmit="return validateForm();" >
								<div class="row">

									<div class="col-lg-12 col-md-12 col-12">
										<div class="form-group">
											<label>Usuário:</label>
											<input type="text" id="username" name="username" placeholder="admin">
											<div id="alertuser" style="text-align: center; color:#f00"></div>
										</div>
									</div>
									
									<div class="col-lg-12 col-md-12 col-12">
										<div class="form-group">
											<label>Senha:</label>
											<input type="password" id="password" name="password" placeholder="1q">
											<div id="alertpass" style="text-align: center; color:#f00"></div>
										</div>
									</div>

									<div class="col-lg-12 col-md-12 col-12">
										<button class="btn" type="submit">Entrar</button>
										<br><br>
									</div>
									
								</div>
							</form>
							<!--/ End Form -->

							
						</div>
					</div>
					
				</div>
			</div>
		</section>
		<!--/ End Checkout -->



	
	<!-- Start Footer Area -->
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
	<!-- /End Footer Area -->
 
<?php include('../scripts.php'); ?>

</body>
</html>