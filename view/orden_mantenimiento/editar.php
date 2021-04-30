
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
            $campo="usu_id,usu_nombre1";
            $tbles="tblusuario";  
            $usuario=$objetose->selectuser($campo,$tbles);  
           
            $campo="caso_id,caso_descripcion";
            $tbles="tblcaso";  
            $caso=$objetose->selectcaso($campo,$tbles);
    
            $campo="est_codigo,est_nombre";
            $tbles="tblestado";  
            $tblestado=$objetose->selectestado($campo,$tbles);     
    
             
    
            $ord_man_id=$_GET['ord_man_id'];
    
            $campos="tblorden_mantenimiento.ord_man_id,tblorden_mantenimiento.ord_man_fecha,tblorden_mantenimiento.ord_man_prioridad,tblorden_mantenimiento.tblusuario_usu_id,tblorden_mantenimiento.tblcaso_cas_id,
            tblorden_mantenimiento.tblestado_est_codigo,tblusuario.usu_nombre1,tblcaso.caso_descripcion,tblestado.est_nombre";
      
            $tabla="tblorden_mantenimiento,tblusuario,tblcaso,tblestado";
      
            $where="tblorden_mantenimiento.tblusuario_usu_id=tblusuario.usu_id AND 
            tblorden_mantenimiento.tblcaso_cas_id=tblcaso.caso_id AND
            tblorden_mantenimiento.tblestado_est_codigo=tblestado.est_codigo AND tblorden_mantenimiento.ord_man_id=$ord_man_id";
                 
    
            $respuesta=$objetose->selecteditorden($campos,$tabla,$where);
            
            $row=mysqli_fetch_array($respuesta); 
           
            $respuesta=$objetose->selecteditorden($campos,$tabla,$where);
            
            $fila1=mysqli_fetch_array($respuesta);   
    
            $respuesta=$objetose->selecteditorden($campos,$tabla,$where);
            
            $fila2=mysqli_fetch_array($respuesta);  
      


 ?>
                  
                               
                         
<div class="row">
    <div class="col s10 offset-s2">
         <div class="card-panel z-depth-5">
      
    <form  method="POST" id="form_orden">
     
              <h4>Editar orden de mantenimiento</h4>
              <br>
    <div class="contenedor">
        
            
    <div class="row">
    <div class="input-field col s4">
                  <input name="ord_man_id" type="number" readonly value="<?php echo $row['ord_man_id']?>">
                  <label for="id">Codigo</label>
            </div> 
            
            <div class="input-field col s4">
                  <input name="ord_man_fecha" type="date"  value="<?php echo $row['ord_man_fecha']?>">
                  <label for="fecha">Fecha</label>
            </div>

            <div class="input-field col s4">
               <input name="ord_man_prioridad" type="text" value="<?php echo $row['ord_man_prioridad']?>">
                <label for="prioridad">Prioridad</label> 
            </div>
              
            </div>
          
            



            <div class="row">
            <div class="input-field col s4">
                <select name="tblusuario_usu_id">
                <?php 
               
               echo"<option value='".$fila1['tblusuario_usu_id']."'>".$fila1['usu_nombre1']."</option>";
               while($fila1=mysqli_fetch_array($usuario)){
         
                                         
                echo "<option value=".$fila1['usu_id'].">".$fila1['usu_nombre1']."</option>";
                  
            }   
            ?> 
            </select>
            </div>

            <div class="input-field col s4">
                    <select name="tblcaso_cas_id">
                    <?php 
                        
                        echo"<option value='".$fila2['tblcaso_cas_id']."'>".$fila2['caso_descripcion']."</option>";
                      while($fila2=mysqli_fetch_array($caso)){
                
                                                
                        echo "<option value=".$fila2['caso_id'].">".$fila2['caso_descripcion']."</option>";
                          
                    }
                    ?> 
                    </select>   
              </div>

            <div class="input-field col s4">
                <select name="tblestado_est_codigo">
                    <?php 
                        
                        echo"<option value='".$row['tblestado_est_codigo']."'>".$row['est_nombre']."</option>";
                      while($row=mysqli_fetch_array($tblestado)){
                
                                                
                        echo "<option value=".$row['est_codigo'].">".$row['est_nombre']."</option>";
                          
                    }
                    ?> 
                    </select>
            </div>
         </div>
            <button id="btn_orden"name="btn_orden"class="btn blue lighten-1" type="submit">Editar
            </button>
           </form>
          </div>
   </div>
</div>
       
      </div>
      
    </div>
    
    <script type="text/javascript" src="../../web/vendors/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../../web/js/funciones.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
       $('#btn_orden').on('click',function(e){
           e.preventDefault();
           editarorden_m();
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