<?php
	/*-------------------------
	Autor: Wilbert Ek
	Web: wilbertek62.com
	Mail: wilbertek62@gmail.com
	---------------------------*/

	define('DB_HOST','localhost');
	define('DB_USER','kinchily_admini');
	define('DB_PASS','_ts$;Ptmg?Yg');
	define('DB_NAME','kinchily_data_app');
	# conectare la base de datos
    $con=@mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Conexión falló: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
?>

