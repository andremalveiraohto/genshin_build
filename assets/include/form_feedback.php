
<form method="post" class="form_feedback" autocomplete="off" >


  <div class="form-group">
    <input name="nome" type="name" value="" class="form-control" id="form_nome"  placeholder="<?php echo$text_nome?>" required>
  </div>

  <div class="form-group">
    <input name="email" type="email" value="" class="form-control" id="form_email" placeholder="<?php echo$text_email?>" required>
  </div>

  <div class="form-group">
    <textarea name="mensagem" type="text" class="form-control" id="form_msg" placeholder="<?php echo$text_comentario?>" required></textarea>
  </div>
      <div class="stars_rating">
        <div class="star-widget">
          <input type="radio" name="stars" required value="5" id="rate-5">
          <label for="rate-5" class="fas fa-star"></label>
          <input type="radio" name="stars" required value="4" id="rate-4">
          <label for="rate-4" class="fas fa-star"></label>
          <input type="radio" name="stars" required value="3" id="rate-3">
          <label for="rate-3" class="fas fa-star"></label>
          <input type="radio" name="stars" required value="2" id="rate-2">
          <label for="rate-2" class="fas fa-star"></label>
          <input type="radio" name="stars" required value="1" id="rate-1">
          <label for="rate-1" class="fas fa-star"></label>
        </div>
      </div>

      <input name="page" value="<?php if(isset($nome_personagem)){echo$nome_personagem;}else{echo'viajante';}?>" type="hidden">
  <button type="submit" class="btn_modal_white"><?php echo$text_enviar?></button>

</form>



<div class="erros">
<div class="erro_escri"></div>
<div class="ErrorInfo"></div>

</div>


<div id="modal_load" class="modals_form  hideModal"></div>