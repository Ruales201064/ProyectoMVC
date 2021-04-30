<?php 
	
	include_once('../../model/Model.php');
  $objetose= new ArchivoController();

	$usu_correo=$_POST['usu_correo'];
	$usu_contrasena=$_POST['usu_contrasena'];

	$tabla="tblusuario";
  $campos="usu_correo,usu_contrasena";    
  $where="usu_correo = '$usu_correo' AND usu_contrasena='$usu_contrasena'";
  session_start();
  $_SESSION['usu_correo']= 'usu_correo';
  $_SESSION['usu_contrasena']= 'usu_contrasena';

  $respuesta1=$objetose->login($campos,$tabla,$where);

	if(mysqli_num_rows($respuesta1)>0){

    
    header("location:../../web/index.php");
    //echo "<script type='text/javascript'> alert ('Bienvenido Al Sistema');</script>";

	}else{

		session_destroy();
    echo "<script type='text/javascript'> alert ('error De autenticacion');</script>";
		echo"<script>window.open('../../index.php','_self')</script>";
	}

	
 ?>

