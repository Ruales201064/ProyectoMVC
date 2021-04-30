<?php

//include "menu/fachada.php";

 include 'ClaseConnection.php';
 
 $respuesta = new Connection();
?>

<div class="container">
	<h1 class="header center blue-text text-darken-2">ACTUALIZAR ROL</h1>

	<div class = "row">
		<div class="row card-panel center">
			<form class="col s12" name="formulario" method="POST" >
	 
		
				<div class = "input-field col s12">
					<input type = "text" name= "Rol" placeholder="Digita rol" id="Rol">
						<label for = "Rol">Nombre Rol</label>
				</div>
			
				<!-- -->
				

 
 <div class = "input-field col s4">
	<input type="submit" class="btn waves-effect waves-light right" name="Editar" ></input>
	
			</div>


	</form>
			</div>
	</div>
</div>


<?php
	if (isset($_POST['Editar'])) {
		
		
		$where = $_GET['rol_codigo'];

		$Actualizar_rol= $_POST['Rol'];

		$id= 'rol_codigo';

        $tabla = 'tblrol';
		
		$campos = "rol_nombre='$Actualizar_rol'";
        

		
	
		$ejecutarActualizar = $respuesta->Actualizar($tabla, $campos, $id, $where);

		if ($ejecutarActualizar) {
echo'<script type="text/javascript">
alert("Se actualizo el proveedor exitosamente");
window.location.href="select_rol.php";
</script>';
}else {
	
	echo "ocurrio un error";
}
	}
//include "menu/footer.php";
?>