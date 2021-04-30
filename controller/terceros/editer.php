<?php
      
      include_once'../archivo/ArchivoController.php';

      $objetose= new ArchivoController();
      
      
        $ter_id= $_POST['ter_id'];


        $ter_num_documento= $_POST['ter_num_documento'];
        $ter_nombre1= $_POST['ter_nombre1'];
        $ter_nombre2= $_POST['ter_nombre2'];
        $ter_apellido1= $_POST['ter_apellido1'];
        $ter_apellido2= $_POST['ter_apellido2'];
        $ter_direccion= $_POST['ter_direccion'];
        $ter_telefono= $_POST['ter_telefono'];
        $ter_correo= $_POST['ter_correo'];
        $tbltipo_documento= $_POST['tbltipo_documento_tipo_doc_codigo'];
    
        $tabl="tbltercero";

        $camp="ter_id=$ter_id,ter_num_documento='$ter_num_documento',ter_nombre1='$ter_nombre1',ter_nombre2='$ter_nombre2',ter_apellido1='$ter_apellido1',ter_apellido2='$ter_apellido2',ter_direccion='$ter_direccion',ter_telefono='$ter_telefono',ter_correo='$ter_correo',tbltipo_documento_tipo_doc_codigo='$tbltipo_documento'";

        $where="ter_id='$ter_id'";

       $res2=$objetose->editarter($tabl,$camp,$where);

 
  ?>



