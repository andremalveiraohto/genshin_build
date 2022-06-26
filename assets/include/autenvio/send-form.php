<?php

include '../config.php';

$nome             = $_POST['nome'];
$email            = $_POST['email'];
$mensagem         = $_POST['mensagem'];
$stars            = $_POST['stars'];

$page             = $_POST['page'];



date_default_timezone_set('America/Rio_Branco');
$dataLocal = date('d/m/Y');
$horaLocal = date('H:i');
		

	$erro_escri = '<script>
	$(".erros .erro_escri").append("<h3>Ocorreu um erro ao enviar seu feedback, tente novamente mais tarde!</h3> <div id=\'more_details\'>Mais Detalhes</div>")
	</script>';
	//POPUP BODY
	$body_top = '<script>

	closeM_for_popUp();closeFeedback();

	setTimeout(function () {
	$(".main_modals_popUp h3").remove(""); $("form")[0].reset();';

	$body_bottom = '$(".modals_popUp").addClass("show_popUp");
	open_modal.play();
	setTimeout(function () { 
	$(".modals_popUp").removeClass("show_popUp"); 
	setTimeout(function () { $("#modals_popUp .main_modals_popUp").remove();}, 5500);
   }, 4000);}, 500);
   
   </script>';



    //=====INSERT DA TABELA FEEDBACK


        if(!empty($nome)){ 
            $table_feedbacks = "INSERT feedbacks SET 
			nome = '$nome', 
			email = '$email ', 
			mensagem = '$mensagem', 
			avaliação = '$stars', 
			data = '$dataLocal',
			hora = '$horaLocal',
			page = '$page' ";

         };

		if ($pdo->query($table_feedbacks)) {	
			
			echo $body_top, 
			'$("#modals_popUp").append(" <div class=\'main_modals_popUp\'><h3>Obrigado pelo seu Feedback Viajante!</h3></div>");',
			$body_bottom ;
		}else{
			echo $erro_escri ;		
		}	
		

