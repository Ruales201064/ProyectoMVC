<?php
      
      include_once('../archivo/ArchivoController.php');

      $objetose= new ArchivoController();
      
      
       
        $est_codigo= $_POST['est_codigo'];
        $est_nombre= $_POST['est_nombre'];
       

    
        $tabl="tblestado";
        $camp="est_codigo='$est_codigo',est_nombre='$est_nombre'";    
        $where="est_codigo='$est_codigo'";
        
       $res2=$objetose->editarestado($tabl,$camp,$where);
       //echo $res2;
?>