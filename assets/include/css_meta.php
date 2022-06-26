<?php
$protocolo = (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS']=="on") ? "https" : "http");
$url = '://'.$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'].'?'.$_SERVER['QUERY_STRING'];

$for_slide = "SELECT * FROM personagens ";
$for_slide = $pdo->query($for_slide);
$for_slide = $for_slide->fetchAll();

    
?>    
    
    <meta property="og:site_name"        content="<?php echo$name_meta[1]['text'] ?>"> 
   
    <meta property="og:type"             content="<?php echo$name_meta[2]['text'] ?>" />
    <meta property="game:section"        content="<?php echo$name_meta[3]['text'] ?>">
    <meta property="game:tag"            content="<?php echo$name_meta[4]['text']; foreach($for_slide as $persona){ echo $persona['nome'].', ';}echo$name_meta[5]['text'];?>">  

    <meta property="og:url"              content="<?php echo $protocolo.$url;?>" />
    <meta property="og:title"            content="<?php echo$name_meta[6]['text'].' '; echo ucfirst($about_personagem['nome']) ?> | Genshin Impact" />
    <meta property="og:description"      content="<?php echo$name_meta[7]['text'].' '; foreach($for_slide as $persona){ echo $persona['nome'].', ';}?>de Genshin Impact" />
    <meta property="og:image"            content="<?php echo 'assets/img/elements/'.$about_personagem['elemento'].'/persona/'.$about_personagem['nome'].'/avatar.png' ?>" />
      
    <meta name="description"             content="<?php echo$name_meta[7]['text'].' '; foreach($for_slide as $persona){ echo $persona['nome'].', ';}?>de Genshin Impact" />
    <meta name="keywords"                content="<?php echo$name_meta[4]['text']; foreach($for_slide as $persona){ echo $persona['nome'].', ';}echo$name_meta[5]['text'];?>">

    <meta name="theme-color" content="#8493aa">
  	<meta name="apple-mobile-web-app-status-bar-style" content="#8493aa">


    <link rel = "icon" href ="<?php echo'assets/img/IconElement/miniIcon_'.$about_personagem['elemento'].'.png' ?>" type = "image/x-icon"> 
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="<?php echo $font_dir ?>">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style_bg_animated.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.css'>