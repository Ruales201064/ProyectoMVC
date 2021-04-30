
<!DOCTYPE html>
<html lang="en">

<?php
                include_once('../../view/head.php');
  ?>
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
            $campo="est_codigo,est_nombre";
            $tbles="tblestado";  
            $estado=$objetose->selectestado($campo,$tbles);
          
            $campo="tipo_mat_id,tipo_mat_descripcion";
            $tbles="tbltipo_material";  
            $material=$objetose->selecttmat($campo,$tbles);
             
            $campos="mat_id,mat_nombre,mat_fecha_vencimiento,tblestado_est_codigo,tbltipo_material_tipo_mat_id,est_nombre,tipo_mat_descripcion";
            $tablas="tblmaterial,tblestado,tbltipo_material";
            $where=" tblmaterial.tblestado_est_codigo=tblestado.est_codigo AND tblmaterial.tbltipo_material_tipo_mat_id=tbltipo_material.tipo_mat_id  AND mat_id=$editar_id";

            $res=$objetose->selectedit($campos,$tablas,$where);
            $fila=mysqli_fetch_array($res);

            $res=$objetose->selectedit($campos,$tablas,$where);
            $fila2=mysqli_fetch_array($res);

      


 ?>
                  
                               
                         
<div class="row">
    <div class="col s10 offset-s2">
         <div class="card-panel z-depth-5">
      
    <form  method="POST" id="editar_formM">
     
              <h4>Editar Material</h4>
              <br>
    <div class="contenedor">
        
    <div class="row">
            <div class="input-field col s11">
                 <input id="nombre" type="text" name="mat_id" class="validate"   readonly value="<?php echo $fila['mat_id']?>"   >
                 <label for="documento">Codigo</label>
              </div>

             
              
            </div>



            
            <div class="row">
            <div class="input-field col s6">
                 <input id="nombre" type="text" name="mat_nombre"class="validate"value="<?php echo $fila['mat_nombre']?>" >
                 <label for="documento">Nombre</label>
              </div>

              <div class="input-field col s6">
                 <input id="fecha" type="date" name="mat_fecha_vencimiento"class="validate"  value="<?php echo $fila['mat_fecha_vencimiento']?>">
                 <label for="documento">Fecha</label>
              </div>
              
            </div>
            
               
            
            <div class="row">
             
            
             <div class="input-field col s6">
                <select name="tblestado_est_codigo">
                  
                 <?php  
                   echo"<option value='".$fila['tblestado_est_codigo']."'>".$fila['est_nombre']."</option>";
                while($fila=mysqli_fetch_array($estado)){
          
                                          
                 echo "<option value=".$fila['est_codigo'].">".$fila['est_nombre']."</option>";  

                }
                 ?>
                </select>
            
            </div>



            <div class="input-field col s6">
                <select name="tbltipo_material_tipo_mat_id">
                  
                 <?php  
                  echo"<option value='".$fila2['tbltipo_material_tipo_mat_id']."'>".$fila2['tipo_mat_descripcion']."</option>";
                  while($fila2=mysqli_fetch_array($material)){
            
                                            
                   echo "<option value=".$fila2['tipo_mat_id'].">".$fila2['tipo_mat_descripcion']."</option>";  
  
                  }
                 ?>
                </select>
            
            </div>
            </div>
                
            <button id="btn_editar40"name="btn_editar40"class="btn blue lighten-1" type="submit">Editar
            </button>
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
       $('#btn_editar40').on('click',function(e){
           e.preventDefault();
           editar_mat();
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