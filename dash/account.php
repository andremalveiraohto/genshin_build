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

  }

include 'assets/include/css.php';
?>

<link rel = "icon" href ="assets/img/favicon.webp" type = "image/x-icon"> 
<title>Configurações de Conta</title>

<div class="container">
  <div id="accountBody">
    <form action="" id="form_account" method="POST" enctype="multipart/form-data" autocomplete="off">

      <div class="accountContainer">
        <p style="
          margin-bottom:2rem; 
          font-size:0.9rem;
          ">Iae Viajante, <br> Escolha uma imagem de sua preferência de tamanho no maxímo 800x800.
        </p>
        <div class="accountGrid">
        </div>
        <div class=accountBarBottom>
        <?php
         if(!$type_user == 'Colaborador'){
          echo'<a href="./" class="au-btn au-btn-load js-load-btn" >Voltar</a>';
          };
        ?>
            <div class="return"></div>
            <button type="submit" class="au-btn au-btn-load js-load-btn">Salvar</button>
        </div>
      </div>
      <?php
        if($type_user == 'Colaborador'){
          echo'
          <div class="acessos">
            <div class="title">Seus Acessos</div>
            <a href="../map">Map Inazuma</a>
          </div>';
        };
      ?>
    </form>
    <footer style="
      margin-top:2rem;
      display: flex;
      justify-content: space-between;
      width: 100%;
      max-width: 700px;
      padding: 0 1rem;
      color: #505050;  
    ">
    <span>&copy2021</span>
    <a style="
        color: #505050;  
      "
      target="_blank"
      href="https://instagram.com/genshimpact.ga">@genshimpact.ga
    </a>
    <a href="./exit">Sair</a>

    </footer>


  </div>
  
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

//LOAD GRID
  $(".accountGrid").load('assets/include/load/account/user_grid.php');


  //REQUISIÇÃO AJAX EDIT_PERSONAGEM_DB
  $(function(){
    $('form#form_account').submit(function(){

        var edit_account = $('form#form_account')[0];
        var formdata = new FormData(edit_account);

        $.ajax({
            url: 'assets/include/load/account/edit_account.php',
            type: 'POST',
            data: formdata,
            contentType: false,
            processData: false,
            success: function(data){
                $('.return').html(data);
            }
        });

        return false;
    });
  }); 

</script>