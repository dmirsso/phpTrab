<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>WeGet</title>
        <link rel="stylesheet" href="css/frmBuscar.css">
        <link rel="stylesheet" href="css/custom.css">

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
                            <li><a href="index.php">Inicio</a></li>
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
                            <h2>Cadastro do Usuário</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>      
        
        <div class="single-product-area">
            <div class="zigzag-bottom"></div>
            <div class="container">
                <div class="row">                    
                    <div class="col-md-8">
                        <div class="product-content-right">
                            <div class="woocommerce">
                                <div class="woocommerce-info">Ja é cadastrado ? <a class="showlogin" data-toggle="collapse" href="#login-form-wrap" aria-expanded="false" aria-controls="login-form-wrap">Clique aqui para realizar o login !</a>
                                </div>

                                <form id="login-form-wrap" class="login collapse" method="post">

                                    <p>Se você já fez compras com a gente antes, por favor , informe seus dados nos quadros abaixo . Se for um novo cliente , por favor realize seu cadastro.</p>

                                    <p class="form-row form-row-first">
                                        <label for="username">Usuário ou Email <span class="required">*</span>
                                        </label>
                                        <input type="text" id="username" name="username" class="input-text" required>
                                    </p>
                                    <p class="form-row form-row-last">
                                        <label for="password">Senha <span class="required">*</span>
                                        </label>
                                        <input type="password" id="password" name="password" class="input-text" required>
                                    </p>
                                    <div class="clear"></div>


                                    <p class="form-row">
                                        <input type="submit" value="Entrar" name="login" class="button">
                                        <label class="inline" for="rememberme"><input type="checkbox" value="forever" id="rememberme" name="rememberme"> Lembre de mim ! </label>
                                    </p>
                                    <p class="lost_password">
                                        <span>Não lembra sua senha?</span>
                                        <a href="#"> Clique aqui !</a>
                                    </p>

                                    <div class="clear"></div>
                                </form>

                                    <form enctype="multipart/form-data" action="confirmaCadastro.php" class="checkout" method="post" name="checkout">
                                        <div id="customer_details" class="col2-set">                                       
                                            <div class="col-1">
                                                <div class="woocommerce-billing-fields">
                                                    <h3>FORMULÁRIO DE CADASTRO</h3>
                                                    <p id="lblPais" class="form-row form-row-wide address-field update_totals_on_change validate-required woocommerce-validated">
                                                        <label class="" for="billing_country">
                                                            * País
                                                            <abbr title="Este campo é obrigatório.Selecione o seu País. Exemplo: 'Brasil'" class="required">
                                                                <img src="img/help.png" id="imgFrmCadastro">
                                                            </abbr>
                                                        </label>
                                                        <select class="country_to_state country_select" id="billing_country" name="billing_country">
                                                            <option value="BR">Brasil</option>
                                                        </select>
                                                    </p>
													
													<p id="billing_cpf_field" class="form-row form-row-first validate-required">
                                                        <label class="" for="billing_cpf_field">
                                                            * CPF
                                                            <abbr title="Este campo é obrigatório.Informe seu primeiro nome. Exemplo: 'João'" class="required">
                                                                <img src="img/help.png" id="imgFrmCadastro">
                                                            </abbr>
                                                        </label>
                                                        <input type="text" value="" placeholder="Digite seu cpf" id="billing_cpf" name="billing_cpf" class="input-text " required>
                                                    </p>
													
                                                    <p id="billing_first_name_field" class="form-row form-row-first validate-required">
                                                        <label class="" for="billing_first_name">
                                                            * Primeiro Nome
                                                            <abbr title="Este campo é obrigatório.Informe seu primeiro nome. Exemplo: 'João'" class="required">
                                                                <img src="img/help.png" id="imgFrmCadastro">
                                                            </abbr>
                                                        </label>
                                                        <input type="text" value="" placeholder="Digite seu primeiro nome" id="billing_first_name" name="billing_nome" class="input-text " required>
                                                    </p>
    
                                                    <p id="billing_last_name_field" class="form-row form-row-last validate-required">
                                                        <label class="" for="billing_last_name">
                                                            * Ultimo Nome
                                                            <abbr title="Este campo é obrigatório.Informe seu ultimo nome. Exemplo: 'da Silva' " class="required">
                                                                <img src="img/help.png" id="imgFrmCadastro">
                                                            </abbr>
                                                        </label>
                                                        <input type="text" value="" placeholder="Digite seu ultimo nome" id="billing_last_name" name="billing_sobrenome" class="input-text " required>
                                                    </p>
													
													<p id="billing_nasc_date_field" class="form-row form-row-last validate-required">
                                                        <label class="" for="billing_nasc_date">
                                                            * Data Nascimento (yyyy-dd-MM)
                                                            <abbr title="Este campo é obrigatório.Informe seu ultimo nome. Exemplo: 'da Silva' " class="required">
                                                                <img src="img/help.png" id="imgFrmCadastro">
                                                            </abbr>
                                                        </label>
                                                        <input type="text" value="" placeholder="Digite a data de seu aniversario" id="billing_nasc_date" name="billing_dataNasc" class="input-text " required>
                                                    </p>
                                                    
                                                    <div class="clear"></div>
    
                                                    <p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
                                                    <label class="" for="billing_address_1">
                                                        * Endereço 
                                                        <abbr title="Este campo é obrigatório.Informe o seu endereço. Exemplo: 'Rua: Josá Andorinha Cunha , 565'" class="required">
                                                            <img src="img/help.png" id="imgFrmCadastro">
                                                        </abbr>
                                                    </label>
                                                    <input type="text" value="" placeholder="Digite seu endereço" id="billing_address_1" name="billing_endereco" class="input-text ">
                                                </p>
												
												<p id="billing_address_2_field" class="form-row form-row-wide address-field validate-required">
                                                    <label class="" for="billing_address_2">
                                                        * Bairro 
                                                        <abbr title="Este campo é obrigatório.Informe o seu bairro. Exemplo: 'Josá Andorinha Cunha'" class="required">
                                                            <img src="img/help.png" id="imgFrmCadastro">
                                                        </abbr>
                                                    </label>
                                                    <input type="text" value="" placeholder="Digite seu bairro" id="billing_address_2" name="billing_bairro" class="input-text ">
                                                </p>

                                                <p id="billing_address_3_field" class="form-row form-row-wide address-field">
                                                    <label class="" for="billing_address_3">
                                                        Complemento
                                                        <abbr title="Este campo é opcional. Informe o tipo de lugar que você mora. Exemplo: 'Casa, Fundo, Apartamento'" class="required">
                                                            <img src="img/help.png" id="imgFrmCadastro">
                                                        </abbr>
                                                    </label>
                                                    <input type="text" value="" placeholder="Apartamento, fundo, casa, etc." id="billing_address_3" name="billing_complemento" class="input-text ">
                                                </p>
    
                                                    <p id="billing_city_field" class="form-row form-row-wide address-field validate-required" data-o_class="form-row form-row-wide address-field validate-required">
                                                        <label class="" for="billing_city">
                                                            * Cidade
                                                            <abbr title="Este campo é obrigatório.Informe sua cidade. Exemplo: 'Franca'" class="required">
                                                                <img src="img/help.png" id="imgFrmCadastro">
                                                            </abbr>
                                                        </label>
                                                        <input type="text" value="" placeholder="Digite nome da sua cidade" id="billing_city" name="billing_cidade" class="input-text " required>
                                                    </p>
    
                                                    <p id="billing_state_field" class="form-row form-row-first address-field validate-state" data-o_class="form-row form-row-first address-field validate-state">
                                                        <label class="" for="billing_state">
                                                            * Estado
                                                            <abbr title="Este campo é obrigatório.Informe seu estado.Exemplo: 'São Paulo'" class="required">
                                                                <img src="img/help.png" id="imgFrmCadastro">
                                                            </abbr>
                                                        </label>
                                                        <input type="text" id="billing_state" name="billing_estado" placeholder="Digite o estado. Ex: 'São Paulo'" value="" class="input-text " required>
                                                    </p>
                                                    
                                                    <div class="clear"></div>
                                                    
                                                    <p id="billing_postcode_field" class="form-row form-row-last address-field validate-required validate-postcode" data-o_class="form-row form-row-last address-field validate-required validate-postcode">
                                                        <label class="" for="billing_postcode">
                                                            * Código Postal
                                                            <abbr title="Este campo é obrigatório.Informe o seu codigo postal. Exemplo: '14500-000'" class="required">
                                                                <img src="img/help.png" id="imgFrmCadastro">
                                                            </abbr>
                                                        </label>
                                                        <input type="text" value="" placeholder="Digite o CEP da sua cidade" id="billing_cep" name="billing_cep" class="input-text " required>
                                                    </p>
    
                                                    <p id="billing_email_field" class="form-row form-row-first validate-required validate-email">
                                                        <label class="" for="billing_email">
                                                            * Email
                                                            <abbr title="Este campo é obrigatório.Informe seu email.Exemplo: 'weget@weget.com.br'" class="required">
                                                                <img src="img/help.png" id="imgFrmCadastro">
                                                            </abbr>
                                                        </label>
                                                        <input type="text" value="" placeholder="Digite seu email. Ex: 'weget@weget.com.br'" id="billing_email" name="billing_email" class="input-text " required>
                                                    </p>
    
                                                    <p id="billing_phone_field" class="form-row form-row-last validate-required validate-phone">
                                                        <label class="" for="billing_telefone">
                                                            * Telefone
                                                            <abbr title="Este campo é obrigatório.Informe seu telefone. Exemplo: '(16)98111-6999'" class="required">
                                                                <img src="img/help.png" id="imgFrmCadastro">
                                                            </abbr>
                                                        </label>
                                                        <input type="text" value="" placeholder="Digite seu telefone. Ex: (16)91111-2222 " id="billing_telefone" name="billing_telefone" class="input-text " required>
                                                    </p>
													
													<p id="billing_mobile_field" class="form-row form-row-last validate-required validate-phone">
                                                        <label class="" for="billing_mobile">
                                                            * Celular
                                                            <abbr title="Este campo é obrigatório.Informe seu telefone. Exemplo: '(16)98111-6999'" class="required">
                                                                <img src="img/help.png" id="imgFrmCadastro">
                                                            </abbr>
                                                        </label>
                                                        <input type="text" value="" placeholder="Digite seu telefone. Ex: (16)91111-2222 " id="billing_celular" name="billing_celular" class="input-text " required>
                                                    </p>
													
                                                    <div class="clear"></div>
    
    
                                                    <div class="create-account">
                                                        <p id="senha" class="form-row validate-required">
                                                            <label class="" for="account_password">
                                                                * Senha
                                                            <abbr title="Este campo é obrigatório.Digite uma senha. Esta senha será utilizado para acessar sua conta. Ela deve conter letras maiúscula ou letras minusculas ou numero ou caracter especial.Exemplo: 'ABCD ou abcd ou Abcd ou @-_'" class="required">
                                                                <img src="img/help.png" id="imgFrmCadastro">
                                                            </abbr>
                                                            </label>
                                                            <input type="password" value="" placeholder="Digite sua senha" id="senha" name="account_senha" class="input-text" required>
                                                        </p>
    
                                                       <p id="confSenha" class="form-row validate-required">
                                                            <label class="" for="account_password">
                                                                * Confirme sua senha
                                                                <abbr title="Este campo é obrigatório.Digite uma senha. Esta senha será utilizado para acessar sua conta. Ela deve conter letras maiúscula ou letras minusculas ou numero ou caracter especial.Exemplo: 'ABCD ou abcd ou Abcd ou @-_'" class="required">
                                                                    <img src="img/help.png" id="imgFrmCadastro">
                                                                </abbr>
                                                            </label>
                                                            <input type="password" value="" placeholder="Confirmação de senha" id="confSenha" name="account_comSenha" class="input-text" required>
                                                        </p>                                                    
                                                        <div class="clear"></div>
                                                        
                                                        <input type="submit" value="Registrar">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                            </div>
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