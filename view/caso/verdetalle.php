<!DOCTYPE html>
<html lang="en">

<?php
                include_once('../../view/head.php');
  ?>
  <body>
    <!-- Start Page Loading -->

    <br><br>
        
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
      
    <form  method="POST"  id="form_caso" enctype="multipart/form-data">
     
              <h4>Ver detalle Caso</h4>
              <br>
    <div class="contenedor">
       <div class="row">

            

            <div class="input-field col s3">
               <input name="caso_id" type="number" readonly value="<?php echo $row['caso_id']?>"><label for="numero"> Codigo</label>
            </div>

                
            <div class="input-field col s3">
               <input name="caso_num_tramo" type="number" readonly value="<?php echo $row['caso_num_tramo']?>"><label for="numero">Numero Tramo</label>
            </div>
            
            <div class="input-field col s3">
               <input name="caso_descripcion" type="text"  readonly value="<?php echo $row['caso_descripcion']?>"><label for="descripcion">Descripcion</label> 
            </div>
            
            <div class="input-field col s3">
                   <input name="caso_direccion_dano" type="text" readonly value="<?php echo $row['caso_direccion_dano']?>"><label for="direccion">Direccion</label>
            </div>
          </div>
            
           <div class="row">
            <div class="input-field col s4">
                  <input name="caso_ancho" type="text" readonly value="<?php echo $row['caso_ancho']?>"><label for="ancho">Ancho</label>
            </div>

            <div class="input-field col s4">
                 <input id="largo" type="text" name="caso_largo" readonly value="<?php echo  $row['caso_largo']?>">
                 <label for="largo">Largo</label>
              </div>
               
               <div class="input-field col s4">
                   <input name="caso_profundidad" type="text" readonly value="<?php echo $row['caso_profundidad']?>"><label for="profundidad">Profundidad</label>
               </div>
              
          <div class="row">
             <div class="input-field col s4">
                  <input name="caso_prioridad" type="text" readonly value="<?php echo $row['caso_prioridad']?>"><label for="prioridad">Prioridad</label>
               </div>
             
            </select>
               <div class="input-field col s4">
                  <input name="usu_nombre1" type="text" readonly value="<?php echo $row['usu_nombre1']?>">
                  <label for="usuario">Usuario</label>
               </div>
               
               <div class="input-field col s4">
                  <input name="est_nombre" type="text" readonly value="<?php echo $row['est_nombre']?>"><label for="estado">Estado</label>
               </div>

               <div class="input-field col s4">
                  <input name="tipo_dano_descripcion" type="text" readonly value="<?php echo $row['tipo_dano_descripcion']?>"><label for="descripcion">Descripcion de Daño</label>
               </div>     

               <div class="input-field col s12">
                  <img src="<?= $row['caso_foto_dano'] ?>" width="180px">  
               </div> 
                        
            </div>       
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
       $('#btn_editar').on('click',function(e){
           e.preventDefault();
           verdetalle_caso();
       })

      });
      
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