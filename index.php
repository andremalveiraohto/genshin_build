<?php

session_start();

$url = (isset($_GET['url'])) ? $_GET['url']: '';
$count_barra = substr_count($url, '/');

include 'assets/include/config.php';

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


if(isset($_SESSION['id']) && empty($_SESSION['id']) == false) {
} else {include 'assets/include/count_visit/execute_count.php';}



$dir_root = 'assets/include/pages/';

$home = $dir_root.'home.php';
$dir_template = $dir_root.'template.php' ;
$erro_404 = $dir_root.'error/erro.php'; 

if ( $status_db == true) {
    if(empty($_GET)) {
        if(empty($session_id) and empty($type_user) == 'Administrador'){
            include $home;
        } else {
            /* header("Location: ./home"); */
            include $home;
        }
            
        } else { 

            $urlExt = $url = (isset($_GET['url'])) ? $_GET['url']: '';

            /* var_dump($url); */
            $count_barra = substr_count($url, '/');
            /* $semBarraFinal = rtrim($url, '/'); // remove barra do final de URL*/
            $url = explode('.', $_GET['url']); // separa em string caso possua extensão ou palavra depois de ponto
            $url = array_filter(explode('/', $url[0]));

            $page = $url[0];

            // INCLUDE DA TABELA PERSONAGENS para verificar 
            // se a url enviada via GET existe dentro da tabela
            $check_build = "SELECT * FROM personagens WHERE nome='$page'";
            $check_build = $pdo->query($check_build);
            $check = $check_build->rowCount();

        
            //verifica se a url enviada via GET é um página existente em pages/
            $dir_pages = $dir_root.$page.'.php' ;
            if(file_exists($dir_pages) or $page == 'map'){
                if($count_barra <= 0){
                    if($page == 'map'){
                        include $dir_root.'mapa.php';
                    } else {
                        include $dir_pages;
                    }
                }else {
                    $titleErro = 'Página "/'.$urlExt.'" não encontrada';
                    $codErro = '404';
                    include $erro_404;
                }
            } else {

                    //verifica se o template.php existe
                    if(file_exists($dir_template)){
                        //verifica de a url possui barra        
                       if($count_barra <= 0){

                            //verifica se o nome da build existe na tabela builds
                            if($check > 0){ 
                                include $dir_template;
                            }else {
                                $titleErro = 'Página "/'.$page.'" não encontrada';
                                $codErro = '404';
                                include $erro_404;
                            } 

                       }else {
                            $titleErro = 'Página "/'.$urlExt.'" não encontrada';
                            $codErro = '404';
                            include $erro_404;
                       }
                        
                    } else {
                        $titleErro = 'Template não encontrado';
                        $codErro = '404';
                        include $erro_404;
                    } 
                
            }
        
        


    } 

}
?>

<script>

let fullScreen = localStorage.getItem("fullScreen");

if (typeof fullScreen !== "undefined" && JSON.parse(fullScreen)) {
    document.querySelector('body').classList.remove('fadeIn');
    isFullScreen();
}

</script>
