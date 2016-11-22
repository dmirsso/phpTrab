<!DOCTYPE html>
<?php
    function __autoload($class_name){
        include_once 'class/' . $class_name . '.class.php';
        //print '<p>'.$class_name.'</p>'; //PARA TESTES
    }
	
	
?>
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
                            <h2>PRODUTOS</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        <div class="single-product-area">
            <div class="zigzag-bottom"></div>
            <div class="container">
                <div class="row">
				<?php
					$hostname = "localhost";
					$user = "root";
					$pass = "123456";
					
					try{
						$conn = new PDO("mysql:host=$hostname;dbname=weget", $user, $pass);
						// set the PDO error mode to exception
						$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
						$sql = "select p.cod_prod, p.descricao_prod, a.valor_anu, a.img_anu from produto p inner join anuncio a on p.cod_prod = a.produto_anu order by p.cod_prod";
						foreach($conn->query($sql) as $row){
							echo '<div class="col-md-3 col-sm-6">
									<div class="single-product">
										<div class="product-f-image">
											<img src="'.$row['img_anu'].'" alt="">
											<div class="product-hover">
												<a href="#" class="add-to-cart-link"><i class="descProd.php"></i> Participar</a>
												<a href="descProd.php" class="view-details-link"><i class="fa fa-link"></i> Detalhes</a>
											</div>
										</div>                             
										<h4><a href="descProd.php?cod='.$row['cod_prod'].'">'.$row['descricao_prod'].'</a></h4>
										<div class="product-carousel-price">
											<ins>R$ '.$row['valor_anu'].'</ins> <del>R$ '.($row['valor_anu'] * 1.18).'</del>
										</div>                      
										<div class="product-option-shop">
											<a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="descProd.php?cod='.$row['cod_prod'].'">Participar</a>
										</div>
									</div>  
								</div>';
						}	
					}
					catch(PDOException $e){
						echo "Error: " . $e->getMessage();
					}
				?>
					
					
                    <!--<div class="col-md-3 col-sm-6">
                        <div class="single-product">
                            <div class="product-f-image">
                                <img src="img/product-1.jpg" alt="">
                                <div class="product-hover">
                                    <a href="#" class="add-to-cart-link"><i class="descProd.php"></i> Participar</a>
                                    <a href="descProd.php" class="view-details-link"><i class="fa fa-link"></i> Detalhes</a>
                                </div>
                            </div>                             
                            <h4><a href="descProd.php">Apple new mac book 2015</a></h4>
                            <div class="product-carousel-price">
                                <ins>R$ 899,00</ins> <del>R$ 999,00</del>
                            </div>                      
                            <div class="product-option-shop">
                                <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="descProd.php">Participar</a>
                            </div>
                        </div>  
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="single-product">
                            <div class="product-f-image">
                                <img src="img/product-2.jpg" alt="">
                                <div class="product-hover">
                                    <a href="#" class="add-to-cart-link"><i class="descProd.php"></i> Participar</a>
                                    <a href="descProd.php" class="view-details-link"><i class="fa fa-link"></i> Detalhes</a>
                                </div>
                            </div>                             
                            <h4><a href="descProd.php">Apple new mac book 2015</a></h4>
                            <div class="product-carousel-price">
                                <ins>R$ 899,00</ins> <del>R$ 999,00</del>
                            </div>                      
                            <div class="product-option-shop">
                                <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="descProd.php">Participar</a>
                            </div>
                        </div>  
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="single-product">
                            <div class="product-f-image">
                                <img src="img/product-3.jpg" alt="">
                                <div class="product-hover">
                                    <a href="#" class="add-to-cart-link"><i class="descProd.php"></i> Participar</a>
                                    <a href="descProd.php" class="view-details-link"><i class="fa fa-link"></i> Detalhes</a>
                                </div>
                            </div>                             
                            <h4><a href="descProd.php">Apple new mac book 2015</a></h4>
                            <div class="product-carousel-price">
                                <ins>R$ 899,00</ins> <del>R$ 999,00</del>
                            </div>                      
                            <div class="product-option-shop">
                                <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="descProd.php">Participar</a>
                            </div>
                        </div>  
                    </div>

                       <div class="col-md-3 col-sm-6">
                        <div class="single-product">
                            <div class="product-f-image">
                                <img src="img/product-4.jpg" alt="">
                                <div class="product-hover">
                                    <a href="#" class="add-to-cart-link"><i class="descProd.php"></i> Participar</a>
                                    <a href="descProd.php" class="view-details-link"><i class="fa fa-link"></i> Detalhes</a>
                                </div>
                            </div>                             
                            <h4><a href="descProd.php">Apple new mac book 2015</a></h4>
                            <div class="product-carousel-price">
                                <ins>R$ 899,00</ins> <del>R$ 999,00</del>
                            </div>                      
                            <div class="product-option-shop">
                                <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="descProd.php">Participar</a>
                            </div>
                        </div>  
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="single-product">
                            <div class="product-f-image">
                                <img src="img/product-1.jpg" alt="">
                                <div class="product-hover">
                                    <a href="#" class="add-to-cart-link"><i class="descProd.php"></i> Participar</a>
                                    <a href="descProd.php" class="view-details-link"><i class="fa fa-link"></i> Detalhes</a>
                                </div>
                            </div>                             
                            <h4><a href="descProd.php">Apple new mac book 2015</a></h4>
                            <div class="product-carousel-price">
                                <ins>R$ 899,00</ins> <del>R$ 999,00</del>
                            </div>                      
                            <div class="product-option-shop">
                                <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="descProd.php">Participar</a>
                            </div>
                        </div>  
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="single-product">
                            <div class="product-f-image">
                                <img src="img/product-2.jpg" alt="">
                                <div class="product-hover">
                                    <a href="#" class="add-to-cart-link"><i class="descProd.php"></i> Participar</a>
                                    <a href="descProd.php" class="view-details-link"><i class="fa fa-link"></i> Detalhes</a>
                                </div>
                            </div>                             
                            <h4><a href="descProd.php">Apple new mac book 2015</a></h4>
                            <div class="product-carousel-price">
                                <ins>R$ 899,00</ins> <del>R$ 999,00</del>
                            </div>                      
                            <div class="product-option-shop">
                                <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="descProd.php">Participar</a>
                            </div>
                        </div>  
                    </div>

                     <div class="col-md-3 col-sm-6">
                        <div class="single-product">
                            <div class="product-f-image">
                                <img src="img/product-3.jpg" alt="">
                                <div class="product-hover">
                                    <a href="#" class="add-to-cart-link"><i class="descProd.php"></i> Participar</a>
                                    <a href="descProd.php" class="view-details-link"><i class="fa fa-link"></i> Detalhes</a>
                                </div>
                            </div>                             
                            <h4><a href="descProd.php">Apple new mac book 2015</a></h4>
                            <div class="product-carousel-price">
                                <ins>R$ 899,00</ins> <del>R$ 999,00</del>
                            </div>                      
                            <div class="product-option-shop">
                                <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="descProd.php">Participar</a>
                            </div>
                        </div>  
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="single-product">
                            <div class="product-f-image">
                                <img src="img/product-4.jpg" alt="">
                                <div class="product-hover">
                                    <a href="#" class="add-to-cart-link"><i class="descProd.php"></i> Participar</a>
                                    <a href="descProd.php" class="view-details-link"><i class="fa fa-link"></i> Detalhes</a>
                                </div>
                            </div>                             
                            <h4><a href="descProd.php">Apple new mac book 2015</a></h4>
                            <div class="product-carousel-price">
                                <ins>R$ 899,00</ins> <del>R$ 999,00</del>
                            </div>                      
                            <div class="product-option-shop">
                                <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="descProd.php">Participar</a>
                            </div>
                        </div>  
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="single-product">
                            <div class="product-f-image">
                                <img src="img/product-1.jpg" alt="">
                                <div class="product-hover">
                                    <a href="#" class="add-to-cart-link"><i class="descProd.php"></i> Participar</a>
                                    <a href="descProd.php" class="view-details-link"><i class="fa fa-link"></i> Detalhes</a>
                                </div>
                            </div>                             
                            <h4><a href="descProd.php">Apple new mac book 2015</a></h4>
                            <div class="product-carousel-price">
                                <ins>R$ 899,00</ins> <del>R$ 999,00</del>
                            </div>                      
                            <div class="product-option-shop">
                                <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="descProd.php">Participar</a>
                            </div>
                        </div>  
                    </div>

                      <div class="col-md-3 col-sm-6">
                        <div class="single-product">
                            <div class="product-f-image">
                                <img src="img/product-2.jpg" alt="">
                                <div class="product-hover">
                                    <a href="#" class="add-to-cart-link"><i class="descProd.php"></i> Participar</a>
                                    <a href="descProd.php" class="view-details-link"><i class="fa fa-link"></i> Detalhes</a>
                                </div>
                            </div>                             
                            <h4><a href="descProd.php">Apple new mac book 2015</a></h4>
                            <div class="product-carousel-price">
                                <ins>R$ 899,00</ins> <del>R$ 999,00</del>
                            </div>                      
                            <div class="product-option-shop">
                                <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="descProd.php">Participar</a>
                            </div>
                        </div>  
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="single-product">
                            <div class="product-f-image">
                                <img src="img/product-3.jpg" alt="">
                                <div class="product-hover">
                                    <a href="#" class="add-to-cart-link"><i class="descProd.php"></i> Participar</a>
                                    <a href="descProd.php" class="view-details-link"><i class="fa fa-link"></i> Detalhes</a>
                                </div>
                            </div>                             
                            <h4><a href="descProd.php">Apple new mac book 2015</a></h4>
                            <div class="product-carousel-price">
                                <ins>R$ 899,00</ins> <del>R$ 999,00</del>
                            </div>                      
                            <div class="product-option-shop">
                                <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="descProd.php">Participar</a>
                            </div>
                        </div>  
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="single-product">
                            <div class="product-f-image">
                                <img src="img/product-4.jpg" alt="">
                                <div class="product-hover">
                                    <a href="#" class="add-to-cart-link"><i class="descProd.php"></i> Participar</a>
                                    <a href="descProd.php" class="view-details-link"><i class="fa fa-link"></i> Detalhes</a>
                                </div>
                            </div>                             
                            <h4><a href="descProd.php">Apple new mac book 2015</a></h4>
                            <div class="product-carousel-price">
                                <ins>R$ 899,00</ins> <del>R$ 999,00</del>
                            </div>                      
                            <div class="product-option-shop">
                                <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="descProd.php">Participar</a>
                            </div>
                        </div>  
                    </div>-->
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-pagination text-center">
                            <nav>
                              <ul class="pagination">
                                <li>
                                  <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                  </a>
                                </li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li>
                                  <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                  </a>
                                </li>
                              </ul>
                            </nav>                        
                        </div>
                    </div>
                </div>
            </div>
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