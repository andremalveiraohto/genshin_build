var restrito = $('#restrito');
var login = document.querySelector('#login');
var title = document.querySelector('title');
$(function(){$(document).keyup(function(keypress){
if(keypress.ctrlKey  &&  keypress.altKey  &&  keypress.keyCode == 13) {
title.innerHTML = 'Login Dash' ;
restrito.css('display', 'none');
login.style.display = 'block';
login.innerHTML = '<div class="width_100"><div class="title_login"><h3 class="title-1">Login Dash</h3></div><form method="post" class="" autocomplete="off" ><div class="form-group"><input name="email" id="autofocus" type="text" value="" class="form-control" id="form_user" placeholder="Usuário" required></div><div class="form-group"><input name="senha" type="password" value="" class="form-control" id="form_senha" placeholder="Senha" required></div><button type="submit" class="margin_25px width_100 au-btn au-btn-load js-load-btn">Entrar</button> </form>  </div>';
$('#autofocus').focus();
} });});
