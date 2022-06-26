<?php
        session_start();

        include '../assets/include/config.php';

        if(isset($_POST['email']) && empty($_POST['email']) == false) {
            $email = addslashes($_POST['email']);
            $senha = md5(addslashes($_POST['senha']));

            try {
                $sql = $pdo->query("SELECT * FROM user WHERE user = '$email' AND senha = '$senha' ");

                if($sql->rowCount() > 0) {

                    $UserConected = $sql->fetch();

                    $_SESSION['id'] = $UserConected['id'];

                    header("Location: ./");
                } else {
                    $_SESSION['msg'] = 'Usuário ou Senha Inválidos, tente novamente!';
                }
            } catch(PDOException $e) {
                echo"Falha:".$e->getMessage();   
                             
            }
        }  

?>


<!DOCTYPE html>
<html lang="en" class="html_panel">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>403</title>
    <link rel = "icon" href ="assets/img/cade.png" type = "image/x-icon"> 
    <?php include 'assets/include/css.php'; ?>
</head>
<body>
<div class="container">
    <div class="center_page">
            <div id="restrito">
            <div class="erro_403"><h1><?php if(isset($_SESSION['msg'])){echo'';}else{echo'403';}; ?></h1></div>
            <div class="erro_403"><?php if(isset($_SESSION['msg'])){echo $_SESSION['msg']; unset($_SESSION['msg']);}else{echo'Restrito';}; ?></div>
            <div class="msg"></div>
            </div>
            <div id="login" class="au-card width_au-card">
            </div>
            
    </div>
    <div class="erros">
    <div class="erro_escri"></div>
    <div class="ErrorInfo"></div>
</div>
<div id="modal_load" class="modals_form  hideModal"></div>
<script src='assets/js/jquery.min.js'></script>
<script src='assets/js/log.js'></script>
</div>
</body>
</html>

  