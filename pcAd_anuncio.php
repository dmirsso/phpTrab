<!doctype html>
<html lang="pt-br">
<head>
       <!-- PADRAO -->
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>WeGet</title>
            <link rel="stylesheet" href="css/frmBuscar.css">
            <link rel="stylesheet" href="css/custom.css">
            <script src="js/pcAdmin.js"></script>
        
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

        <!-- MENU VERTICAL -->
            <link rel="stylesheet" href="css/styles_MenuVertical.css">
            <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
            <script src="js/script_MenuVertical.js"></script>
        
        <!-- CARREGAR CONTEUDO EXTERNO-->
            <script src="js/jquery-1.11.3.min.js"></script>
</head>
<body>
                <div class="box">
                    <figure>
                      <img src="img/prodSemFoto.png" alt="Imagem deve possuir as dimenções 430 x 550" width="450" height="300" id="imgPcAdmin">
                    </figure>   
                                             
                    <p id="billing_first_name_field" class="form-row form-row-first validate-required">
                        <label class="" for="billing_first_name">
                            <abbr title="Este campo é obrigatório. Selecione a imagem que você deseja enviar. Extenção suportada: png, jpg ou jpge. Tamanho: 430 x 550 " class="required">
                                <input type="file" value="" id="billing_first_name" name="billing_first_name" class="input-text ">
                            </abbr>
                        </label>
                    </p>
                </div>
                
                <!--    Conteúdo Dinâmico-->
                <div class="box">      
                    <form enctype="multipart/form-data" action="confirmaCadAnuncio.php" class="checkout" method="post" name="checkout">
                        <div id="customer_details" class="col2-set">                                       
                            <div class="col-1">
                                <div class="woocommerce-billing-fields">
                                    <p id="billing_last_name_field" class="form-row form-row-last validate-required">
                                        <label class="" for="billing_last_name">
                                            * Texto Anuncio
                                            <abbr title="Este campo é obrigatório. Coloque o nome do produto " class="required">
                                                <img src="img/help.png" id="imgFrmCadastro">
                                            </abbr>
                                        </label>
                                        <input type="text" value="" placeholder="Nome do produto" id="billing_text" name="billing_text" class="input-text " required>
                                    </p>
    
                                    <p id="billing_last_name_field" class="form-row form-row-last validate-required">
                                        <label class="" for="billing_last_name">
                                            * Valor Anuncio
                                            <abbr title="Este campo é obrigatório. Informe as descrições tecnicas do produto" class="required">
                                                <img src="img/help.png" id="imgFrmCadastro">
                                            </abbr>
                                        </label>
                                        <input type="text" value="" placeholder="Descrições tecnicas do produto" id="billing_valor_anuncio" name="billing_valor_anuncio" class="input-text " required>
                                    </p> 
    
                                    <p id="billing_last_name_field" class="form-row form-row-last validate-required">
                                        <label class="" for="billing_last_name">
                                            * Imagem
                                            <abbr title="Este campo é obrigatório. Informe a quantidade disponivel" class="required">
                                                <img src="img/help.png" id="imgFrmCadastro">
                                            </abbr>
                                        </label>
                                        <input type="text" value="" placeholder="Quantidade disponivel" id="billing_imagem" name="billing_imagem" class="input-text " required>
                                    </p> 
    
                                    <p id="billing_last_name_field" class="form-row form-row-last validate-required">
                                        <label class="" for="billing_last_name">
                                            * Data Inicio do Anuncio
                                            <abbr title="Este campo é obrigatório. Informe o valor de venda do produto" class="required">
                                                <img src="img/help.png" id="imgFrmCadastro">
                                            </abbr>
                                        </label>
                                        <input type="text" value="" placeholder="Valor de venda" id="billing_inicio" name="billing_inicio" class="input-text " required>
                                    </p>
                                    
									<p id="billing_last_name_field" class="form-row form-row-last validate-required">
                                        <label class="" for="billing_last_name">
                                            * Data Termino do Anuncio
                                            <abbr title="Este campo é obrigatório. Informe o valor de venda do produto" class="required">
                                                <img src="img/help.png" id="imgFrmCadastro">
                                            </abbr>
                                        </label>
                                        <input type="text" value="" placeholder="Valor de venda" id="billing_fim" name="billing_fim" class="input-text " required>
                                    </p>
									
									<p id="billing_last_name_field" class="form-row form-row-last validate-required">
                                        <label class="" for="billing_last_name">
                                            * Quantidade Minima de Participantes
                                            <abbr title="Este campo é obrigatório. Informe o valor de venda do produto" class="required">
                                                <img src="img/help.png" id="imgFrmCadastro">
                                            </abbr>
                                        </label>
                                        <input type="text" value="" placeholder="Valor de venda" id="billing_qtde_min" name="billing_qtde_min" class="input-text " required>
                                    </p>
									
									<p id="billing_last_name_field" class="form-row form-row-last validate-required">
                                        <label class="" for="billing_last_name">
                                            * Quantidade Maxima de Participantes
                                            <abbr title="Este campo é obrigatório. Informe o valor de venda do produto" class="required">
                                                <img src="img/help.png" id="imgFrmCadastro">
                                            </abbr>
                                        </label>
                                        <input type="text" value="" placeholder="Valor de venda" id="billing_qtde_max" name="billing_qtde_max" class="input-text " required>
                                    </p>
                                    <!--<p>
                                      <label class="" for="billing_last_name">
                                        Anunciar Produto?
                                        <br>
                                        <input type="radio" name="btnAnuncio" value="sim" >SIM
                                        <br>
                                        <input type="radio" name="btnAnuncio" value="nao" checked>NÃO
                                      </label>
                                    </p>-->
                                </div>  
                            </div>
                        </div>       
						<div class="btnFimCompra" id="btnFimCompra">
							<input type="submit" data-value="Place order" value="Editar" name="Editar Produto" class="button alt">
							<input type="submit" data-value="Place order" value="Salvar" name="Cadastrar Produto" class="button alt">
						</div>
					</form>  
                </div>
            </div>                    
            <div class="clear"></div>
</body>
</html>
