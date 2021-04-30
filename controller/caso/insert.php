<?php
      
      include_once('../../model/Model.php');

      $objetose= new ArchivoController();

        $caso_num_tramo= $_POST['caso_num_tramo'];
        $caso_descripcion= $_POST['caso_descripcion'];
        $caso_direccion_dano= $_POST['caso_direccion_dano'];
        $caso_ancho= $_POST['caso_ancho'];
        $caso_largo= $_POST['caso_largo'];
        $caso_profundidad= $_POST['caso_profundidad'];
        $caso_foto_dano=$_FILES['caso_foto_dano']['name'];
        $caso_prioridad= $_POST['caso_prioridad'];
        $tblusuario_usu_id= $_POST['tblusuario_usu_id'];
        $tblestado_est_codigo= $_POST['tblestado_est_codigo'];
        $tbltipo_dano_tipo_dano_id= $_POST['tbltipo_dano_tipo_dano_id'];
        
    
        $ruta="../../web/images/".$caso_foto_dano;
        move_uploaded_file($_FILES['caso_foto_dano']['tmp_name'], $ruta);


        $tabl="tblcaso";
        $camp="caso_id,caso_num_tramo,caso_descripcion,caso_direccion_dano,caso_ancho,
        caso_largo,caso_profundidad,caso_foto_dano,caso_prioridad,tblusuario_usu_id,
        tblestado_est_codigo,tbltipo_dano_tipo_dano_id";    
        $valor=$caso_id='caso_id'.",'".$caso_num_tramo."','".$caso_descripcion."','".$caso_direccion_dano."',
        '".$caso_ancho."','".$caso_largo."','".$caso_profundidad."','".$ruta."','".$caso_prioridad."',
        '".$tblusuario_usu_id."','".$tblestado_est_codigo."','".$tbltipo_dano_tipo_dano_id."'";

        $res2=$objetose->crearcaso($tabl,$camp,$valor);   
            
          if($res2){
    
              echo'<script type="text/javascript">
               alert("Registro Exitoso");
               window.location.href="../../view/listar.php";
               </script>';
          
          }else{
          echo "error";
        }		   
         
       
  ?>

