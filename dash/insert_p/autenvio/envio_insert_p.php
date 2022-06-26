<?php 


$nome = $_POST['nome_personagem'];


$inserted = "../../../assets/include/inserted_p/inserted.php";
$file_get_inserted = file_get_contents($inserted); 
$openInserted= fopen($inserted, "a+");
$nome_virg = ','.$nome;


//DITETÓRIO
$html = 'template.php'; //HTML ESTRUTURA DA PÁGINA/TEMPLATE
$newhtml = "../../../$nome.php"; //NOVA ESTRUTURA DA PÁGINA/TEMPLATE

copy($html, $newhtml); //CRIA UMA CÓPIA DO HTML/TEMPLATE
$reading = file_get_contents($newhtml); //LEITURA DO NOVO HTML/TEMPLATE

if( $reading == false)  die('<script>alert("Erro no $html");</script>'); //VERIFICA SE HTML/TEMPLATE EXISTE

    // INFORMAÇÕES DO PERSONAGEM
    if (!empty($_POST['nome_personagem'])) {$reading = str_replace("#nome_personagem#",      $_POST['nome_personagem'] , $reading);} 
    $reading = str_replace("#estrelas#",             $_POST['estrelas'] , $reading); 
    $reading = str_replace("#nome_elemento#",        $_POST['nome_elemento'] , $reading); 
    $reading = str_replace("#arma_utilizada#",       $_POST['arma_utilizada'] , $reading); 
    $reading = str_replace("#aniversario#",          $_POST['aniversario'] , $reading); 
    $reading = str_replace("#afiliacao#",            $_POST['afiliacao'] , $reading); 
    $reading = str_replace("#constelacao#",          $_POST['constelacao'] , $reading); 
    $reading = str_replace("#descricao_personagem#", $_POST['descricao_personagem'] , $reading); 
    $reading = str_replace("#sobre_personagem#",     $_POST['sobre_personagem'] , $reading); 

    // INFORMAÇÕES DAS ARMAS

    //ARMA 1
    $reading = str_replace("#arma_1_nome#",              $_POST['arma_1_nome'] , $reading); 
    $reading = str_replace("#arma_1_genero#",            $_POST['arma_1_genero'] , $reading); 
    $reading = str_replace("#arma_1_beneficio_1#",       $_POST['arma_1_beneficio_1'] , $reading); 
    $reading = str_replace("#arma_1_quantidade_1#",      $_POST['arma_1_quantidade_1'] , $reading); 
    $reading = str_replace("#arma_1_beneficio_2#",       $_POST['arma_1_beneficio_2'] , $reading); 
    $reading = str_replace("#arma_1_quantidade_2#",      $_POST['arma_1_quantidade_2'] , $reading); 
    $reading = str_replace("#arma_1_titulo#",            $_POST['arma_1_titulo'] , $reading);
    $reading = str_replace("#arma_1_descricao#",         $_POST['arma_1_descricao'] , $reading);  
    $reading = str_replace("#arma_1_nv_estrelas#",       $_POST['arma_1_nv_estrelas'] , $reading); 
    $reading = str_replace("#arma_1_nivel#",             $_POST['arma_1_nivel'] , $reading); 
    $reading = str_replace("#arma_1_rank_refinamento#",  $_POST['arma_1_rank_refinamento'] , $reading); 

    //ARMA 2
    $reading = str_replace("#arma_2_nome#",              $_POST['arma_2_nome'] , $reading); 
    $reading = str_replace("#arma_2_genero#",            $_POST['arma_2_genero'] , $reading); 
    $reading = str_replace("#arma_2_beneficio_1#",       $_POST['arma_2_beneficio_1'] , $reading); 
    $reading = str_replace("#arma_2_quantidade_1#",      $_POST['arma_2_quantidade_1'] , $reading); 
    $reading = str_replace("#arma_2_beneficio_2#",       $_POST['arma_2_beneficio_2'] , $reading); 
    $reading = str_replace("#arma_2_quantidade_2#",      $_POST['arma_2_quantidade_2'] , $reading); 
    $reading = str_replace("#arma_2_titulo#",            $_POST['arma_2_titulo'] , $reading);
    $reading = str_replace("#arma_2_descricao#",         $_POST['arma_2_descricao'] , $reading);  
    $reading = str_replace("#arma_2_nv_estrelas#",       $_POST['arma_2_nv_estrelas'] , $reading); 
    $reading = str_replace("#arma_2_nivel#",             $_POST['arma_2_nivel'] , $reading); 
    $reading = str_replace("#arma_2_rank_refinamento#",  $_POST['arma_2_rank_refinamento'] , $reading); 


    // INFORMAÇÕES DAS ARTEFAFTOS
    
    //Primeira Build
    //CONJUNTO 
    $reading = str_replace("#rows_1_nome_conjunto_1#",   $_POST['rows_1_nome_conjunto_1'] , $reading); 
    $reading = str_replace("#rows_1_conjunto_1_2peca#",  $_POST['rows_1_conjunto_1_2peca'] , $reading); 
    $reading = str_replace("#rows_1_conjunto_1_4peca#",  $_POST['rows_1_conjunto_1_4peca'] , $reading); 
    $reading = str_replace("#rows_1_nome_conjunto_2#",   $_POST['rows_1_nome_conjunto_2'] , $reading); 
    $reading = str_replace("#rows_1_conjunto_2_2peca#",  $_POST['rows_1_conjunto_2_2peca'] , $reading); 
    $reading = str_replace("#rows_1_conjunto_2_4peca#",  $_POST['rows_1_conjunto_2_4peca'] , $reading); 


    //ARTEFATO 1 
    $reading = str_replace("#rows_1_nome_artefato_1#",        $_POST['rows_1_nome_artefato_1'] , $reading); 
    $reading = str_replace("#rows_1_beneficio_artefato_1#",   $_POST['rows_1_beneficio_artefato_1'] , $reading); 
    $reading = str_replace("#rows_1_quantidade_artefato_1#",  $_POST['rows_1_quantidade_artefato_1'] , $reading); 
    $reading = str_replace("#rows_1_nv_star_artefato_1#",     $_POST['rows_1_nv_star_artefato_1'] , $reading); 
    $reading = str_replace("#rows_1_nivel_artefato_1#",       $_POST['rows_1_nivel_artefato_1'] , $reading); 
    $reading = str_replace("#rows_1_nome_conj_artefato_1#",   $_POST['rows_1_nome_conj_artefato_1'] , $reading); 

    //ARTEFATO 2 
    $reading = str_replace("#rows_1_nome_artefato_2#",        $_POST['rows_1_nome_artefato_2'] , $reading); 
    $reading = str_replace("#rows_1_beneficio_artefato_2#",   $_POST['rows_1_beneficio_artefato_2'] , $reading); 
    $reading = str_replace("#rows_1_quantidade_artefato_2#",  $_POST['rows_1_quantidade_artefato_2'] , $reading); 
    $reading = str_replace("#rows_1_nv_star_artefato_2#",     $_POST['rows_1_nv_star_artefato_2'] , $reading); 
    $reading = str_replace("#rows_1_nivel_artefato_2#",       $_POST['rows_1_nivel_artefato_2'] , $reading); 
    $reading = str_replace("#rows_1_nome_conj_artefato_2#",   $_POST['rows_1_nome_conj_artefato_2'] , $reading);

    //ARTEFATO 3 
    $reading = str_replace("#rows_1_nome_artefato_3#",        $_POST['rows_1_nome_artefato_3'] , $reading); 
    $reading = str_replace("#rows_1_beneficio_artefato_3#",   $_POST['rows_1_beneficio_artefato_3'] , $reading); 
    $reading = str_replace("#rows_1_quantidade_artefato_3#",  $_POST['rows_1_quantidade_artefato_3'] , $reading); 
    $reading = str_replace("#rows_1_nv_star_artefato_3#",     $_POST['rows_1_nv_star_artefato_3'] , $reading); 
    $reading = str_replace("#rows_1_nivel_artefato_3#",       $_POST['rows_1_nivel_artefato_3'] , $reading); 
    $reading = str_replace("#rows_1_nome_conj_artefato_3#",   $_POST['rows_1_nome_conj_artefato_3'] , $reading);

    //ARTEFATO 4 
    $reading = str_replace("#rows_1_nome_artefato_4#",        $_POST['rows_1_nome_artefato_4'] , $reading); 
    $reading = str_replace("#rows_1_beneficio_artefato_4#",   $_POST['rows_1_beneficio_artefato_4'] , $reading); 
    $reading = str_replace("#rows_1_quantidade_artefato_4#",  $_POST['rows_1_quantidade_artefato_4'] , $reading); 
    $reading = str_replace("#rows_1_nv_star_artefato_4#",     $_POST['rows_1_nv_star_artefato_4'] , $reading); 
    $reading = str_replace("#rows_1_nivel_artefato_4#",       $_POST['rows_1_nivel_artefato_4'] , $reading); 
    $reading = str_replace("#rows_1_nome_conj_artefato_4#",   $_POST['rows_1_nome_conj_artefato_4'] , $reading);

    //ARTEFATO 5 
    $reading = str_replace("#rows_1_nome_artefato_5#",        $_POST['rows_1_nome_artefato_5'] , $reading); 
    $reading = str_replace("#rows_1_beneficio_artefato_5#",   $_POST['rows_1_beneficio_artefato_5'] , $reading); 
    $reading = str_replace("#rows_1_quantidade_artefato_5#",  $_POST['rows_1_quantidade_artefato_5'] , $reading); 
    $reading = str_replace("#rows_1_nv_star_artefato_5#",     $_POST['rows_1_nv_star_artefato_5'] , $reading); 
    $reading = str_replace("#rows_1_nivel_artefato_5#",       $_POST['rows_1_nivel_artefato_5'] , $reading); 
    $reading = str_replace("#rows_1_nome_conj_artefato_5#",   $_POST['rows_1_nome_conj_artefato_5'] , $reading);












    //$insert_sucesso = '<div class=\'modal_alert\'><div><h2>Personagem '.$nome.' inserido com sucesso!</h2><div class=\'btn-center\'><button onclick=\'closeA()\' class=\'btn btn-burlywood\'>OK</button><a href=\'../../'.$nome.'.php\' target=\'_ blank\'><button class=\'btn btn-burlywood\'>Consultar página</button></a></div></div></div>';

    $msg_sucesso = 'Personagem '.$nome.' inserido com sucesso!';
    $btn_page = '<a href=\'../'.$nome.'.php\' target=\'_blank\'><button class=\'btn btn-burlywood\'>Consultar página</button></a>';


    if(file_put_contents($newhtml, $reading)==false){//INSERE OS NOVOS DADOS NO NEW HTML E SALVA
        echo'<script>alert("Erro ao inserir personagem!");</script>';
    } else {


        if (strpos($file_get_inserted, $nome_virg ) !== false) { //verifica se o nome existe, se sim ele substitui
            $file_get_inserted = str_replace($nome_virg, $nome_virg, $file_get_inserted); 
            file_put_contents($inserted, $file_get_inserted);
        } else { //caso não exista o nome ele cria.
        
          fwrite($openInserted, $nome_virg);
          fclose($openInserted);
        }


        echo'<script>
        $("#modal_alert").css("display","");
        $(".alert_ h2").append("'.$msg_sucesso.'");
        $(".btn-center div").append("'.$btn_page.'");
        $(".modals_form_shadow").css("display", "block");
        $(".modals_form_shadow").css("opacity", "1");
        $("#modal_alert").addClass("showModal");
        $("form")[0].reset();
        </script>';
    }

?>