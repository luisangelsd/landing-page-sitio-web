<?php 

// Guardamos los datos que resivimos por el metodo POST y las guardamos en variables
$nombre = $_POST['form_nombre'];
$correo =  $_POST['form_correo'];
$telefono=  $_POST['form_telefono'];
$mensaje =  $_POST['form_mensaje'];
$interes = $_POST['form_interes'];
$hosting = $_POST['form_hosting'];


$mensaje_completo="Datos Recolectados\n "
."\n Nombre: ".$nombre
."\n Correo: ".$correo
."\n Teléfono: ".$telefono
."\n Interes: ".$interes
."\n Hosting: ".$hosting
."\n Mensaje: ".$mensaje;


 //-- Preparamos los headers
$para="sandovalguichoo@gmail.com";                            // Añade el correo en el cual recibiras la información, puede ser cualquiera
$subject="¡Felicidades, tienes un nuevo mensaje!";          // Añade un mensaje como encabezado                                   
$headers = "From: Info@sandovalguicho.com\r\n";             // Coloca un correo que lleve la extención de tu dominio, si no tienes un creo inventa uno, pero tiene que tener la extención de tu dominio


//-- Enviamos y validamos si existe algun error
    if( mail($para, $subject, $mensaje_completo, $headers) ){
            header("Location: https://sandovalguicho.com/cotizar-sitio-web-gracias/");          //-- Coloca la url de destino en caso de que el formulario se envie con exito
        }else{
            header("Location: https://sandovalguicho.com/cotizar-sitio-web/");                 //-- Coloca la url de destino en caso de que el formulario no pueda ser enviado
    }

?>










