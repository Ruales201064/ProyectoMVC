<?php
      
      include_once'../../model/Model.php';

      $objetose= new ArchivoController();
      
      if (isset($_POST['insertd'])){
       
       
        $tipo_dano_id= $_POST['tipo_dano_id'];
        $tipo_dano_descripcion= $_POST['tipo_dano_descripcion'];

    
        $tabl="tbltipo_dano";
        $camp=" tipo_dano_id,tipo_dano_descripcion ";    
        $valor=$tipo_daño_id='tipo_dano_id'.",'".$tipo_dano_descripcion."'"; 
        //echo $tabla;
        //echo $campos;
        //echo $valores;
      

       $res2=$objetose->creartipod($tabl, $camp, $valor);
       //echo $res2;
       
         
      }
       
      
      
    


  ?>

