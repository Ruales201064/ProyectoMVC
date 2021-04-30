<?php
      
      include_once'../../model/Model.php';

      $objetose= new ArchivoController();
      
      if (isset($_POST['insertd'])){
       
       
        //$tipo_mat_id= $_POST['tipo_mat_id'];
        $tipo_mat_descripcion= $_POST['tipo_mat_descripcion'];

    
        $tabl="tbltipo_material";
        $camp=" tipo_mat_id,tipo_mat_descripcion ";    
        $valor=$tipo_mat_id='tipo_mat_id'.",'".$tipo_mat_descripcion."'"; 
        //echo $tabla;
        //echo $campos;
        //echo $valores;
      

       $res2=$objetose->creartipoM($tabl,$camp,$valor);
       //echo $res2;
       
         
      }
       
      
      
    


  ?>

