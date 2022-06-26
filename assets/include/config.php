<?php

//CONEXÃO COM BANCO DE DADOS PANEL GENSHIN
$dsn = 'mysql:dbname=db_genshin;host=localhost';
$dbuser = 'root';
$dbpassword = '';

try {
    $pdo = new PDO($dsn, $dbuser, $dbpassword, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    $status_db = true;
    
} catch(PDOException $e) {
    $status_db = false;

    $errorPDO = $e->getMessage(); 

    $titleErro = 'Falha ao Estabelecer Conexão com a Base';
    $codErro = '500';

    include 'pages/error/erro.php'; 

}

//____________________________________________________________


if ( $status_db == true) {

    //=====INCLUDE DA TABELA USER
    if(isset($_SESSION['id']) && empty($_SESSION['id']) == false) {
        //=====INCLUDE DA TABELA USER
        $session_id = $_SESSION['id'];
        $users = "SELECT * FROM user WHERE id = '$session_id'";
        $users = $pdo->query($users);
        $user = $users->fetch();
    
        $user_ID = $user['id'];
        $username = $user['user'];
        $nome_user = $user['nome'];
        $type_user = $user['type_user'];
        $user_Img = $user['img'];
    }


    //=====INCLUDE DA TABELA BLOCKS
    $table_block = "SELECT * FROM blocks";
    $table_block = $pdo->query($table_block);
    $block = $table_block->fetchAll();

    //=====INCLUDE DA TABELA FONTS
    $table_fonts = "SELECT * FROM fonts";
    $table_fonts = $pdo->query($table_fonts);
    $fonts = $table_fonts->fetchAll();
    //
    $edit_font = "SELECT * FROM fonts WHERE id = 1";
    $edit_font = $pdo->query($edit_font);
    $edit_font = $edit_font->fetch();
    $font_dir = $edit_font['dir'];


    //=====INCLUDE DA TABELA COUNT_VISIT
    $table_count_visit = "SELECT * FROM count_visit ORDER BY id DESC";
    $table_count_visit = $pdo->query($table_count_visit);
    $count_visit = $table_count_visit->fetch();

    // DATA HOJE e MES
    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    date_default_timezone_set('America/Rio_Branco');
    $mes = utf8_encode(strftime("%B/%Y", strtotime(date('f'))));
    $data_mes = "SELECT * FROM count_visit WHERE Mes = '$mes'";
    $data_mes = $pdo->query($data_mes);

    $hoje = date("d/m/Y");
    $data_hoje = "SELECT * FROM count_visit WHERE Data = '$hoje'";
    $data_hoje = $pdo->query($data_hoje);
    // POR IP
    $ip_user = $_SERVER['REMOTE_ADDR'];
    $ip_user = "SELECT * FROM count_visit WHERE Ip = '$ip_user'";
    $ip_user = $pdo->query($ip_user);
    ///====

    // INCLUDE DA TABELA BUILDS
    $table_builds = "SELECT * FROM builds ";
    $table_builds = $pdo->query($table_builds);
    $builds = $table_builds->fetchAll();

    // INCLUDE DA TABELA PERSONAGENS
    $table_personagens = "SELECT * FROM personagens ORDER BY nome";
    $table_personagens = $pdo->query($table_personagens);
    $personagens = $table_personagens->fetchAll();

    // INCLUDE DA TABELA ARMAS
    $table_armas = "SELECT * FROM armas ";
    $table_armas = $pdo->query($table_armas);
    $armas = $table_armas->fetchAll();

    // INCLUDE DA TABELA CONJUNTOS
    $table_conjuntos = "SELECT * FROM conjuntos ";
    $table_conjuntos = $pdo->query($table_conjuntos);
    $conjuntos = $table_conjuntos->fetchAll();

    // INCLUDE DA TABELA ATRIBUTOS
    $table_attributes = "SELECT * FROM attributes";
    $table_attributes = $pdo->query($table_attributes);
    $attributes = $table_attributes->fetchAll();
    
    // INCLUDE DA TABELA NATIONS
    $table_nations = "SELECT * FROM nations ";
    $table_nations = $pdo->query($table_nations);
    $nations = $table_nations->fetchAll();
    
    // INCLUDE DA TABELA ELEMENTOS
    $table_elementos = "SELECT * FROM elementos ";
    $table_elementos = $pdo->query($table_elementos);
    $elementos = $table_elementos->fetchAll();

    // INCLUDE DA TABELA TIPO_ARMA
    $table_tipo_armas = "SELECT * FROM tipo_armas";
    $table_tipo_armas = $pdo->query($table_tipo_armas);
    $tipo_armas = $table_tipo_armas->fetchAll();

    // INCLUDE DA TABELA CONQUISTAS TITLE
    $table_conqs_title = "SELECT * FROM conquistas_title";
    $table_conqs_title = $pdo->query($table_conqs_title);
    $conqs_title = $table_conqs_title->fetchAll();

    // INCLUDE DA TABELA MAP_MARCADORES
    $table_map_marcadores = "SELECT * FROM map_marcadores";
    $table_map_marcadores = $pdo->query($table_map_marcadores);
    $map_marcadores = $table_map_marcadores->fetchAll();

    // INCLUDE DA TABELA MAP_GRUPOS
    $table_map_grupos = "SELECT * FROM map_grupos ORDER BY grupo"  ;
    $table_map_grupos = $pdo->query($table_map_grupos);
    $map_grupos = $table_map_grupos->fetchAll();

    // INCLUDE DA TABELA MAP_tipoGRUPOS
    $table_map_tipoGrupos = "SELECT * FROM map_tiposgrupos ORDER BY id"  ;
    $table_map_tipoGrupos = $pdo->query($table_map_tipoGrupos);
    $map_tipoGrupos = $table_map_tipoGrupos->fetchAll();





        //=====INCLUDE DA TABELA META
        $name_meta = "SELECT * FROM meta WHERE nome in (
            'title_page', 
            'site_name', 
            'type', 
            'section', 
            'tag_keywords', 
            'tag_keywords2', 
            'title', 
            'descrition',
            'titulo_do_site',
            'subtitulo_do_site',
            'sobre_site',
            'link_site',
            'since_site',
            'bg_menuPaimon',
            'bg_site')";
    
        $name_meta = $pdo->query($name_meta);
        $name_meta = $name_meta->fetchAll();


}


//INCLUDES
//text
include 'language/pt_br.php';



