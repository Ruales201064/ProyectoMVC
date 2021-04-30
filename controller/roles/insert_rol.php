<?php
      
      include_once'../../model/Model.php';

      $objetose= new ArchivoController();
      
      if (isset($_POST['insert2'])){
       
       
        
        $rol_nombre= $_POST['rol_nombre'];
       

    
        $tabl="tblrol";
        $camp=" rol_codigo , rol_nombre";    
        $valor=$rol_codigo='rol_codigo'.",'".$rol_nombre."'";
        //echo $tabla;
        //echo $campos;
        //echo $valores;

       $res2=$objetose->crearrol($tabl, $camp, $valor);
       //echo $res2;
       
         
      }
	  
	  ?>