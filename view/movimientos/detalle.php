
<!DOCTYPE html>
<html lang="en">


  <body>
    <!-- Start Page Loading -->
    
  

              
              
              </ul>
            </li>
          </ul>
          <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only">
            <i class="material-icons">menu</i>
          </a>
        </aside>

<br>  

 <?php

   
       include_once('../../model/Model.php');

            $objetose= new ArchivoController();
            $editar_id=$_GET['codigo'];
            $campo="usu_id,usu_nombre1";
            $tbles="tblusuario";  
            $usuario=$objetose->selectuser($campo,$tbles);
          
            $campo="pro_id,pro_nombre";
            $tbles="tblproveedor";  
            $proveedor=$objetose->selectprov($campo,$tbles);
             
            $campos="mov_id,mov_num_factura,mov_concepto,mov_fecha_movimiento,mov_tipo_movimiento,tblusuario_usu_id,tblproveedor_pro_nit,usu_nombre1,pro_nombre";
            $tablas="tblmovimiento,tblusuario,tblproveedor";
            $where=" tblmovimiento.tblusuario_usu_id=tblusuario.usu_id AND tblmovimiento.tblproveedor_pro_nit=tblproveedor.pro_id AND mov_id=$editar_id";
            $res=$objetose->selectedit($campos,$tablas,$where);
            $fila=mysqli_fetch_array($res);

            $res=$objetose->selectedit($campos,$tablas,$where);
            $fila2=mysqli_fetch_array($res);
      


 ?>
                  
                               
                         
<div class="row">
    <div class="col s10 offset-s2">
         <div class="card-panel z-depth-5">
      
    <form  method="POST" id="form_editarMovi">
     
              <h4>Ver Detalle Movimiento</h4>
              <br>
    <div class="contenedor">
        
            
    <div class="row">
            <div class="input-field col s12">
                 <input id="mov_id" type="number" name="mov_id"class="validate"   readonly value="<?php echo $fila['mov_id']?>">
                 <label for="mov_id">Codigo</label>
              </div>

</div>

            
            <div class="row">
            <div class="input-field col s6">
                 <input id="mov_num_factura" type="number" name="mov_num_factura"class="validate" readonly value="<?php echo $fila['mov_num_factura']?>">
                 <label for="factura">Mov Factura</label>
              </div>

              <div class="input-field col s6">
                 <input id="mov_concepto" type="text" name="mov_concepto"class="validate" readonly value="<?php echo $fila['mov_concepto']?>">
                 <label for="concepto">Concepto</label>
              </div>
              
            </div>
            



            <div class="row">
            <div class="input-field col s6">
                 <input id="fecha" type="date" name="mov_fecha_movimiento"class="validate" readonly value="<?php echo $fila['mov_fecha_movimiento']?>" >
                 <label for="fecha">Fecha</label>
              </div>

              <div class="input-field col s6">
                 <input id="Tipo" type="text" name="mov_tipo_movimiento"class="validate"  readonly value="<?php echo $fila['mov_tipo_movimiento']?>" >
                 <label for="Tipo">Tipo Movimiento</label>
              </div>
              
            </div>



            <div class="row">
            <div class="input-field col s6">
                 <input id="fecha" type="text" name="usu_nombre1"class="validate" readonly value="<?php echo $fila['usu_nombre1']?>" >
                 <label for="fecha">Usuario</label>
              </div>

              <div class="input-field col s6">
                 <input id="Tipo" type="text" name="pro_nombre"class="validate"  readonly value="<?php echo $fila['pro_nombre']?>" >
                 <label for="Tipo">Tipo Movimiento</label>
              </div>
              
            </div>
            
               
            
           
                
           
           </form>
      </div>
   </div>
</div>










        
        <section id="content">
          <!--start container-->
          <div class="container">
            <!--card stats start-->
     
          </div>
          <!--end container-->
        </section>
       
      </div>
      
    </div>
    
    <script type="text/javascript" src="../../web/vendors/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../../web/js/funciones.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
       $('#btn_editar22').on('click',function(e){
           e.preventDefault();
           editar_Movi();
       })

      });
      
      </script>


    <script type="text/javascript">
        
        $(document).ready(function(){
       $('select').formSelect();
      });
    </script>
     

    <!--materialize js-->
    <script type="text/javascript" src="../../web/js/materialize.min.js"></script>
    <script type="text/javascript" src="js/materializee.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="../../web/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="../../web/js/plugins.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="../../web/js/custom-script.js"></script>
  </body>
</html>