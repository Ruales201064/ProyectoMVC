<?php
      
      include_once'../archivo/ArchivoController.php';

      $objetose= new ArchivoController();
      
      
        $usu_id= $_POST['usu_id'];
        $usu_documento= $_POST['usu_documento'];
        $usu_nombre1= $_POST['usu_nombre1'];
        $usu_nombre2= $_POST['usu_nombre2'];
        $usu_apellido1= $_POST['usu_apellido1'];
        $usu_apellido2= $_POST['usu_apellido2'];
        $usu_direccion= $_POST['usu_direccion'];
        $usu_telefono= $_POST['usu_telefono'];
        $usu_correo= $_POST['usu_correo'];
        $usu_contrasena= $_POST['usu_contrasena'];
        $tblestado= $_POST['tblestado_est_codigo'];
        $tbltipo_documento= $_POST['tbltipo_documento_tipo_doc_codigo'];
        $tblrol= $_POST['tblrol_rol_codigo'];
        

    
        $tabl="tblusuario";

        $camp="usu_id=$usu_id,usu_documento='$usu_documento',usu_nombre1='$usu_nombre1',usu_nombre2='$usu_nombre2',usu_apellido1='$usu_apellido1',usu_apellido2='$usu_apellido2',usu_direccion='$usu_direccion',usu_telefono='$usu_telefono',usu_correo='$usu_correo',
        usu_contrasena='$usu_contrasena',tblestado_est_codigo='$tblestado',tbltipo_documento_tipo_doc_codigo='$tbltipo_documento',tblrol_rol_codigo='$tblrol'";

        $where="usu_id ='$usu_id'";
        //echo $tabla;
        //echo $campos;
        //echo $valores;

       $res2=$objetose->editarusuario($tabl, $camp, $where);
       //echo $res2;
       
    


  ?>

