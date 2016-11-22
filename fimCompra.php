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
                                    <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">Idioma :</span><span class="value">Português </span><b class="caret"></b></a>
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
        
        <div class="product-big-title-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-bit-title text-center">
                            <h2>FINALIZAR COMPRA</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
		<br/>
        <h3 id="order_review_heading">Confirmação do Pedido</h3>
		
        <div id="order_review" style="position: relative;">
			<form action="sucCompra.php" method="POST">
            <?php
				$hostname = "localhost";
				$user = "root";
				$pass = "123456";
										
				try{
					$conn = new PDO("mysql:host=$hostname;dbname=weget", $user, $pass);
					// set the PDO error mode to exception
					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$sql = "select p.cod_prod, a.cod_anu, p.descricao_prod, a.valor_anu, a.img_anu
								from produto p
								inner join anuncio a on p.cod_prod = a.produto_anu
								WHERE p.cod_prod = ".$_POST['cod'];
								
					foreach($conn->query($sql) as $row){
						$qtde = $_POST['quantity'];
						$valor_anu = $row['valor_anu'];
						$codigo_prod = $row['cod_prod'];
						//$codigo_gru = $row['cod_gru'];
						
						
						echo '<table class="shop_table">
								<thead>
									<tr>
										<th class="product-name">Produto</th>
										<th class="product-total">Total</th>
									</tr>
								</thead>
								
								<tbody>
									<tr class="cart_item">
										<td class="product-name">'.$row['descricao_prod'].'</td>
										<td class="product-total">
											<span class="amount" >
												<input style="border:none;text-align:center;" readonly="readonly" type="text" name="valor_anu" value="'.$valor_anu.'">
											</span>
										</td>
									</tr>
									
									<tr class="cart_item">
										<td class="product-name">Codigo Anuncio</td>
										<td class="product-total">
											<span class="amount" >
												<input style="border:none;text-align:center;" readonly="readonly" type="text" name="anuncio" value="'.$row['cod_anu'].'">
											</span>
										</td>
									</tr>
									
									<tr class="cart_item">
										<td class="product-name">QUANTIDADE</td>
										<td class="product-total">
											<span class="amount" name="quantidade">
												<input style="border:none;text-align:center;" readonly="readonly" type="text" name="quantidade" value="'.$qtde.'">
											</span>
										</td>
									</tr>
								</tbody>
								
								<tfoot>
									<tr class="cart-subtotal">
										<th>Subtotal </th>
										<td>
											<span class="amount" name="total">R$ '.($valor_anu * $qtde).'</span>
										</td>
									</tr>
									<tr class="shipping">
										<th>Valor do Frete </th>
										<td>
											Frete Grátis
											<input type="hidden" class="shipping_method" value="free_shipping" id="shipping_method_0" data-index="0" name="">
										</td>
									</tr>
									<tr class="order-total">
										<th>Valor Total </th>
										<td>
											<strong>
												<span class="amount">R$ '.($valor_anu * $qtde).'</span>
											</strong>
										</td>
									</tr>
								</tfoot>
							</table>
			';
					}	
				}
				catch(PDOException $e){
					echo "Error: " . $e->getMessage();
				}
			
			?>
			
            <div id="payment">
				<h3 id="order_review_heading">FORMA DE PAGAMENTO</h3>
                <ul class="payment_methods methods">
                    <li class="payment_method_bacs">
                        <input type="radio" data-order_button_text="" checked="checked" value="bacs" name="payment_method" class="input-radio" id="payment_method_bacs">
                        <label for="payment_method_bacs">Depósito Bancario </label>
                        <div class="payment_box payment_method_bacs">
                            <p>Faça o pagamento diretamente em nossa conta bancária. Por favor, use o seu ID do pedido como a referência de pagamento . Seu pedido não será enviado até que o valor tenha sido creditado na nossa conta..</p>
                        </div>
                    </li>
                    <li class="payment_method_boleto">
                        <input type="radio" data-order_button_text="" value="cheque" name="payment_method" class="input-radio" id="payment_method_boleto">
                        <label for="payment_method_boleto">Boleto </label>
                        <div style="display:none;" class="payment_box payment_method_boleto">
                            <p></p>
                        </div>
                    </li>
                    <li class="payment_method_paypal">
                        <input type="radio" data-order_button_text="Proceed to PayPal" value="paypal" name="payment_method" class="input-radio" id="payment_method_paypal">
                        <label for="payment_method_paypal">PayPal <img alt="PayPal Acceptance Mark" src="https://www.paypalobjects.com/webstatic/mktg/Logo/AM_mc_vs_ms_ae_UK.png"><a title="What is PayPal?" onclick="javascript:window.open('https://www.paypal.com/gb/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;" class="about_paypal" href="https://www.paypal.com/gb/webapps/mpp/paypal-popup">O que é o PayPal?</a>
                        </label>
                        <div style="display:none;" class="payment_box payment_method_paypal">
                            <p>Pagar via PayPal ; Você também pode pagar com seu cartão de crédito se você não tiver uma conta do PayPal</p>
                        </div>
                    </li>
                </ul>

                <div class="btnFimCompra" id="btnFimCompra">
                    <input type="submit" data-value="Place order" value="Finalizar Compra" name="FinalizaCompra" class="button alt">
                </div>
                <div class="clear"></div>
				<BR/>
            </div>
			</form>
        </div>
 
       <div class="footer-top-area">
            <div class="zigzag-bottom"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-about-us">
                            <h2>We<span>Get</span></h2>
                            <p>WeGet é uma empresa brasileira. É uma das pioneiras no segmento de comércio eletrônico do Brasil, criada em 2015 e hoje é líder neste segmento. Acesse nossas redes sociais e conheça mais sobre nossa empresa.</p>
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
                            <h2 class="footer-wid-title">Navegação </h2>
                            <ul>
                                <li><a href="#">Minha Conta</a></li>
                                <li><a href="#">Histórico de Compra</a></li>
                                <li><a href="#">Perfil</a></li>
                                <li><a href="#">Contato Fornecedor</a></li>
                                <li><a href="#">Pagina Inicial</a></li>
                            </ul>                        
                        </div>
                    </div>
                    
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-menu">
                            <h2 class="footer-wid-title">Dúvidas</h2>
                            <ul>
                                <li><a href="#">Atendimento</a></li>
                                <li><a href="#">Troca e devolução</a></li>
                                <li><a href="#">Termos de cso</a></li>
                                <li><a href="#">Termos e condições de compra e venda de produtos</a></li>
                                <li><a href="#">Procon - SP</a></li>
                            </ul>                        
                        </div>
                    </div>
                    
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-newsletter">
                            <h2 class="footer-wid-title">Novidades</h2>
                            <p>Registe-se e obtenha ofertas exclusivas que você não vai encontrar em outro lugar, direto para sua caixa de entrada !</p>
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