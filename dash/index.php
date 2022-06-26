<link rel = "icon" href ="assets/img/favicon.webp" type = "image/x-icon"> 
<?php
        session_start();

        $count_barra = 1;

        include '../assets/include/config.php';

        if ( $status_db == true) {

            $session_id = $_SESSION['id'];

            if(isset($_SESSION['id']) && empty($_SESSION['id']) == false) {
            } else {header("Location: login");}

            
            //=====INCLUDE DA TABELA USER
            $users = "SELECT * FROM user WHERE id = '$session_id'";
            $users = $pdo->query($users);
            $user = $users->fetch();

            $user_ID = $user['id'];
            $nome_user = $user['nome'];
            $type_user = $user['type_user'];
            $user_Img = $user['img'];

            if($type_user == 'Admnistrador'){
            include 'assets/include/load/dash.php';  
            } else if($type_user == 'Colaborador'){
                header("Location: ./account");
            }
        }


    
?>



