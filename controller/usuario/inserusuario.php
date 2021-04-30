<?php
      
      
      include_once'../../model/Model.php';

      $objetose= new ArchivoController();
      
      if (isset($_POST['insert2'])){
       
       
        $usu_documento= $_POST['usu_documento'];
        $usu_nombre1= $_POST['usu_nombre1'];
        $usu_nombre2= $_POST['usu_nombre2'];
        $usu_apellido1= $_POST['usu_apellido1'];
        $usu_apellido2= $_POST['usu_apellido2'];
        $usu_direccion= $_POST['usu_direccion'];
        $usu_telefono= $_POST['usu_telefono'];
        $usu_correo= $_POST['usu_correo'];
        $usu_contrasena= $_POST['usu_contrasena'];
        $tblestado_est_codigo= $_POST['tblestado_est_codigo'];
        $tbltipo_documento_tipo_doc_codigo= $_POST['tbltipo_documento_tipo_doc_codigo'];
        $tblrol_rol_codigo= $_POST['tblrol_rol_codigo'];
        
    
        $tabl="tblusuario";
        $camp="usu_id,usu_documento,usu_nombre1,usu_nombre2,usu_apellido1, usu_apellido2,usu_direccion,usu_telefono,usu_correo,usu_contrasena,
        tblestado_est_codigo,tbltipo_documento_tipo_doc_codigo,tblrol_rol_codigo";
          
        $valor=$usu_id='usu_id'.",'".$usu_documento."','".$usu_nombre1."','".$usu_nombre2."','".$usu_apellido1."','".$usu_apellido2."','".$usu_direccion."','".$usu_telefono."','".$usu_correo."','".$usu_contrasena."','".$tblestado_est_codigo."','".$tbltipo_documento_tipo_doc_codigo."','".$tblrol_rol_codigo."'";
        

        $res1=$objetose->crearusuario($tabl,$camp,$valor);
       //echo $res2;
       
      }

  ?>
