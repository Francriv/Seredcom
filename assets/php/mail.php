<?php 
	$name = $_POST['name'];
	$email = $_POST['email'];

	
	if(mail('ventas@telefoniayredes.com', $name, $email)){
		echo "<script>alert('Enviado, muchas gracias $name, nos pondremos en contacto contigo');javascript:history.back(-1);</script> ";;
	}else{
		echo "<script>alert('No se ha podido enviar tu correo  $name, intenta de nuevo, si el erroro persiste, Envianos un correo a soporte@telefonicayredes.com');javascript:history.back(-1);</script> ";;
	}
 ?> 
 