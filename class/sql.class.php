<?php
    $username='root';
    $password='root';
    $conn = new PDO('mysql:host=localhost;dbname=weget', $username, $password);       


    //OS SELECTS DEVEM RETORNAR UM OBJETO OU UM ARRAY DE OBJETOS
    //ESTA CLASSE NÃO PODE IMPRIMIR NADA, ISSO SERÁ FEITO NA PÁGINA ONDE O LAYOUT ESTÁ
    //A FUNÇÃO verParticipa NÃO POSSUI UMA CLASSE CORRESPODENTE P/ RETORNO -> VERIFICAR USO PARA VER COMO TRATAR ELA

    function insereParticipa($cdcli,$cdgru,$ativo){
        global $conn;  
        $vsql = 'insert into participa(cliente_par, grupo_par, ativo_par) values(?, ?, ?);'; 
        $stmt = $conn->prepare($vsql);
        $stmt->bindParam(1,$cdcli, PDO::PARAM_INT);
        $stmt->bindParam(2,$cdgru, PDO::PARAM_INT);
        $stmt->bindParam(3,$ativo, PDO::PARAM_STR);
        $stmt->execute();
    }

    function insereFornecedor($cnpj,$nome,$fant,$ende,$ddd,$tele,$emai,$clas,$cida,$cep){
        global $conn;  
        $vsql = 'insert into fornecedor(cnpj_for,nome_for,fantasia_for,endereco_for,ddd_for,telefone_for,email_for,classificacao_for,cidade_for,cep_for) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?); '; 
        $stmt = $conn->prepare($vsql);
        $stmt->bindParam(1,$cnpj, PDO::PARAM_STR);
        $stmt->bindParam(2,$nome, PDO::PARAM_STR);
        $stmt->bindParam(3,$fant, PDO::PARAM_STR);
        $stmt->bindParam(4,$ende, PDO::PARAM_STR);
        $stmt->bindParam(5,$ddd, PDO::PARAM_STR);
        $stmt->bindParam(6,$tele, PDO::PARAM_STR);
        $stmt->bindParam(7,$emai, PDO::PARAM_STR);
        $stmt->bindParam(8,$clas, PDO::PARAM_INT);
        $stmt->bindParam(9,$cida, PDO::PARAM_STR);
        $stmt->bindParam(10,$cep, PDO::PARAM_STR);
        $stmt->execute();
    }    

    function insereAnuncio($texto,$valor,$img,$dtini,$dtfim,$cdfor,$cdpro){
        global $conn;  
        $vsql = 'insert into anuncio(texto_anu,valor_anu,img_anu,data_inicio_anu, data_fim_anu,fornecedor_anu,produto_anu) values(?, ?, ?, ?, ?, ?, ?); '; 
        $stmt = $conn->prepare($vsql);
        $stmt->bindParam(1,$texto, PDO::PARAM_STR);
        $stmt->bindParam(2,$valor, PDO::PARAM_STR);
        $stmt->bindParam(3,$img, PDO::PARAM_STR);
        $stmt->bindParam(4,$dtini, PDO::PARAM_STR);
        $stmt->bindParam(5,$dtfim, PDO::PARAM_STR);
        $stmt->bindParam(6,$cdfor, PDO::PARAM_INT);
        $stmt->bindParam(7,$cdpro, PDO::PARAM_INT);
        $stmt->execute();
    }

    function insereCliente($cpf,$nome,$ende,$tel,$cel,$cid,$nasc,$emai,$cla){
        global $conn;  
        $vsql = 'insert into cliente (cpf_cli,nome_cli,endereco_cli,telefone_cli,celular_cli,cidade_cli,data_nasc_cli,email_cli,classificacao_cli) values(?, ?, ?, ?, ?, ?, ?, ?, ?); '; 
        $stmt = $conn->prepare($vsql);
        $stmt->bindParam(1,$cpf, PDO::PARAM_INT);
        $stmt->bindParam(2,$nome, PDO::PARAM_STR);
        $stmt->bindParam(3,$ende, PDO::PARAM_STR);
        $stmt->bindParam(4,$tel, PDO::PARAM_STR);
        $stmt->bindParam(5,$cel, PDO::PARAM_STR);
        $stmt->bindParam(6,$cid, PDO::PARAM_STR);
        $stmt->bindParam(7,$nasc, PDO::PARAM_STR);
        $stmt->bindParam(8,$emai, PDO::PARAM_INT);
        $stmt->bindParam(9,$cla, PDO::PARAM_STR);
        $stmt->execute();
    }    

    function insereGrupo($qtat,$qtmin,$qtmax,$cdanu){
        global $conn;  
        $vsql = 'insert into grupo(qtde_atual_gru,QTDE_MIN_GRU,QTDE_MAX_GRU,ANUNCIO_GRU) values (?,?,?,?);'; 
        $stmt = $conn->prepare($vsql);
        $stmt->bindParam(1,$qtat, PDO::PARAM_INT);
        $stmt->bindParam(2,$qtmin, PDO::PARAM_STR);
        $stmt->bindParam(3,$qtmax, PDO::PARAM_STR);
        $stmt->bindParam(4,$cdanu, PDO::PARAM_STR);
        $stmt->execute();
    }

    function inserePedido($max,$min,$ped,$gru){
        global $conn;  
        $vsql = 'insert into pedido (QTDE_MAX_PED,QTDE_MIN_PED,ANUNCIO_PED,GRUPO_PED) values (?,?,?,?);'; 
        $stmt = $conn->prepare($vsql);
        $stmt->bindParam(1,$max, PDO::PARAM_INT);
        $stmt->bindParam(2,$min, PDO::PARAM_INT);
        $stmt->bindParam(3,$ped, PDO::PARAM_INT);
        $stmt->bindParam(4,$gru, PDO::PARAM_INT);
        $stmt->execute();
    }

    function inserePagamento($val,$venc,$sta,$gru,$cli){
        global $conn;  
        $vsql = 'insert into pagamento(valor_pag,vencimento_pag,estatus_pag,grupo_pag,cliente_pag) values (?,?,?,?,?);'; 
        $stmt = $conn->prepare($vsql);
        $stmt->bindParam(1,$val, PDO::PARAM_INT);
        $stmt->bindParam(2,$venc, PDO::PARAM_INT);
        $stmt->bindParam(3,$sta, PDO::PARAM_INT);
        $stmt->bindParam(4,$gru, PDO::PARAM_INT);
        $stmt->bindParam(5,$cli, PDO::PARAM_INT);
        $stmt->execute();
    }

    function insereProduto($desc,$qtd,$val){
        global $conn;  
        $vsql = 'insert into produto (descricao_pro,qtde_estoque_pro,preco_pro) values (?,?,?);'; 
        $stmt = $conn->prepare($vsql);
        $stmt->bindParam(1,$desc, PDO::PARAM_STR);
        $stmt->bindParam(2,$qtd, PDO::PARAM_STR);
        $stmt->bindParam(3,$val, PDO::PARAM_STR);
        $stmt->execute();
    }


    function listaClientes(){
        global $conn;  
        $rs = $conn->query("SELECT cpf_cli,nome_cli,telefone_cli,celular_cli,cidade_cli,data_nasc_cli,email_cli,classificacao_cli FROM cliente")->fetchAll();
        if(!$rs){
            print_r($conn->errorInfo());
        }
        foreach ($rs as $reg){
            echo 'Cpf: ' . $reg['cpf_cli'] . '<br />';
            echo 'Nome: ' . $reg['nome_cli'] . '<br/>';
            echo 'Telefone: ' . $reg['telefone_cli'] . '<br/>';
            echo 'Celular: ' . $reg['celular_cli'] . '<br/>';
            echo 'Cidade: ' . $reg['celular_cli'] . '<br/>';
            echo 'Nascimento: ' . $reg['data_nasc_cli'] . '<br/>';
            echo 'Email: ' . $reg['email_cli'] . '<br/>';
            echo 'Classificação: ' . $reg['classificacao_cli'] . '<br/><br/>';
        }
    }

    function listaAnuncios(){
        global $conn;  
        $rs = $conn->query("select texto_anu,valor_anu,img_anu,data_inicio_anu, data_fim_anu,fornecedor_anu,produto_anu from anuncio")->fetchAll();
        if(!$rs){
            print_r($conn->errorInfo());
        }
        foreach ($rs as $reg){
            echo '<br>Anuncio: ' . $reg['texto_anu'] . '<br />';
            echo 'Valor: ' . $reg['valor_anu'] . '<br/>';
            echo 'Imagem: ' . $reg['img_anu'] . '<br/>';
            echo 'Inicio: ' . $reg['data_inicio_anu'] . '<br/>';
            echo 'Fim: ' . $reg['data_fim_anu'] . '<br/>';
            echo 'Fornecedor: ' . $reg['fornecedor_anu'] . '<br/>';
            echo 'Produto: ' . $reg['produto_anu'] . '<br/>';
        }
    }    

    function listaFornecedores(){
        global $conn;  
        $rs = $conn->query("select cnpj_for,nome_for,fantasia_for,endereco_for,ddd_for,telefone_for,email_for,classificacao_for,cidade_for,cep_for from fornecedor")->fetchAll();
        if(!$rs){
            print_r($conn->errorInfo());
        }
        foreach ($rs as $reg){
            echo '<br>CNPJ: ' . $reg['cnpj_for'] . '<br />';
            echo 'Nome: ' . $reg['nome_for'] . '<br/>';
            echo 'Fantasia: ' . $reg['fantasia_for'] . '<br/>';
            echo 'Endereco: ' . $reg['endereco_for'] . '<br/>';
            echo 'ddd: ' . $reg['ddd_for'] . '<br/>';
            echo 'Telefone: ' . $reg['telefone_for'] . '<br/>';
            echo 'Email: ' . $reg['email_for'] . '<br/>';
            echo 'Classificacao: ' . $reg['classificacao_for'] . '<br/>';
            echo 'Cidade: ' . $reg['cidade_for'] . '<br/>';
            echo 'Cep: ' . $reg['cep_for'] . '<br/>';
        }
    }

    function listaProdutos(){
        global $conn;  
        $rs = $conn->query("select descricao_pro,qtde_estoque_pro,preco_pro from produto")->fetchAll();
        if(!$rs){
            print_r($conn->errorInfo());
        }
        foreach ($rs as $reg){
            echo '<br>Descrição: ' . $reg['descricao_pro'] . '<br />';
            echo 'Quantidade: ' . $reg['qtde_estoque_pro'] . '<br/>';
            echo 'Preço: ' . $reg['preco_pro'] . '<br/>';
        }
    }

    function listaGrupos(){
        global $conn;  
        $rs = $conn->query("select qtde_atual_gru,QTDE_MIN_GRU,QTDE_MAX_GRU,ANUNCIO_GRU from grupo")->fetchAll();
        if(!$rs){
            print_r($conn->errorInfo());
        }
        foreach ($rs as $reg){
            echo '<br>Quantidade Atual: ' . $reg['qtde_atual_gru'] . '<br />';
            echo 'Quantidade Minima: ' . $reg['QTDE_MIN_GRU'] . '<br/>';
            echo 'Quantidade Maxima: ' . $reg['QTDE_MAX_GRU'] . '<br/>';
            echo 'Grupo: ' . $reg['ANUNCIO_GRU'] . '<br/>';
        }
    }

    function listaParticipa(){
        global $conn;  
        $rs = $conn->query("select cliente_par,grupo_par,ativo_par from participa")->fetchAll();
        if(!$rs){
            print_r($conn->errorInfo());
        }
        foreach ($rs as $reg){
            echo '<br>Cliente: ' . $reg['cliente_par'] . '<br />';
            echo 'Grupo: ' . $reg['grupo_par'] . '<br/>';
            echo 'Ativo: ' . $reg['ativo_par'] . '<br/>';
        }
    }

    function listaPedidos(){
        global $conn;  
        $rs = $conn->query("select QTDE_MAX_PED,QTDE_MIN_PED,ANUNCIO_PED,GRUPO_PED from pedido")->fetchAll();
        if(!$rs){
            print_r($conn->errorInfo());
        }
        foreach ($rs as $reg){
            echo '<br>Quantidade Maxima: ' . $reg['QTDE_MAX_PED'] . '<br />';
            echo 'Quantidade Minima: ' . $reg['QTDE_MIN_PED'] . '<br/>';
            echo 'Anuncio: ' . $reg['ANUNCIO_PED'] . '<br/>';
            echo 'Grupo: ' . $reg['GRUPO_PED'] . '<br/>';
        }
    }

    function listaPagamento(){
        global $conn;  
        $rs = $conn->query("select valor_pag,vencimento_pag,estatus_pag,grupo_pag,cliente_pag from pagamento")->fetchAll();
        if(!$rs){
            print_r($conn->errorInfo());
        }
        foreach ($rs as $reg){
            echo '<br>Valor: ' . $reg['valor_pag'] . '<br />';
            echo 'Vencimento: ' . $reg['vencimento_pag'] . '<br/>';
            echo 'Status: ' . $reg['estatus_pag'] . '<br/>';
            echo 'Grupo: ' . $reg['grupo_pag'] . '<br/>';
            echo 'Cliente: ' . $reg['cliente_pag'] . '<br/>';
        }
    }

    function alteraProduto($cod,$desc,$qtd,$val){
        global $conn;  
        $vsql = 'update produto set descricao_pro = ? ,qtde_estoque_pro = ? ,preco_pro = ? where cod_pro = ?'; 
        $stmt = $conn->prepare($vsql);
        $stmt->bindParam(1,$desc, PDO::PARAM_STR);
        $stmt->bindParam(2,$qtd, PDO::PARAM_STR);
        $stmt->bindParam(3,$val, PDO::PARAM_STR);
        $stmt->bindParam(4,$cod, PDO::PARAM_STR);
        $stmt->execute();
    }

    function alteraPagamento($cod,$val,$venc,$sta,$gru,$cli){
        global $conn;  
        $vsql = 'update pagamento set valor_pag =? ,vencimento_pag =?,estatus_pag =?,grupo_pag =?,cliente_pag =? where cod_pag =?);'; 
        $stmt = $conn->prepare($vsql);
        $stmt->bindParam(1,$val, PDO::PARAM_INT);
        $stmt->bindParam(2,$venc, PDO::PARAM_INT);
        $stmt->bindParam(3,$sta, PDO::PARAM_INT);
        $stmt->bindParam(4,$gru, PDO::PARAM_INT);
        $stmt->bindParam(5,$cli, PDO::PARAM_INT);
        $stmt->bindParam(6,$cod, PDO::PARAM_INT);
        $stmt->execute();
    }

    function alteraPedido($cod,$max,$min,$ped,$gru){
        global $conn;  
        $vsql = 'update pedido set QTDE_MAX_PED =?,QTDE_MIN_PED =?,ANUNCIO_PED =?,GRUPO_PED =? where cod_ped =?;'; 
        $stmt = $conn->prepare($vsql);
        $stmt->bindParam(1,$max, PDO::PARAM_INT);
        $stmt->bindParam(2,$min, PDO::PARAM_INT);
        $stmt->bindParam(3,$ped, PDO::PARAM_INT);
        $stmt->bindParam(4,$gru, PDO::PARAM_INT);
        $stmt->bindParam(5,$cod, PDO::PARAM_INT);
        $stmt->execute();
    }

    function alteraGrupo($cod,$qtat,$qtmin,$qtmax,$cdanu){
        global $conn;  
        $vsql = 'update grupo set qtde_atual_gru =?,QTDE_MIN_GRU =?,QTDE_MAX_GRU =?,ANUNCIO_GRU =? where cod_gru =?;'; 
        $stmt = $conn->prepare($vsql);
        $stmt->bindParam(1,$qtat, PDO::PARAM_INT);
        $stmt->bindParam(2,$qtmin, PDO::PARAM_STR);
        $stmt->bindParam(3,$qtmax, PDO::PARAM_STR);
        $stmt->bindParam(4,$cdanu, PDO::PARAM_STR);
        $stmt->bindParam(5,$cod, PDO::PARAM_STR);
        $stmt->execute();
    }

    function alteraCliente($cod,$cpf,$nome,$ende,$tel,$cel,$cid,$nasc,$emai,$cla){
        global $conn;  
        $vsql = 'update cliente set cpf_cli =?,nome_cli =?,endereco_cli =?,telefone_cli =?,celular_cli =?,cidade_cli =?,data_nasc_cli =?,email_cli =?,classificacao_cli =? where cod_cli =?';
        $stmt = $conn->prepare($vsql);
        $stmt->bindParam(1,$cpf, PDO::PARAM_INT);
        $stmt->bindParam(2,$nome, PDO::PARAM_STR);
        $stmt->bindParam(3,$ende, PDO::PARAM_STR);
        $stmt->bindParam(4,$tel, PDO::PARAM_STR);
        $stmt->bindParam(5,$cel, PDO::PARAM_STR);
        $stmt->bindParam(6,$cid, PDO::PARAM_STR);
        $stmt->bindParam(7,$nasc, PDO::PARAM_STR);
        $stmt->bindParam(8,$emai, PDO::PARAM_INT);
        $stmt->bindParam(9,$cla, PDO::PARAM_STR);
        $stmt->bindParam(10,$cod, PDO::PARAM_STR);
        $stmt->execute();
    }


    function alteraAnuncio($cod,$texto,$valor,$img,$dtini,$dtfim,$cdfor,$cdpro){
        global $conn;  
        $vsql = 'update anuncio set texto_anu =?,valor_anu =?,img_anu =?,data_inicio_anu =?, data_fim_anu =?,fornecedor_anu =?,produto_anu =? where cod_anu =?';
        $stmt = $conn->prepare($vsql);
        $stmt->bindParam(1,$texto, PDO::PARAM_STR);
        $stmt->bindParam(2,$valor, PDO::PARAM_STR);
        $stmt->bindParam(3,$img, PDO::PARAM_STR);
        $stmt->bindParam(4,$dtini, PDO::PARAM_STR);
        $stmt->bindParam(5,$dtfim, PDO::PARAM_STR);
        $stmt->bindParam(6,$cdfor, PDO::PARAM_INT);
        $stmt->bindParam(7,$cdpro, PDO::PARAM_INT);
        $stmt->bindParam(8,$cod, PDO::PARAM_INT);
        $stmt->execute();
    }

    function alteraFornecedor($cod,$cnpj,$nome,$fant,$ende,$ddd,$tele,$emai,$clas,$cida,$cep){
        global $conn;  
        $vsql = 'update fornecedor set cnpj_for =?,nome_for =?,fantasia_for =?,endereco_for =?,ddd_for =?,telefone_for =?,email_for =?,classificacao_for =?,cidade_for =?,cep_for =? where cod_for =? ; '; 
        $stmt = $conn->prepare($vsql);
        $stmt->bindParam(1,$cnpj, PDO::PARAM_STR);
        $stmt->bindParam(2,$nome, PDO::PARAM_STR);
        $stmt->bindParam(3,$fant, PDO::PARAM_STR);
        $stmt->bindParam(4,$ende, PDO::PARAM_STR);
        $stmt->bindParam(5,$ddd, PDO::PARAM_STR);
        $stmt->bindParam(6,$tele, PDO::PARAM_STR);
        $stmt->bindParam(7,$emai, PDO::PARAM_STR);
        $stmt->bindParam(8,$clas, PDO::PARAM_INT);
        $stmt->bindParam(9,$cida, PDO::PARAM_STR);
        $stmt->bindParam(10,$cep, PDO::PARAM_STR);
        $stmt->bindParam(11,$cod, PDO::PARAM_STR);
        $stmt->execute();
    }    

    function apagaFornecedor($cod){
        global $conn;  
        $vsql = 'delete from fornecedor where cod_for =? ; '; 
        $stmt = $conn->prepare($vsql);
        $stmt->bindParam(1,$cod, PDO::PARAM_STR);
        $stmt->execute();
    }

    function apagaCliente($cod){
        global $conn;  
        $vsql = 'delete from cliente where cod_cli =? ; '; 
        $stmt = $conn->prepare($vsql);
        $stmt->bindParam(1,$cod, PDO::PARAM_STR);
        $stmt->execute();
    }

    function apagaAnuncio($cod){
        global $conn;  
        $vsql = 'delete from anuncio where cod_anu =? ; '; 
        $stmt = $conn->prepare($vsql);
        $stmt->bindParam(1,$cod, PDO::PARAM_STR);
        $stmt->execute();
    }

    function apagaPedido($cod){
        global $conn;  
        $vsql = 'delete from pedido where cod_ped =? ; '; 
        $stmt = $conn->prepare($vsql);
        $stmt->bindParam(1,$cod, PDO::PARAM_STR);
        $stmt->execute();
    }

    function apagaPagamento($cod){
        global $conn;  
        $vsql = 'delete from pagamento where cod_pag=? ; '; 
        $stmt = $conn->prepare($vsql);
        $stmt->bindParam(1,$cod, PDO::PARAM_STR);
        $stmt->execute();
    }

    function apagaGrupo($cod){
        global $conn;  
        $vsql = 'delete from grupo where cod_grupo =? ; '; 
        $stmt = $conn->prepare($vsql);
        $stmt->bindParam(1,$cod, PDO::PARAM_STR);
        $stmt->execute();
    }

    function apagaProduto($cod){
        global $conn;  
        $vsql = 'delete from produto where cod_pro =? ; '; 
        $stmt = $conn->prepare($vsql);
        $stmt->bindParam(1,$cod, PDO::PARAM_STR);
        $stmt->execute();
    }

    function verAnuncio($cod){
        global $conn;
        $vsql = 'select * from anuncio where cod_anu='. $cod .' ; ';
        $rs = $conn->query($vsql)->fetchAll();
        if(!$rs){
            print_r($conn->errorInfo());
        }
        $anun = new anuncio($rs['cod_anu'], $rs['texto_anu'], $rs['valor_anu'], $rs['img_anu'], $rs['data_inicio_anu'], $rs['data_fim_anu'], $rs['fornecedor_anu'], $rs['produto_anu'], $rs['ativo_anu']);
        return $anun;
    }
    
    function verCliente($cod){
        global $conn;
        $vsql = 'select * from cliente where cod_cli='. $cod .' ; ';
        $rs = $conn->query($vsql)->fetchAll();
        if(!$rs){
            print_r($conn->errorInfo());
        }
        $cliente = new cliente($rs['cod_cli'], $rs['cpf_cli'], $rs['nome_cli'], $rs['end_cli'], $rs['tel_cli'], $rs['cel_cli'], $rs['email_cli'], $rs['classificacao_cli'], $rs['cidade_cli'], $rs['cep_cli'], $rs['grupo']);
        return $cliente;
    }
    
    function verFornecedor($cod){
        global $conn;
        $vsql = 'select * from fornecedor where cod_for='. $cod .' ; ';
        $rs = $conn->query($vsql)->fetchAll();
        if(!$rs){
            print_r($conn->errorInfo());
        }
        $fornecedor = new fornecedor($rs['cod_for'], $rs['cnpj_for'], $rs['nome_for'], $rs['fantasia_for'], $rs['end_for'], $rs['tel_for'], $rs['email_for'], $rs['classificacao_for'], $rs['cidade_for'], $rs['cep_for']);
        return $fornecedor;
    }
    
    function verGrupo($cod){
        global $conn;
        $vsql = 'select * from grupo where cod_gru='. $cod .' ; ';
        $rs = $conn->query($vsql)->fetchAll();
        if(!$rs){
            print_r($conn->errorInfo());
        }
        $grupo = new grupo($rs['cod_gru'], $rs['qtdeAtual_gru'], $rs['qtdeMin_gru'], $rs['qtdeMax_gru']);
        return $grupo;
    }
    
    function verPagamento($cod){
        global $conn;
        $vsql = 'select * from grupo where cod_pag='. $cod . ' ; ';
        $rs = $conn->query($vsql)->fetchAll();
        if(!$rs){
            print_r($conn->errorInfo());
        }
        $pagamento = new pagamento($rs['cod_pag'], $rs['valor_pag'], $rs['vencimento_pag'], $rs['pedido_pag'], $rs['grupo_pag'], $rs['cliente_pag']);
        return $pagamento;
    }
    
    /*function verParticipa($cod){
        global $conn;
        $vsql = 'select * from participa where cod='. $cod . ' ; ';
        $rs = $conn->query($vsql)->fetchAll();
        if(!$rs){
            print_r($conn->errorInfo());
        }
        $participa = new ;
        return $participa;
    }*/
    
    function verPedido($cod){
        global $conn;
        $vsql = 'select * from pedido where cod_ped = '. $cod . ' ; ';
        $rs = $conn->query($vsql)->fetchAll();
        if(!$rs){
            print_r($conn->errorInfo());
        }
        $pedido = new pedido($rs['cod_ped'], $rs['qtde_max_ped'], $rs['qtde_min_ped'], $rs['anuncio_ped'], $rs['grupo_ped']);
        return $pedido;
    }
    
    function verProduto($cod){
        global $conn;
        $vsql = 'select * from pedido where cod_prod = '. $cod . ' ; ';
        $rs = $conn->query($vsql)->fetchAll();
        if(!$rs){
            print_r($conn->errorInfo());
        }
        $produto = new produto($rs['cod_prod'], $rs['descricao_prod'], $rs['qtdeEstoque_prod']);
        return $produto;
    }
?>