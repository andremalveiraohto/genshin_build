<?php
 session_start();
 include '../../../../../assets/include/config.php';

if ( $status_db == true) {

  $session_id = $_SESSION['id'];

  if(isset($_SESSION['id']) && empty($_SESSION['id']) == false) {
  } else {header("Location: login.php");}

  
  //=====INCLUDE DA TABELA USER
  $users = "SELECT * FROM user WHERE id = '$session_id'";
  $users = $pdo->query($users);
  $user = $users->fetch();

  $user_ID = $user['id'];
  $nome_login = $user['user'];
  $nome_user  = $user['nome'];
  $type_user  = $user['type_user'];
  $user_Img = $user['img'];
  
}


?>

<div class="accountImg">

    <img src="assets/img/users/ID-<?php echo$user_ID ?>/<?php echo$user_Img ?>" alt="">
    <label id="accountEditImg" for="EditImg" class="accountEditImg"><i class="fas fa-camera"></i></label>
    <input visibility="hidden" id="EditImg" type="file" name="img">
    </div>
    <div class="accountData">
    <div class="row margin_l_r_0px">
        <div class="col-sm padding_left_right_5px">
            <label for="">Nome</label>
            <input id="nome" name="nome" type="text" value="<?php echo$nome_user ?>" class="form-control"  placeholder="Nome" required="">
        </div>
        <div class="col-sm padding_left_right_5px">
            <label for="">Função</label>
            <input disabled id="type_user" name="type_user" type="text" value="<?php echo$type_user ?>" class="form-control"  placeholder="<?php echo$type_user ?>" required="">
        </div>
    </div>
    <div class="row margin_l_r_0px">
        <div class="col-sm padding_left_right_5px">
            <label for="">Usuário</label>
            <input id="user" name="user" type="text" value="<?php echo$nome_login ?>" class="form-control"  placeholder="Usuário" required="">
        </div>
        <div class="col-sm padding_left_right_5px">
            <label for="">Nova Senha</label>
            <input id="senha" name="senha" type="text" value="" class="form-control"  placeholder="Digite a nova Senha">
        </div>
    </div>
</div>


<script>

// name input
    var inputFile = document.querySelector('#form_account #EditImg');
  inputFile.addEventListener("change",  function(){

    var nameFile = document.querySelector('#form_account #EditImg').files[0].name;
    document.querySelector("#form_account .return").style.opacity = '1';
    document.querySelector("#form_account .return").innerHTML= nameFile;

  });


</script>