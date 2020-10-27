<?php
    include_once "conexion.php";
    function quitarEspacios($cadena)
    {
        $cadenaValida = preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $cadena);
        return trim($cadenaValida);
    }

    //nuevo cambio

    $sql = "SELECT user_dni, ID, display_name, user_email, user_telefono FROM mujerartemisa_dw.fd_eob_users;";

    $query = mysqli_query($conexion,$sql);

	foreach ($query as $c => $usuario){
        $rut = trim($usuario['user_dni']);
        $telefono = trim($usuario['user_telefono']);
        $correo = trim($usuario['user_email']);
        $nombreMal = $usuario['display_name'];
        $nombreBien = quitarEspacios($nombreMal);
        $id = $usuario['ID'];
        if($id != 1){
            $sql = "UPDATE mujerartemisa_dw.fd_eob_users SET 
            display_name = UPPER('$nombreBien'), 
            user_email = UPPER('$correo'),
            user_dni = UPPER('$rut'),
            user_telefono = $telefono
            WHERE ID = $id;";
            //mysqli_query($conexion,$sql);
            echo $sql;
            echo "<br>";
        }
    }
?>