<?php

include 'assets/include/language/pt_br.php';

$protocolo = (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS']=="on") ? "https" : "http");
$url = '://'.$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'].'?'.$_SERVER['QUERY_STRING'];

//=====INCLUDE DA TABELA PERSONSGENS
$for_slide = "SELECT * FROM personagens ";
$for_slide = $pdo->query($for_slide);
$for_slide = $for_slide->fetchAll();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <meta property="og:site_name"        content="<?php echo$name_meta[1]['text'] ?>"> 
   
    <meta property="og:type"             content="<?php echo$name_meta[2]['text'] ?>" />
    <meta property="game:section"        content="<?php echo$name_meta[3]['text'] ?>">
    <meta property="game:tag"            content="<?php echo$name_meta[4]['text']; foreach($for_slide as $persona){ echo $persona['nome'].', ';}echo$name_meta[5]['text'];?>">  

    <meta property="og:url"              content="<?php echo $protocolo.$url;?>" />
    <meta property="og:title"            content="<?php echo$name_meta[0]['text'] ?>"/>
    <meta property="og:description"      content="<?php echo$name_meta[7]['text'].' '; foreach($for_slide as $persona){ echo $persona['nome'].', ';}?>de Genshin Impact" />
    <meta property="og:image"            content="<?php echo '' ?>" />
      
    <meta name="description"             content="<?php echo$name_meta[7]['text'].' '; foreach($for_slide as $persona){ echo $persona['nome'].', ';}?>de Genshin Impact" />
    <meta name="keywords"                content="<?php echo$name_meta[4]['text']; foreach($for_slide as $persona){ echo $persona['nome'].', ';}echo$name_meta[5]['text'];?>">
    
    <meta name="theme-color" content="#8493aa">
  	<meta name="apple-mobile-web-app-status-bar-style" content="#8493aa">

    <link rel = "icon" href ="assets/img/icons/favicon.png" type = "image/x-icon"> 

    <title><?php echo$name_meta[8]['text']?></title>
    
    <link rel="stylesheet" href="<?php echo $font_dir ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style_zero.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>