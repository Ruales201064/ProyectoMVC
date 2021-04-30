<?php
      
      include_once('../../model/Model.php');

      $objetose= new ArchivoController();

 
      
        $caso_id= $_POST['caso_id'];
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

        
        // if ($foto_nueva !='') {
        //   $foto_vieja=$_POST['foto_vieja'];
          
        //   $ruta="images/".$foto_nueva;
          
        //   move_uploaded_file($_FILES['caso_foto_dano']['tmp_name'],$ruta);
  
        //   unlink($foto_vieja);
        



            $tabl="tblcaso";
            $camp="caso_id=$caso_id,caso_num_tramo=$caso_num_tramo,caso_descripcion='".$caso_descripcion."',
            caso_direccion_dano='".$caso_direccion_dano."',caso_ancho='".$caso_ancho."',caso_largo='".$caso_largo."',
            caso_profundidad='".$caso_profundidad."',caso_foto_dano='".$ruta."',caso_prioridad='".$caso_prioridad."',
            tblusuario_usu_id=$tblusuario_usu_id,tblestado_est_codigo=$tblestado_est_codigo,tbltipo_dano_tipo_dano_id=$tbltipo_dano_tipo_dano_id";    
            $where="caso_id=$caso_id";

          $res2=$objetose->editarcaso($tabl,$camp,$where);
      
          // if($res2){
          //   echo'<script type="text/javascript">
          //     alert("Actualizado Con Exitoso");
          //     window.location.href="../../view/listar.php";
          //     </script>';
          // }else{
          //   echo "Error";
          // }
   

       
         
      
       
      
      
    


  ?>

