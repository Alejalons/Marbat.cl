<?php
if(isset($_POST['submit']))
{

    //variable
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
    $correo = isset($_POST['correo']) ? $_POST['correo'] : false;
    $mensaje = isset($_POST['mensaje']) ? $_POST['mensaje'] : false;

    //debug
    // var_dump($_POST);

    //inicializa array
    $errores = array();

    //condiciones de admision y agrega errores a array
        //validacion Nombre
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/",$nombre))
    {
        $nombre_validado = true;
    }
    else
    {
        $nombre_validado = false;
        array_push($errores, "* El Nombre no es valido intente nuevamente");
    }

        //validacion Correo
    if(!empty($correo) &&  filter_var($correo , FILTER_VALIDATE_EMAIL))
    {
        $email_validado = true;
    }
    else
    {
        $email_validado = false;
        array_push($errores, "* El Correo no es valido intente nuevamente");
    }

        //validacion Mensaje
    if(!empty($mensaje)){
        $email_validado = true;
    }
    else
    {
        $email_validado = false;
        array_push($errores, "* Mensaje no valido intente nuevamente");
    }
    //¡¡FALTA VALIDAR LARGO DE MENSAJE NO DEBE SER INFINITO!!

    if(count($errores) == 0)
    {

    }
    else
    {
        $alerta = '';
        for ($i=0; $i < count($errores) ; $i++) { 
            $alerta .= "<p>".$errores[$i]."</p>";            
        }
        echo "<div class='error-content'><div class='errores'>$alerta</div></div>";
    }
}


?>