<?php
      
      include_once'../../model/Model.php';

      $objetose= new ArchivoController();
      
      if (isset($_POST['insert2'])){
       
       
        $pro_nit= $_POST['pro_nit'];
        $pro_razon_social= $_POST['pro_razon_social'];
        $pro_nombre= $_POST['pro_nombre'];
        $pro_direccion= $_POST['pro_direccion'];
        $pro_correo= $_POST['pro_correo'];
        $pro_telefono= $_POST['pro_telefono'];
       

    
        $tabl="tblproveedor";
        $camp=" pro_id,pro_nit , pro_razon_social, pro_nombre, pro_direccion, pro_correo,pro_telefono";    
        $valor=$pro_id='pro_id'.",'".$pro_nit."','".$pro_razon_social."','".$pro_nombre."','".$pro_direccion."','".$pro_correo."','" .$pro_telefono."'";
        //echo $tabla;
        //echo $campos;
        //echo $valores;
      

       $res2=$objetose->crearproveedor($tabl, $camp, $valor);
       //echo $res2;
       
         
      }
       
      
      
    


  ?>



