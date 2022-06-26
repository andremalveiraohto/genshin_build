<?php

include '../config.php';

$nome             = $_POST['nome'];
$email            = $_POST['email'];
$mensagem         = $_POST['mensagem'];
$stars            = $_POST['stars'];
$assunto          = 'Novo Feedback Builds Genshin';



//  STARS RATING TEMPLATE EMAIL FEEDBACK
$location_stars = '../../../assets/img/icons/starsformail/'.$stars.'_stars.png';
$qstar = array(1=>$location_stars,2=>$location_stars,3=>$location_stars,4=>$location_stars,	5=>$location_stars);
$color_rating = array(1=>'#fd3030',2=>'#fd8f30',3=>'',4=>'#ffcc32',	5=>'#4dfb93');


for ($i=1; $i < $stars; $i++) //

// Lista de Fusos Horários Suportados https://www.php.net/manual/pt_BR/timezones.php
date_default_timezone_set('America/Rio_Branco');
// CRIA UMA VARIAVEL E ARMAZENA A HORA ATUAL DO FUSO-HORÀRIO DEFINIDO (BRASÍLIA)
$dataLocal = date('d/m/Y H:i');
		
		require_once("PHPMailerAutoload.php");
		
		$mail = new PHPMailer();
		$mail->SMTPDebug = 0;
		$mail->SetLanguage("br");
		$mail->IsSMTP(); // Habilita o SMTP 
		$mail->SMTPAuth = true; //Ativa e-mail autenticado
		$mail->Host = 'smtp.mailtrap.io'; //Servidor de envio # verificar qual o host correto com a hospedagem as vezes fica como smtp.
		$mail->Port = '2525'; // Porta de envio
		$mail->SMTPSecure = false;
		$mail->Username = 'f4c0f9c157cb2c'; //e-mail que será autenticado
		$mail->Password = '19ae0961bf6011'; // senha do email
		// ativa o envio de e-mails em HTML, se false, desativa.
		$mail->IsHTML(true); 
		$mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)
		// email do remetente da mensagem
		$mail->From = $email;
		//$mail->SMTPDebug = 2; //mostra erros mais detalhados caso houver
		// nome do remetente do mail
		$mail->FromName = ($nome);
		// Endereço de destino do emaail, ou seja, pra onde você quer que a mensagem do formulário vá?
		//$mail->AddReplyTo($email, $nome);
		$mail->AddAddress("www.carlosandre@gmail.com"); //  para quem será enviada a mensagem
		//$mail->AddCC('email@hotmail.com', 'Nome da pessoa'); // Copia
		//$mail->AddBCC('email@hotmail.com.br', 'Nome da pessoa'); // Cópia Oculta
		// informando no email, o assunto da mensagem
		$mail->Subject = utf8_decode($assunto);
		// Define o texto da mensagem (aceita HTML)


		$mail->Body = file_get_contents("../email_feedback_theme.html");
		$mail->Body = str_replace('#color_rating#', $color_rating[$i]++, $mail->Body);
		$mail->Body = str_replace('#stars#', $qstar[$i]++, $mail->Body);
		$mail->Body = str_replace('#nome#', $nome, $mail->Body);
		$mail->Body = str_replace('#email#', $email, $mail->Body);
		$mail->Body = str_replace('#mensagem#', $mensagem, $mail->Body);

		$mail->Body = str_replace('#data#', $dataLocal, $mail->Body);




		$mail->AltBody = $mail->Body;

		 // ENVIO DO EMAIL
		$enviado = !$mail->Send();
		// Limpa os destinatários e os anexos
		$mail->ClearAllRecipients();
		$mail->ClearAttachments();

		error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
		
		$erros = $mail->ErrorInfo;
		

		$erro_escri = '<script>
		$(".erros .erro_escri").append("<h3>Ocorreu um erro ao enviar seu feedback, tente novamente mais tarde!</h3> <div id=\'more_details\'>Mais Detalhes</div>")
		</script>';



		//POPUP BODY
		$body_top = '<script>closeM_for_popUp();closeFeedback();
		setTimeout(function () {
		$(".main_modals_popUp h3").remove(""); $("form")[0].reset();';

		$body_bottom = '$(".modals_popUp").addClass("show_popUp");
			open_modal.play();
		    setTimeout(function () { 
			$(".modals_popUp").removeClass("show_popUp"); 
			setTimeout(function () { $(".main_modals_popUp h3").remove("")}, 500);
		   }, 2500);}, 900)</script>';


		// verifica se está tudo ok com oa parametros acima, se nao, avisa do erro. Se sim, envia.
			if ($enviado ) {		
			 echo $erro_escri, $erros ;			
			} 
			
			else{
			 echo $body_top, 
			 '$(".main_modals_popUp").append("<h3>Feedback enviado!");',
			 $body_bottom ;
		}	
		
		$mail->ClearAllRecipients();
