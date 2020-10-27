<?php

    $conexion = mysqli_connect("191.234.184.144", "fzam", "Sth_2020#FZ");
    if (!isset($conexion)) {
        echo "Error al conectar a la base de datos. " . mysqli_error();
        exit();
    }

    $seleccionar_bd = mysqli_select_db($conexion, "mujerartemisa_dw");
    if (!isset($seleccionar_bd)){
		echo "Error al seleccionar la base de datos. " . mysqli_error();
	}
?>