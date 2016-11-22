<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>WeGet</title>
        <link rel="stylesheet" href="css/frmBuscar.css">

        <!-- Google Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
        
        <!-- Bootstrap -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        
        <!-- Font Awesome -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        
        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/responsive.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
	<body>  
        <div class="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="user-menu">
                            <ul>
                                <li><a href="frmLogin.php"><i class="fa fa-user"></i> Minha Conta</a></li>
                                <li><a href="frmCadastro.php"><i class="fa fa-user"></i> Cadastre-se</a></li>
                                <li><a href="frmLogin.php"><i class="fa fa-user"></i> Entrar</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="header-right">
                            <ul class="list-unstyled list-inline">                           
                                <li class="dropdown dropdown-small">
                                    <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">Idioma :</span><span class="value">Portugu�s </span><b class="caret"></b></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End header area -->
        
        <div class="site-branding-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="logo">
                            <h1><a href="index.php">We<span>Get</span></a></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End site branding area -->
        
        <div class="mainmenu-area">
            <div class="container">
                <div class="row">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div> 
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="index.php">Inicio</a></li>
                            <li><a href="produto.php">Produto</a></li>
                            <li><a href="contato.php">Contato</a></li>
                            <li>
                                <span id="frmBuscar">
                                    <form>
                                        <input type="text" placeholder="Buscar produtos...">
                                        <input type="submit" id="frmBuscarCor" value="Buscar">
                                    </form>
                                </span>
                            </li>
                        </ul>
                    </div>  
                </div>
            </div>
        </div> <!-- End mainmenu area -->
        
		<div style="width: 370px;margin:0 auto;">
			<div class="box">      
			<form enctype="multipart/form-data" action="confirmaCadProduto.php" class="checkout" method="post" name="checkout">
				<div id="customer_details" class="col2-set">                                       
					<div class="col-1">
						<div class="woocommerce-billing-fields">
							<p id="billing_product_name_field" class="form-row form-row-last validate-required">
								<label class="" for="billing_product_name_field">
									* Nome
                                    <abbr title="Este campo � obrigat�rio. Coloque o nome do produto " class="required">
										<img src="img/help.png" id="imgFrmCadastro">
                                    </abbr>
                                </label>
                                <input type="text" value="" placeholder="Nome do produto" id="billing_nome_produto" name="billing_nome_produto" class="input-text " required>
							</p>
        
							<p id="billing_last_name_field" class="form-row form-row-last validate-required">
								<label class="" for="billing_last_name">
									* Descri&ccedil;&atilde;o
									<abbr title="Este campo � obrigat�rio. Informe as Descri��es tecnicas do produto" class="required">
										<img src="img/help.png" id="imgFrmCadastro">
									</abbr>
								</label>
								<input type="text" value="" placeholder="Descri��es tecnicas do produto" id="billing_last_name" name="billing_last_name" class="input-text " required>
							</p> 
        
							<p id="billing_quantity_field" class="form-row form-row-last validate-required">
								<label class="" for="billing_quantity">
								* Quantidade
									<abbr title="Este campo � obrigat�rio. Informe a quantidade disponivel" class="required">
										<img src="img/help.png" id="imgFrmCadastro">
									</abbr>
								</label>
								<input type="text" value="" placeholder="Quantidade disponivel" id="billing_qtde" name="billing_qtde" class="input-text " required>
							</p> 
        
                                        <!--<p id="billing_last_name_field" class="form-row form-row-last validate-required">
                                            <label class="" for="billing_last_name">
                                                * Pre�o
                                                <abbr title="Este campo � obrigat�rio. Informe o valor de venda do produto" class="required">
                                                    <img src="img/help.png" id="imgFrmCadastro">
                                                </abbr>
                                            </label>
                                            <input type="text" value="" placeholder="Valor de venda" id="billing_last_name" name="billing_last_name" class="input-text " required>
                                        </p>-->                                                             
							</div>  
						</div>
					</div>
					<div class="btnFimCompra" id="btnFimCompra">
						<input type="submit" data-value="Place order" value="Salvar" name="Cadastrar Produto" class="button alt">
					</div>
				</form>
			</div>
		</div>
                                   
        <div class="clear"></div><div class="footer-top-area">
            <div class="zigzag-bottom"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-about-us">
                            <h2>We<span>Get</span></h2>
                            <p>WeGet � uma empresa brasileira. � uma das pioneiras no segmento de com�rcio eletr�nico do Brasil, criada em 2015 e hoje � l�der neste segmento. Acesse nossas redes sociais e conhe�a mais sobre nossa empresa.</p>
                            <div class="footer-social">
                                <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-menu">
                            <h2 class="footer-wid-title">Navega��o </h2>
                            <ul>
                                <li><a href="#">Minha Conta</a></li>
                                <li><a href="#">Hist�rico de Compra</a></li>
                                <li><a href="#">Perfil</a></li>
                                <li><a href="#">Contato Fornecedor</a></li>
                                <li><a href="#">Pagina Inicial</a></li>
                            </ul>                        
                        </div>
                    </div>
                    
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-menu">
                            <h2 class="footer-wid-title">D�vidas</h2>
                            <ul>
                                <li><a href="#">Atendimento</a></li>
                                <li><a href="#">Troca e devolu��o</a></li>
                                <li><a href="#">Termos de cso</a></li>
                                <li><a href="#">Termos e condi��es de compra e venda de produtos</a></li>
                                <li><a href="#">Procon - SP</a></li>
                            </ul>                        
                        </div>
                    </div>
                    
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-newsletter">
                            <h2 class="footer-wid-title">Novidades</h2>
                            <p>Registe-se e obtenha ofertas exclusivas que voc� n�o vai encontrar em outro lugar, direto para sua caixa de entrada !</p>
                            <div class="newsletter-form">
                                <form action="#">
                                    <input type="email" placeholder="Digite seu email !">
                                    <input type="submit" value="Registrar">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End footer top area -->
        
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="copyright">
                            <p>&copy; 2015 WeGet. Todos os diretos reservados. <i class="fa fa-heart"></i></p>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="footer-card-icon">
                            <i class="fa fa-cc-mastercard"></i>
                            <i class="fa fa-cc-paypal"></i>
                            <i class="fa fa-cc-visa"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End footer bottom area -->
       
        <!-- Latest jQuery form server -->
        <script src="https://code.jquery.com/jquery.min.js"></script>
        
        <!-- Bootstrap JS form CDN -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        
        <!-- jQuery sticky menu -->
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        
        <!-- jQuery easing -->
        <script src="js/jquery.easing.1.3.min.js"></script>
        
        <!-- Main Script -->
        <script src="js/main.js"></script>
    </body>
</html>
