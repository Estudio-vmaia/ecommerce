<?php

include('header.php');

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
		<div class="middle-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-12">
						<!-- Logo -->
						<div class="logo">
							<a href="index.html"><img src="images/logo.png" alt="logo"></a>
						</div>
						<!--/ End Logo -->
						<!-- Search Form -->
						<div class="search-top">
							<div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
							<!-- Search Form -->
							<div class="search-top">
								<form class="search-form">
									<input type="text" placeholder="Search here..." name="search">
									<button value="search" type="submit"><i class="ti-search"></i></button>
								</form>
							</div>
							<!--/ End Search Form -->
						</div>
						<!--/ End Search Form -->
						<div class="mobile-nav"></div>
					</div>
					<div class="col-lg-8 col-md-7 col-12">
						<div class="search-bar-top">
							<div class="search-bar">
								<select>
									<option selected="selected">Categorias</option>
									<option>Feminino</option>
									<option>Masculino</option>
									<option>Teens & kids</option>
								</select>
								<form>
									<input name="search" placeholder="Procurar produto..." type="search">
									<button class="btnn"><i class="ti-search"></i></button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-12">
						<div class="right-bar">
							<!-- Search Form -->
							<div class="sinlge-bar">
								<a href="#" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
							</div>
							<div class="sinlge-bar">
								<a href="#" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
							</div>
							<div class="sinlge-bar shopping">
								<a href="#" class="single-icon"><i class="ti-bag"></i> <span class="total-count" id="countItensCar">0</span></a>
								<!-- Shopping Item -->
								<div class="shopping-item">
									<div class="dropdown-cart-header">
										<span id="countItensCa2">Sem Itens</span>
										<a href="#">Carrinho</a>
									</div>
									
									<!-- LISTA DE PRODUTOS NO CARRINHO -->
									<ul class="shopping-list" id="listProd">
										
										<!-- LI EXEMPLO 
										<li>
											<a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
											<a class="cart-img" href="#"><img src="images/product-1.jpg" alt="#"></a>
											<h4><a href="#">Anel B154</a></h4>
											<p class="quantity">1x - <span class="amount">R$ 99,00</span></p>
										</li>
										-->
										
										
									</ul>


									<div class="bottom">
										<div class="total">
											<span>Total</span>
											<span class="total-amount" id="total" name="total">
												<span id="OldPrice" name="OldPrice" style="text-decoration:line-through; display:none;"> </span>
												<span id="PriceTotal" name="PriceTotal" style="margin-left: 10px; color:#F7941D;"> R$ 0</span>
											</span>
											
										</div>
										<div class="total">
											<span>Cupom:</span>
											<span class="total-amount">
												<input type="text" id="cpDesconto" name="cpDesconto" style="width: 70%; float: right;" value="">
												<span id="CupomApli" name="CupomApli" style="display:none; width: 100%;"></span>

												<span id="DescApli" style="display:none; width: 100%; "></span>
												<span id="DescTipo" style="display:none; width: 100%; "></span>
											</span>
											
										</div>
										<div class="total">
											<span id="cpRetorno" name="cpRetorno" style="color:#f00; width:100%; display:none" >Cupom Inválido</span> 
										</div>
										
										<a href="javascript:void(0)" class="btn animate" id="BtPgto" name="BtPgto" onclick="VerifPGTO();" onmouseover="VerificaCumpomPGTO();">Pagamento</a>
									</div>
								</div>
	
									


								<!--/ End Shopping Item -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Header Inner -->
		<div class="header-inner">
			<div class="container">
				<div class="cat-nav-head">
					<div class="row">
						<div class="col-lg-3">
							<div class="all-category">
								<h3 class="cat-heading"><i class="fa fa-bars" aria-hidden="true"></i>CATEGORIAS</h3>
								<ul class="main-category">
									<li><a href="#">Novidades <i class="fa fa-angle-right" aria-hidden="true"></i></a>
										<ul class="sub-category">
											<li><a href="#">Accessórios</a></li>
											<li><a href="#">Top 100 ofertas</a></li>
											<li><a href="#">Óculos</a></li>
											<li><a href="#">Relógios</a></li>
											<li><a href="#">Vestidos</a></li>											
										</ul>
									</li>
									<li class="main-mega"><a href="#">Mais vendidos <i class="fa fa-angle-right" aria-hidden="true"></i></a>
										<ul class="mega-menu">
											<li class="single-menu">
												<a href="#" class="title-link">Linha Kid's</a>
												<div class="image">
													<img src="images/mega-menu1.jpg" alt="#">
												</div>
												<div class="inner-link">
													<a href="#">Conjuntos</a>
													<a href="#">Tênis</a>
													<a href="#">Blusas</a>
													<a href="#">Moletom</a>
												</div>
											</li>
											<li class="single-menu">
												<a href="#" class="title-link">Linha Masculina</a>
												<div class="image">
													<img src="images/mega-menu2.jpg" alt="#">
												</div>
												<div class="inner-link">
													<a href="#">Relógios</a>
													<a href="#">Camisetas</a>
													<a href="#">Bermudas</a>
													<a href="#">Social</a>
												</div>
											</li>
											<li class="single-menu">
												<a href="#" class="title-link">Linha Feminia</a>
												<div class="image">
													<img src="images/mega-menu3.jpg" alt="#">
												</div>
												<div class="inner-link">
													<a href="#">Jóias</a>
													<a href="#">Camisetas</a>													
													<a href="#">Óculos</a>
													<a href="#">Relógios</a>
												</div>
											</li>
										</ul>
									</li>
									<li><a href="#">Accessórops</a></li>
									<li><a href="#">Top 100 ofertas</a></li>
									<li><a href="#">Óculos</a></li>
									<li><a href="#">Relógios</a></li>
									<li><a href="#">Masculino</a></li>
									<li><a href="#">Feminino</a></li>									
								</ul>
							</div>
						</div>
						<div class="col-lg-9 col-12">
							<div class="menu-area">
								<!-- Main Menu -->
								<nav class="navbar navbar-expand-lg">
									<div class="navbar-collapse">	
										<div class="nav-inner">	
											<ul class="nav main-menu menu navbar-nav">
												<li class="active"><a href="#">Home</a></li>
												<li><a href="#">Produtos</a></li>												
												<li><a href="#">Serviços</a></li>												
												<li><a href="contact.html">Fale conosco</a></li>
												<li><a href="#">Shop<i class="ti-angle-down"></i><span class="new">Novidade</span></a>
													<ul class="dropdown">
														<li><a href="cart.html">Carrinho</a></li>
														<li><a href="checkout.html">Pagamento</a></li>
													</ul>
												</li>
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
	
	<!-- Slider Area -->
	<section class="hero-slider">
		<!-- Single Slider -->
		<div class="single-slider">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-lg-9 offset-lg-3 col-12">
						<div class="text-inner">
							<div class="row">
								<div class="col-lg-7 col-12">
									<div class="hero-text" style="margin-top: 10px">
									
									<?php
										include('conn_db.php');
                                            
										$busca_cupons = " select * from TB_Cupom where Ativo != 'E' ORDER BY id DESC ";

										$result_cupons = mysqli_query($conn, $busca_cupons) or die ("Erro 0x001085-SQLProtudos - ".mysqli_error($conn)); 
										
										$rows_cupons = mysqli_num_rows($result_cupons);
										
										while($row_cupons = mysqli_fetch_array($result_cupons))
										{
											$SQL_id    	= $row_cupons['id'];
											$SQL_Cupom 	= $row_cupons['Cupom'];
											$SQL_Tipo  	= $row_cupons['Tipo'];
											$SQL_Valor 	= $row_cupons['Valor'];	
											$SQL_Ativo 	= $row_cupons['Ativo'];	
											
											if($SQL_Tipo == 'percent'){
												$SQL_Valor = $SQL_Valor.'%';
											}

											if($SQL_Tipo == 'fixo'){
												$SQL_Valor = 'R$ '.$SQL_Valor;
											}

											print ' <h1><span>CUPOM PARA DESCONTO DE '.$SQL_Valor.':</span>'.$SQL_Cupom .'</h1> ';
										}
										?>

										<div class="button">
											<a href="#" class="btn">Ver Ofertas</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Single Slider -->
	</section>
	<!--/ End Slider Area -->


	<!-- Start Product Area -->
    <div class="product-area section" style="padding: 0;">
            <div class="container">				
				<div class="row">
					<div class="col-12">
						<div class="product-info">
							<div class="tab-content" id="myTabContent">
								<!-- Start Single Tab -->
								<div class="tab-pane fade show active" id="man" role="tabpanel">
									<div class="tab-single">
										<div class="row">

										<?php
										
										include('conn_db.php');

										$busca_produtos = " Select * from TB_Produtos where ativo = 1 ";

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
														<a href="product-details.html">
															<img class="default-img" src="images/products/<?php print $SQL_Imagem; ?>" alt="#">
															<img class="hover-img" src="images/products/<?php print $SQL_ImagemZoom; ?>" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Lista de Desejos</span></a>
																<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Compare</span></a>
															</div>
															<div class="product-action-2">
																<a title="Add to cart" href="javascript:void(0)" onclick="addProd('<?php print $SQL_id; ?>');">- Adicionar ao carrinho -</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html"><?php print $SQL_Produto; ?></a></h3>
														<div class="product-price">
															<span>R$ <?php print $SQL_Preco; ?></span>
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
	
	<!-- Start Small Banner  -->
	<section class="small-banner section">
		<div class="container-fluid">
		<div class="row">
					<div class="col-12">
						<div class="section-title">
							<h2>Tendências</h2>
						</div>
					</div>
				</div>
			<div class="row">
				<!-- Single Banner  -->
				<div class="col-lg-4 col-md-6 col-12">
					<div class="single-banner">
						<img src="images/mini-banner1.jpg" alt="#">
						<div class="content">
							<p>Coleção Masculina</p>
							<h3>Novidades Verão <br> 2021</h3>
							<a href="#">Veja mais</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<div class="col-lg-4 col-md-6 col-12">
					<div class="single-banner">
						<img src="images/mini-banner2.jpg" alt="#">
						<div class="content">
							<p>Coleção de Bolsas</p>
							<h3>Lançamentos <br> 2021</h3>
							<a href="#">Veja mais</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<div class="col-lg-4 col-12">
					<div class="single-banner tab-height">
						<img src="images/mini-banner3.jpg" alt="#">
						<div class="content">
							<p>Coleção Fashion</p>
							<h3>Mid Season <br> Até <span>40%</span> de <br>desconto</h3>
							<a href="#">Veja mais</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
			</div>
		</div>
		<br><br>
	</section>
	<!-- End Small Banner -->
	
	
	
	<section class="section free-version-banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8 offset-md-2 col-xs-12">
                    <div class="section-title mb-60">
                        <h2 class="text-white wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">ADMIN e CRUD<br> Para Cupons e Produtos.</h2>
                        <p class="text-white wow fadeInUp" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">Eshop Test Live</p>

                        <div class="button">
                            <a href="#" target="_blank" rel="nofollow" class="btn wow fadeInUp" data-wow-delay=".8s">Call to Action</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	
	<!-- Start Shop Services Area -->
	<section class="shop-services section home">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-rocket"></i>
						<h4>ENTREGA EXPRESSA</h4>
						<p>Para todos os produtos</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-reload"></i>
						<h4>Devolução gratuita</h4>
						<p>Retorno em até 30 dias</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-lock"></i>
						<h4>Pagamento Seguro</h4>
						<p>Transações 100% seguras</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-tag"></i>
						<h4>Melhor preço</h4>
						<p>Garantimos o Melhor preço</p>
					</div>
					<!-- End Single Service -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Services Area -->
	
	<!-- Start Shop Newsletter  -->
	<section class="shop-newsletter section">
		<div class="container">
			<div class="inner-top">
				<div class="row">
					<div class="col-lg-8 offset-lg-2 col-12">
						<!-- Start Newsletter Inner -->
						<div class="inner">
							<h4>Newsletter</h4>
							<p> Se inscreva em nossa newsletter e ganher <span>10%</span> na primeira compra!</p>
							<form action="#" method="get" target="_blank" class="newsletter-inner">
								<input name="EMAIL" placeholder="Email" required="" type="email">
								<button class="btn">inscrever-se</button>
							</form>
						</div>
						<!-- End Newsletter Inner -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Newsletter -->
	
	<!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row no-gutters">
							<div class="col-lg-6 offset-lg-3 col-12">
								<h4 style="margin-top:100px;font-size:14px; font-weight:500; color:#F7941D; display:block; margin-bottom:12px;">Eshop Free Lite</h4>
								<h3 style="font-size:30px;color:#333;">Currently You are using free lite Version of Eshop.<h3>
								<p style="display:block; margin-top:20px; color:#888; font-size:14px; font-weight:400;">Please, purchase full version of the template to get all pages, features and commercial license</p>
								<div class="button" style="margin-top:30px;">
									<a href="https://wpthemesgrid.com/downloads/eshop-ecommerce-html5-template/" target="_blank" class="btn" style="color:#fff;">Buy Now!</a>
								</div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- Modal end -->
	
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
								<a href="#"><img src="images/logo2.png" alt="#"></a>
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
								<img src="images/payments.png" alt="#">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- /End Footer Area -->



	<!-- Jquery 
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
	<script src="js/jquery-ui.min.js"></script>
								-->

	<?php include('functions.php'); ?>

	


	<?php include('scripts.php'); ?>

</body>
</html>