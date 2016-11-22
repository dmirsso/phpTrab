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
		<?php
			$cpf = $_POST['billing_cpf'];;
			$nome = $_POST['billing_nome'];
			$sobrenome = $_POST['billing_sobrenome'];
			$end = $_POST['billing_endereco'];
			$bairro = $_POST['billing_bairro'];
			$compl = $_POST['billing_complemento'];
			$cidade = $_POST['billing_cidade'];
			$estado = $_POST['billing_estado'];
			$cep = $_POST['billing_cep'];
			$tel = $_POST['billing_telefone'];
			$cel = $_POST['billing_celular'];
			$dataNasc = $_POST['billing_dataNasc'];
			$email = $_POST['billing_email'];
			$senha = $_POST['account_senha'];
			
			$hostname = "localhost";
			$user = "root";
			$pass = "123456";

			try {
				$conn = new PDO("mysql:host=$hostname;dbname=weget", $user, $pass);
				// set the PDO error mode to exception
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$sql = "INSERT INTO CLIENTE (
							CPF_CLI,
							NOME_CLI,
							SOBRENOME_CLI,
							END_CLI,
							BAIRRO_CLI,
							COMPL_CLI,
							ESTADO_FOR,
							TEL_CLI,
							CEL_CLI,
							CIDADE_CLI,
							CEP_CLI,
							DATA_NASC_CLI,
							EMAIL_CLI,
							SENHA)
						VALUES (
							'$cpf',
							'$nome',
							'$sobrenome',
							'$end',
							'$bairro',
							'$compl',
							'$estado',
							'$tel',
							'$cel',
							'$cidade',
							'$cep',
							'$dataNasc',
							'$email',
							'$senha')";
				// use exec() because no results are returned
				$conn->exec($sql);

				echo "New record created successfully";
				}
			catch(PDOException $e)
				{
				echo $sql_par . "<br>" . $e->getMessage();
				}

			$conn = null;
		?>
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
