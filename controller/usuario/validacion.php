<?php 
	
	include_once('../../model/Model.php');	
  $objetose= new ArchivoController();

	$usu_correo=$_POST['usu_correo'];
	$usu_contrasena=$_POST['usu_contrasena'];

	$tabla="tblusuario";
  $campos="usu_correo,usu_contrasena";    
  $where="usu_correo = '$usu_correo' AND usu_contrasena='$usu_contrasena'";
  
 // session_start();
  //$_SESSION['usu_correo']= 'usu_correo';
  //$_SESSION['usu_contrasena']= 'usu_contrasena';

  $respuesta1=$objetose->login($campos,$tabla,$where);


	if(mysqli_num_rows($respuesta1)>0){

    foreach($respuesta1 as $usu){

     
      $_SESSION['usu_nombre1']=$usu['usu_nombre1'];
      $_SESSION['usu_correo']=$usu['usu_correo'];
      $_SESSION['usu_contrasena']=$usu['usu_contrasena'];
     
    }

    header("location:../../web/index.php");
   

    
	}else{

    session_start();
    session_unset();
    session_destroy();
    header("location:../../index.php");

    if(isset($_SESSION['usu_nombre1'])!='')
    {
        
    header("Location:../../index.php");
    }
    
    echo"<script type='text/javascript'> alert ('Error');</script>";
		
	}

 ?>