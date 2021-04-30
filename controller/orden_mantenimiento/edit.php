<?php
      
      include_once('../archivo/ArchivoController.php');

      $objetose= new ArchivoController();
      
        $ord_man_id= $_POST['ord_man_id'];
        $ord_man_fecha= $_POST['ord_man_fecha'];
        $ord_man_prioridad= $_POST['ord_man_prioridad'];
        $tblusuario_usu_id= $_POST['tblusuario_usu_id'];
        $tblcaso_cas_id= $_POST['tblcaso_cas_id'];
        $tblestado_est_codigo= $_POST['tblestado_est_codigo'];

        $tabl="tblorden_mantenimiento";

        $camp="ord_man_id=$ord_man_id,ord_man_fecha='$ord_man_fecha',ord_man_prioridad='$ord_man_prioridad',tblusuario_usu_id='$tblusuario_usu_id',tblcaso_cas_id='$tblcaso_cas_id',tblestado_est_codigo='$tblestado_est_codigo'";

        $where="ord_man_id='$ord_man_id'";

       $res2=$objetose->editarorden($tabl,$camp,$where);

  ?>

