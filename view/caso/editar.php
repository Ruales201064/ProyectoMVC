
<!DOCTYPE html>
<html lang="en">

<?php
                include_once('../../view/head.php');
  ?>
  <body>
    <!-- Start Page Loading -->
    
          
          <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only">
            <i class="material-icons">menu</i>
          </a>
        </aside>

<br>  

 <?php

   
       include_once('../../model/Model.php');

            $objetose= new ArchivoController();

            $caso_id=$_GET["caso_id"];
             
            $campos="c.caso_id,c.tblusuario_usu_id,c.caso_num_tramo,c.caso_descripcion,c.caso_direccion_dano,c.caso_ancho,c.caso_largo,c.caso_profundidad,c.caso_foto_dano,c.caso_prioridad,u.usu_nombre1,e.est_nombre,d.tipo_dano_descripcion";

            $tablas="tblcaso c,tblusuario u,tbltipo_dano d,tblestado e";  

            $where=" u.usu_id=(SELECT tblusuario_usu_id FROM tblcaso WHERE caso_id= $caso_id) and e.est_codigo=(SELECT tblestado_est_codigo FROM tblcaso WHERE caso_id= $caso_id) and d.tipo_dano_id=(SELECT tbltipo_dano_tipo_dano_id FROM tblcaso WHERE caso_id= $caso_id) and caso_id= $caso_id";

            $res=$objetose->selecteditcaso($campos,$tablas,$where);
            $row=mysqli_fetch_array($res);

            $campos="est_codigo,est_nombre";
            $tablas="tblestado";
            $where=null;

            $estado=$objetose->selecteditcaso($campos,$tablas,$where);


            $campos="est_codigo,est_nombre";
            $tablas="tblestado";
            $where="est_codigo=(SELECT tblestado_est_codigo FROM tblcaso WHERE caso_id=$caso_id)";
            
            $estado1=$objetose->selecteditcaso($campos,$tablas,$where);
            $ro=mysqli_fetch_array($estado1);

            $campos="tipo_dano_id,tipo_dano_descripcion";
            $tablas="tbltipo_dano";
            $where=null;

            $dano=$objetose->selecteditcaso($campos,$tablas,$where);
     

            $campos="usu_id,usu_nombre1";
            $tablas="tblusuario";
            $where=null;

            $usuario=$objetose->selecteditcaso($campos,$tablas,$where);
            

?>
                  
                               
                         
<div class="row">
    <div class="col s10 offset-s2">
         <div class="card-panel z-depth-5">
      
    <form  method="POST"  action="../../controller/caso/edit.php" enctype="multipart/form-data">
     
              <h4>Editar Caso</h4>
              <br>
    <div class="contenedor">
        
            
            
            <div class="row">

            <input  type="hidden" name="caso_id" readonly class="validate" value="<?php echo $row['caso_id'] ?>">

            <div class="input-field col s4">
                 <input id="numero" type="number" name="caso_num_tramo" value="<?php echo  $row['caso_num_tramo']?>">
                 <label for="numero">Numero Tramo</label>
              </div>

              <div class="input-field col s4">
                 <input id="descripcion" type="text" name="caso_descripcion" value="<?php echo  $row['caso_descripcion']?>">
                 <label for="descripcion">Descripcion</label>
              </div>
   
            <div class="input-field col s4">
                 <input id="direccion" type="text" name="caso_direccion_dano" value="<?php echo  $row['caso_direccion_dano']?>">
                 <label for="direccion">Direccion</label>
              </div>
              
            </div>

            <div class="row">
            <div class="input-field col s4">
                 <input id="ancho" type="text" name="caso_ancho" value="<?php echo  $row['caso_ancho']?>">
                 <label for="ancho">Ancho</label>
              </div>
              
              <div class="input-field col s4">
                 <input id="largo" type="text" name="caso_largo" value="<?php echo  $row['caso_largo']?>">
                 <label for="largo">Largo</label>
              </div>

              <div class="input-field col s4">
                 <input id="profundidad" type="text" name="caso_profundidad" value="<?php echo  $row['caso_profundidad']?>">
                 <label for="profundidad">Profundidad</label>
              </div>
            </div>

          <div class="row">
            <div class="input-field col s6">
            <input id="prioridad" type="text" name="caso_prioridad" value="<?php echo  $row['caso_prioridad']?>">
            <label for="prioridad">Prioridad</label>
            </div> 

            <div class="input-field col s6">
            <select name="tblusuario_usu_id">

            <?php  
         
            while($usu=mysqli_fetch_array($usuario)){ 
              if ($row['tblusuario_usu_id']==$usu['usu_id']) {

                $select="selected";

              } else {

                  $select="";
              }           
              echo "<option value='".$usu['usu_id']."' $select>".$usu['usu_nombre1']."</option>";
              
            }    
            ?>
            </select>

            </div>

            <div class="input-field col s6">
            <select name="tblestado_est_codigo">

            <?php

            while($row1=mysqli_fetch_array($estado)){
              
              if ($row['tblestado_est_codigo']==$row1['est_codigo']) {

                $select="selected";

              } else {

                  $select="";
              }           
              echo "<option value='".$row1['est_codigo']."' $select>".$row1['est_nombre']."</option>";
              
            }

            ?>
            </select>
            </div>

            <div class="input-field col s6">
                <select name="tbltipo_dano_tipo_dano_id">
                  
                 <?php  
  
                   while($fila2=mysqli_fetch_array($dano)){ 

                    if ($row['	tbltipo_dano_tipo_dano_id']==$fila2['tipo_dano_id']) {

                      $select="selected";
      
                    } else {
      
                        $select="";
                    }           
                    echo "<option value='".$fila2['tipo_dano_id']."' $select>".$fila2['tipo_dano_descripcion']."</option>";
                    
                  }
              
                 ?>
                </select>
            
            </div>
          </div>

            <div class="row">
           

            <div class="input-field col s12">
              <input type="hidden" name="foto_vieja" value="<?=$row['caso_foto_dano'] ?>">
              <div id="contenedor">
                <img src="<?= $row['caso_foto_dano'] ?>" width="80px">
                <br><br>
                <button type="button" class="btn waves-effect" id="cambioImagen">Cambiar imagen</button>
              </div>
            </div>
            </div>
                
            <button class="btn blue lighten-1" type="submit" name="act3">Actualizar
                            <i class="material-icons right ">input</i>
                        </button> 
           </form>
      </div>
   </div>
</div>


    
    <script type="text/javascript" src="../../web/vendors/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../../web/js/funciones.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
       $('#btn_editarc').on('click',function(e){
           e.preventDefault();
           editar_caso();
       })

      });

      //Cambio-imagen function
        $(document).on("click", "#cambioImagen", function(){
          $("#contenedor").html('<input type="file" name="caso_foto_dano">');
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