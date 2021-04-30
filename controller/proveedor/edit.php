<?php
      
      include_once'../archivo/ArchivoController.php';

      $objetose= new ArchivoController();
      
      
       
       $pro_id= $_POST['pro_id'];
        $pro_nit= $_POST['pro_nit'];
        $pro_razon_social= $_POST['pro_razon_social'];
        $pro_nombre= $_POST['pro_nombre'];
        $pro_direccion= $_POST['pro_direccion'];
        $pro_correo= $_POST['pro_correo'];
        $pro_telefono= $_POST['pro_telefono'];
       

    
        $tabl="tblproveedor";
        $camp=" pro_id='$pro_id',pro_nit='$pro_nit' , pro_razon_social='$pro_razon_social', pro_nombre='$pro_nombre', pro_direccion='$pro_direccion', pro_correo='$pro_correo',pro_telefono='$pro_telefono'";    
        $where="pro_id = '$pro_id'";
        //echo $tabla;
        //echo $campos;
        //echo $valores;

       $res2=$objetose->editarproveedor($tabl, $camp, $where);
       //echo $res2;
       
         
      
       
      
      
    


  ?>

