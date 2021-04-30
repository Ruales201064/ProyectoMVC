<!DOCTYPE html>
<html lang="en">

<?php
                include_once('../../view/head.php');
  ?>
  <body>
    <!-- Start Page Loading -->
    <?php
         include_once('../../view/header.php');
     ?>
            <?php
                include_once('../../view/menu.php');
              ?>
       </li>
    </ul>
        <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only">
        <i class="material-icons">menu</i>
      </a>
</aside>

<br>
        
 <div class="row">
  <div class="col s12 offset-s0">
      <div class="card-panel z-depth-5">
    <?php
      
      include_once'../../model/Model.php';
      $resl= new ArchivoController();
          
        $campos="t.ter_id,t.ter_num_documento,t.ter_nombre1,t.ter_nombre2,t.ter_apellido1,t.ter_apellido2,t.ter_direccion,t.ter_telefono,t.ter_correo,d.tipo_doc_nombre";


        $tabla="tbltercero t,tbltipo_documento d";

        $where="t.tbltipo_documento_tipo_doc_codigo=d.tipo_doc_codigo AND t.ter_id=t.ter_id";

        $result=$resl->consultarter($campos,$tabla,$where);

    ?>
      


      
     <h4 class="center">LISTA DE TERCEROS</h4>
      <br>
       
<table  id="tablas" class="striped" id="eliminar"  >
                  
                <tr>
                    <th>Codigo</th>
                    <th>Documento</th>
                    <th>Primer Nombre</th>
                    <th>Segundo Nombre</th>
                    <th>Primer Apellido</th>
                    <th>Segundo Apellido</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Correo</th>
                    <th>Tipo Documento</th>
                    <th colspan="1">Editar</th>
                    <th colspan="1">Eliminar</th>
                    
                </tr>


<?php
    
   while($row=mysqli_fetch_array($result)){
       
    echo"<tr>";
    echo"<td>".$row['ter_id']."</td>";
    echo"<td>".$row['ter_num_documento']."</td>";
    echo"<td>".$row['ter_nombre1']."</td>";
    echo"<td>".$row['ter_nombre2']."</td>";
    echo"<td>".$row['ter_apellido1']."</td>";
    echo"<td>".$row['ter_apellido2']."</td>";
    echo"<td>".$row['ter_direccion']."</td>";
    echo"<td>".$row['ter_telefono']."</td>";
    echo"<td>".$row['ter_correo']."</td>"; 
    echo"<td>".$row['tipo_doc_nombre']."</td>";
   
          
  ?>
 
  
    <td><a onclick="editarTercero('<?php echo $row['ter_id']; ?>')"><button data-target="modal1" type='button' class='btn-floating btn-large-small yellow accent-4 pulse'><i class="material-icons">edit</i></button></a></td>

   <td><a onclick="eliminardato('<?php echo $row['ter_id']; ?>')"><button type='button' id='btn_eliminar'name="btn_eliminar" class='btn-floating btn-large-small red pulse'><i class="material-icons">delete</i></button></a></td>
<?php
       echo"</tr>";
      }
  ?>

<div id="modal1" class="modal">
    <div class="modal-content " >
    

    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancel</a>
    </div>
  </div>

  <?php
         include_once('../../view/footer.php');
     ?>
  </body>
</html>