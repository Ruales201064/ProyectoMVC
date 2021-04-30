<?php
      
      include_once('../../model/Model.php');

      $objetose= new ArchivoController();
      
        $codigo= $_POST['est_codigo'];
        $nombre= $_POST['est_nombre'];
       
        $tabl="tblestado";
        $camp="est_codigo,est_nombre"; 

        $valor=$codigo.",'".$nombre."'";

       $res2=$objetose->crearestado($tabl, $camp, $valor);
	  
	  ?>