<?php 
$msg = 'Nenhum conteúdo foi informado!';
$alerta = 'warning';
if(isset($_POST['email']) && !empty($_POST['email'])) {

	$nome = addslashes($_POST['nome']);
	$email = addslashes($_POST['email']);
	$mensagem = addslashes($_POST['message']);

	$to = "junior.marques29@gmail.com"; //Email para que eu possa receber as mensagens
	$subject = "Contato - Site pessoal";
	$body = "Nome: ".$nome."\r\n".
			 "Email: ".$email."\r\n".
			 "Mensagem: ".$mensagem;

	$header = "From:contato@jrdev.com.br"."\r\n".
			  "Reply-To:".$email."\r\n".
			  "X=mailer:PHP/".phpversion();

	if(mail($to, $subject, $body, $header)) {
		$msg = "Email enviado com sucesso.";
		$alerta = 'success';
	} else {
		$msg =  "O Email não pode ser enviado. Por favor, entrar em contato pelo Instagram: @jr.marques_";
		$alerta = 'danger';
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Júnior Marques</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,800|Pacifico|Roboto:400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

</head>
<body>
	<section class="mensagem">
		<div class="center">
			<div class="alert alert-<?php echo $alerta; ?>">
				<?php
					if($alerta == 'success') {
						echo $msg.'<a href="./" class="link"> Retornar a página principal.</a><?php';
					} else {
						echo $msg.'<a href="./#contato" class="link"> Enviar novamente.</a><?php';
					}
				?>
			</div>
			
		</div>
	</section>
</body>
</html>