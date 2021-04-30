<?php
      
      include_once'../../model/Model.php';

      $objetose= new ArchivoController();
      
      if (isset($_POST['insert3'])){
       
       
        $ter_num_documento= $_POST['ter_num_documento'];
        $ter_nombre1= $_POST['ter_nombre1'];
        $ter_nombre2= $_POST['ter_nombre2'];
        $ter_apellido1= $_POST['ter_apellido1'];
        $ter_apellido2= $_POST['ter_apellido2'];
        $ter_direccion= $_POST['ter_direccion'];
        $ter_telefono= $_POST['ter_telefono'];
        $ter_correo= $_POST['ter_correo'];
        $tbltipo_documento_tipo_doc_codigo= $_POST['tbltipo_documento_tipo_doc_codigo'];
    
        $tabl="tbltercero";
        $camp="ter_id,ter_num_documento,ter_nombre1,ter_nombre2,ter_apellido1,ter_apellido2,ter_direccion,ter_telefono,ter_correo,tbltipo_documento_tipo_doc_codigo";    
        $valor=$ter_id='ter_id'.",'".$ter_num_documento."','".$ter_nombre1."','".$ter_nombre2."','".$ter_apellido1."','".$ter_apellido2."','".$ter_direccion."','".$ter_telefono."','".$ter_correo."','".$tbltipo_documento_tipo_doc_codigo."'";

       $res2=$objetose->crearter($tabl,$camp,$valor);
      }
       

  ?>

