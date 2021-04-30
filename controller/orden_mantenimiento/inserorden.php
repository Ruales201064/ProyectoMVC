<?php
      
      
      include_once'../../model/Model.php';

      $objetose= new ArchivoController();
      
      if (isset($_POST['insert2'])){
       
       
        //$ord_man_id= $_POST['ord_man_id'];
        $ord_man_fecha= $_POST['ord_man_fecha'];
        $ord_man_prioridad= $_POST['ord_man_prioridad'];
        $tblusuario_usu_id= $_POST['tblusuario_usu_id'];
        $tblcaso_cas_id= $_POST['tblcaso_cas_id'];
        $tblestado_est_codigo= $_POST['tblestado_est_codigo'];
        
    
        $tabl="tblorden_mantenimiento";
        $camp="ord_man_id,ord_man_fecha,ord_man_prioridad,tblusuario_usu_id,tblcaso_cas_id,tblestado_est_codigo";
          
        $valor=$ord_man_id='ord_man_id'.",'".$ord_man_fecha."','".$ord_man_prioridad."','".$tblusuario_usu_id."','".$tblcaso_cas_id."','".$tblestado_est_codigo."'";
        

        $res1=$objetose->crearorden($tabl,$camp,$valor);
       //echo $res2;
       
      }

  ?>
