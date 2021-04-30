<?php
include_once'configuracion.php';

class ArchivoController
{

	private $server;//el servidor o el equipo donde establezco la conexion localhost
    private $username;//usario de la base de datos
    private $password;//contraseña
    private $database;//nombre de la base de datos
    private $conexion;//con esta variable se guarda la conexion a mysql
	
	//private $Objarchivo;
	public function __construct()
	{
	 $this->setConect();
	 $this->conect();	
     //$this->Objarchivo= new archivomodel ();
	}
   
	private function setConect(){
		require('configuracion.php');
		$this->server=$server;
		$this->username=$username;
		$this->password=$password;
		$this->database=$database;
	  }


	  private function conect(){
		$this->conexion= mysqli_connect($this->server,$this->username,$this->password,$this->database);
		if(!$this->conexion){
		 exit('erorr de conexion');
		}
		
	  }

     







	  public  function crearusuario($tabl,$camp,$valor)
	  {
		$insert2 = "INSERT INTO ".$tabl." (".$camp.") VALUES(".$valor.")";
		//echo $insert2;
		//die();
		$ejecutar=mysqli_query($this->conexion,$insert2);
	   
	   echo "<script type='text/javascript'> alert ('Registro  exitoso');</script>";
	   echo"<script>window.open('../../view/usuario/listar.php','_self')</script>";
		return $ejecutar;
		//$this->Objarchivo->Insertar($insert2);
		
		
		  
	  }
	  public  function consultarusuario($campos,$tabla,$where)
	{
		$select=" SELECT ".$campos." FROM ".$tabla." WHERE ".$where;
        
	    $resultado7=mysqli_query($this->conexion,$select);
   
         return $resultado7;
	
	}
  
	public  function login($campos,$tabla,$where)
	{
		$select=" SELECT ".$campos." FROM ".$tabla." WHERE ".$where;
        
	    $resultado7=mysqli_query($this->conexion,$select);
		
		echo"<script type='text/javascript'> alert ('Bienvenido Al Sistema');</script>";
		
         return $resultado7;
	
	}






	public function editarusuario($tabl, $camp, $where){
        
		$actualizar="UPDATE ".$tabl." SET ".$camp." WHERE ".$where; 
		 //echo $actualizar;
         //die();
        
		$ejecutar=mysqli_query($this->conexion,$actualizar);
		echo "<script type='text/javascript'>alert('Actualizado Con  Exito');</script>";
        echo"<script>window.open('../../view/Usuario/listar.php','_self')</script>";
		  
		return $ejecutar;
	   }



	   public function eliminarusuario($tabla,$where){
		$eliminacion="DELETE FROM ".$tabla." WHERE ".$where; 
			
        $exitoso=mysqli_query($this->conexion,$eliminacion);

       return $exitoso;
	   }


	   public  function  selectedita($campos,$tablas,$where)
	{
     $selectedit=" SELECT ".$campos." FROM ".$tablas." WHERE ".$where;
     // echo $selectedit;
     $resultado3=mysqli_query($this->conexion,$selectedit);
   
     return $resultado3;
	 
	  
      
	  
		
	}







	  public function selectdocumento($campo,$tbles){
        
		$consuldocumento=" SELECT ".$campo." FROM ".$tbles;
	   // echo $consulprov;
		$documento=mysqli_query($this->conexion,$consuldocumento);
  
	   return $documento;
		  
	  }

      public function selectrol($campo,$tbles){
        
		$consulrol=" SELECT ".$campo." FROM ".$tbles;
	   // echo $consulrol;
		$rol=mysqli_query($this->conexion,$consulrol);
  
	   return $rol;
		  
	  }
	  
	  public function selectestado($campo,$tbles){
		  
		$consulestado=" SELECT ".$campo." FROM ".$tbles;
	   // echo $consulestado;
		$tblestado=mysqli_query($this->conexion,$consulestado);
  
	   return  $tblestado;
		  
	  }
 
	  public function selectherra($campo,$tbles){
		  
		$consulestado=" SELECT ".$campo." FROM ".$tbles;
	   // echo $consulestado;
		$tblestado=mysqli_query($this->conexion,$consulestado);
  
	   return  $tblestado;
		  
	  }






	  public  function  crearrol($tabl,$camp,$valor)
	  {
		  $insert2 = "INSERT INTO ".$tabl." (".$camp.") VALUES(".$valor.")";
		//echo $insertar2;
		$ejecutar=mysqli_query($this->conexion,$insert2);
	   
		echo "<script type='text/javascript'> alert ('Registro  exitoso');</script>";
		echo"<script>window.open('../../view/Roles/listar.php','_self')</script>";
		return $ejecutar;
		//$this->Objarchivo->Insertar($insert2);
		
		
		  
	  }

	  public  function  consultarrol($campos,$tabla,$where)
	{
		$select=" SELECT ".$campos." FROM ".$tabla." WHERE ".$where;

	    $resultado7=mysqli_query($this->conexion,$select);
   
         return $resultado7;
	
	}

	public function editarrol($tabl, $camp, $where){
		$actualizar=" UPDATE ".$tabl." SET ".$camp." WHERE ".$where; 
		 //echo $actualizar;
		$ejecutar=mysqli_query($this->conexion,$actualizar);
		//echo "<script type='text/javascript'> alert ('Actualizado Con  Exito');</script>";
        //echo"<script>window.open('../../view/roles/listar.php','_self')</script>";
		  
		return $ejecutar;
	   }


	   public function eliminarrol($tabla,$where){
		$eliminacion=" DELETE FROM ".$tabla." WHERE ".$where; 
				
			$exitoso=mysqli_query($this->conexion,$eliminacion);

			return $exitoso;
	   }









	

  public  function  crearproveedor($tabl,$camp,$valor)
	{
		$insert2 = "INSERT INTO ".$tabl." (".$camp.") VALUES(".$valor.")";
      //echo $insertar2;
	  $ejecutar=mysqli_query($this->conexion,$insert2);
     
      echo "<script type='text/javascript'> alert ('Registro  exitoso');</script>";
	 
	   
      echo"<script>window.open('../../view/proveedor/listar.php','_self')</script>";
	  return $ejecutar;
	  //$this->Objarchivo->Insertar($insert2);
      
	  
		
	}



	public  function  selectedit($campos,$tablas,$where)
	{
		$selectedit=" SELECT ".$campos." FROM ".$tablas." WHERE ".$where;
     // echo $selectedit;
     $resultado3=mysqli_query($this->conexion,$selectedit);
   
     return $resultado3;
	 
	  //include_once'../../view/proveedor/editar.php'
      
	  
		
	}

	



	public  function  consultarproveedor($campos,$tabla,$where)
	{
		$select=" SELECT ".$campos." FROM ".$tabla." WHERE ".$where;

	    $resultado7=mysqli_query($this->conexion,$select);
   
         return $resultado7;
	
	}

	public function editarproveedor($tabl, $camp, $where){
		$actualizar=" UPDATE ".$tabl." SET ".$camp." WHERE ".$where; 
		 //echo $actualizar;
		$ejecutar=mysqli_query($this->conexion,$actualizar);
		echo "<script type='text/javascript'> alert ('Actualizado Con  Exito');</script>";
        echo"<script>window.open('../../view/proveedor/listar.php','_self')</script>";
		  
		return $ejecutar;
	   }


	   

	   public function eliminarproveedor($tabla,$where){
		$eliminacion=" DELETE FROM ".$tabla." WHERE ".$where; 
		echo $eliminacion;
				
			$exitoso=mysqli_query($this->conexion,$eliminacion);

			return $exitoso;
	   }


	   
	   public  function creardoc($tabl,$camp,$valor)
	   {
		   $insert2 = "INSERT INTO ".$tabl." (".$camp.") VALUES(".$valor.")";
		 //echo $insertar2;
		 $ejecutar=mysqli_query($this->conexion,$insert2);
		
		 echo "<script type='text/javascript'> alert ('Registro  exitoso');</script>";
		 echo"<script>window.open('../../view/Tipo de documento/listar.php','_self')</script>";
		 return $ejecutar;
		 //$this->Objarchivo->Insertar($insert2);
		 
		 
		   
	   }

	   public  function consultardoc($campos,$tabla,$where)
	   {
		   $select=" SELECT ".$campos." FROM ".$tabla." WHERE ".$where;
   
		   $resultado7=mysqli_query($this->conexion,$select);
	  
			return $resultado7;
	   
	   }
   
	   public function editardoc($tabl, $camp, $where){
		   $actualizar=" UPDATE ".$tabl." SET ".$camp." WHERE ".$where; 
			//echo $actualizar;
		   $ejecutar=mysqli_query($this->conexion,$actualizar);
		   //echo "<script type='text/javascript'> alert ('Actualizado Con  Exito');</script>";
		   //echo"<script>window.open('../../view/roles/listar.php','_self')</script>";
			 
		   return $ejecutar;
		  }
		  
		  public function eliminar_doc($tabla,$where){
		   $eliminacion=" DELETE FROM ".$tabla." WHERE ".$where; 
				   
			   $exitoso=mysqli_query($this->conexion,$eliminacion);
   
			   return $exitoso;
		  }


	 public  function  crearherramientas($tabl,$camp,$valor)
	{
		$insert2 = "INSERT INTO ".$tabl." (".$camp.") VALUES(".$valor.")";
      //echo $insertar2;
	  $ejecutar=mysqli_query($this->conexion,$insert2);
     
      echo "<script type='text/javascript'> alert ('Registro  exitoso');</script>";
      echo"<script>window.open('../../controller/archivo/ArchivoController.php?opcion=listarH','_self')</script>";
	  return $ejecutar;
	  //$this->Objarchivo->Insertar($insert2);
      
	  
		
	}

	public  function  consultarherra($campos,$tabla,$where)
	{
		$select=" SELECT ".$campos." FROM ".$tabla." WHERE ".$where;

	    $resultado7=mysqli_query($this->conexion,$select);
        
         return $resultado7;
	
	}


	public function editarherra($tabl, $camp, $where){
		$actualizar=" UPDATE ".$tabl." SET ".$camp." WHERE ".$where; 
		// echo $actualizar;
		$ejecutar=mysqli_query($this->conexion,$actualizar);
		
		  
		return $ejecutar;
 }


	  

	


	public function eliminarherramienta($tabla,$where){
		$eliminacion=" DELETE FROM ".$tabla." WHERE ".$where; 
		//echo $eliminacion;
				
			$exitoso=mysqli_query($this->conexion,$eliminacion);

			return $exitoso;
	   }


	   public function crearter($tabl,$camp,$valor)
	   {
		   $insert3 = "INSERT INTO ".$tabl." (".$camp.") VALUES(".$valor.")";
	   
		   $ejecutar=mysqli_query($this->conexion,$insert3);
		
		 echo "<script type='text/javascript'> alert ('Registro  exitoso');</script>";
		 echo"<script>window.open('../../view/Terceros/listar.php','_self')</script>";
		 return $ejecutar;
	   }


	   public  function consultarter($campos,$tabla,$where)
	{
		$select=" SELECT ".$campos." FROM ".$tabla." WHERE ".$where;
        
	    $resultado7=mysqli_query($this->conexion,$select);
   
         return $resultado7;
	}  

	public function tercedit($campos,$tablas,$where)
	{
		$selectedit=" SELECT ".$campos." FROM ".$tablas." WHERE ".$where;
    
    	$resultado3=mysqli_query($this->conexion,$selectedit);
   
     return $resultado3;
	 
	  //include_once'../../view/proveedor/editar.php'
      
	  
		
	}


	public function editarter($tabl, $camp, $where){
		$actualizar=" UPDATE ".$tabl." SET ".$camp." WHERE ".$where; 	
		
	 


		$ejecutar=mysqli_query($this->conexion,$actualizar);
		if($ejecutar){
			
			  echo"<script>window.open('../../view/Terceros/listar.php','_self')</script>";
		}else{

		}

		return $ejecutar;
	   }


	   public function eliminarter($tabla,$where){
		$eliminacion=" DELETE FROM ".$tabla." WHERE ".$where; 
		
				
			$exitoso=mysqli_query($this->conexion,$eliminacion);

			return $exitoso;
	   }


	   public function selecttmat($campo,$tbles){
		  
		$consulestado=" SELECT ".$campo." FROM ".$tbles;
	   // echo $consulestado;
		$tblestado=mysqli_query($this->conexion,$consulestado);
  
	   return  $tblestado;
		  
	  }

     









	  public  function  crearmaterial($tabl,$camp,$valor)
	{
		$insert2 = "INSERT INTO ".$tabl." (".$camp.") VALUES(".$valor.")";
      
	  $ejecutar=mysqli_query($this->conexion,$insert2);

	  
      echo "<script type='text/javascript'> alert ('Registro  exitoso');</script>";
      echo"<script>window.open('../../controller/archivo/ArchivoController.php?opcion=listarMat','_self')</script>";
	  return $ejecutar;
	  //$this->Objarchivo->Insertar($insert2);
		
	}

	
	public function editarMater($tabl, $camp, $where){
		$actualizar=" UPDATE ".$tabl." SET ".$camp." WHERE ".$where; 
	  //echo $actualizar;
		$ejecutar=mysqli_query($this->conexion,$actualizar);
		
		  
		return $ejecutar;
 }


 public function eliminarmaterial($tabla,$where){
	$eliminacion=" DELETE FROM ".$tabla." WHERE ".$where; 
	//echo $eliminacion;
			
		$exitoso=mysqli_query($this->conexion,$eliminacion);

		return $exitoso;
   }

   public  function creartipo_m($tabl,$camp,$valor)
	{
		$insert2 ="INSERT INTO ".$tabl." (".$camp.") VALUES(".$valor.")";
      //echo $insert2;
    
	  
	  $ejecutar=mysqli_query($this->conexion,$insert2);
	  



      echo "<script type='text/javascript'> alert ('Registro  exitoso');</script>";
      echo"<script>window.open('../../view/tipo_maquinaria/listar.php','_self')</script>";
	  return $ejecutar;
	  
      
	  
		
	}

	public  function selectedittipo_m($campos,$tablas,$where)
	{
		$sql="SELECT ".$campos." FROM ".$tablas." WHERE ".$where;
     
     $resultado3=mysqli_query($this->conexion,$sql);
   
     return $resultado3;
	 
		
	}



	public  function consultartipo_m($campos,$tabla,$where)
	{
		$select="SELECT ".$campos." FROM ".$tabla." WHERE ".$where;

	    $resultado7=mysqli_query($this->conexion,$select);
   
         return $resultado7;
	
	}

	public function editartipo_m($tabl,$camp,$where){
		$actualizar="UPDATE ".$tabl." SET ".$camp." WHERE ".$where; 

		$ejecutar=mysqli_query($this->conexion,$actualizar);
		//echo "<script type='text/javascript'> alert ('Actualizado Con  Exito');</script>";
        //echo"<script>window.open('../../view/tipo_maquinaria/listar.php','_self')</script>";
		  
		return $ejecutar;
	   }


	 public function eliminartipo_m($tabla,$where){
		$eliminacion="DELETE FROM ".$tabla." WHERE ".$where; 	
		$exitoso=mysqli_query($this->conexion,$eliminacion);

			return $exitoso;
	   }



	   public  function creartipoh($tabl,$camp,$valor)
	   {
		   $insert2 ="INSERT INTO ".$tabl." (".$camp.") VALUES(".$valor.")";
		// echo $insert2;
		 //die();
		 $ejecutar=mysqli_query($this->conexion,$insert2);
		
		 echo "<script type='text/javascript'> alert ('Registro  exitoso');</script>";
		 echo"<script>window.open('../../view/tipo_herramienta/listar.php','_self')</script>";
		 return $ejecutar;
		 
		
	   }

	   public function consultartipoh($campos,$tabla,$where)
	   {
		   $select="SELECT ".$campos." FROM ".$tabla." WHERE ".$where;
           
		   $resultado7=mysqli_query($this->conexion,$select);
	  
			return $resultado7;
	   
	   }


	   public  function selectedittipoh($campos,$tablas,$where)
	   {
		   $sql="SELECT ".$campos." FROM ".$tablas." WHERE ".$where;
		
		$resultado3=mysqli_query($this->conexion,$sql);
	  
		return $resultado3;
		
		   
	   }


	   public function editartipoh($tabl,$camp,$where){
		$actualizar="UPDATE ".$tabl." SET ".$camp." WHERE ".$where; 
	
		$ejecutar=mysqli_query($this->conexion,$actualizar);
		echo "<script type='text/javascript'> alert ('Actualizado Con Exito');</script>";
        echo"<script>window.open('../../view/tipo_herramienta/listar.php','_self')</script>";
		  
		return $ejecutar;
	   }

	   public function eliminartipoh($tabla,$where){
		$eliminacion="DELETE FROM ".$tabla." WHERE ".$where; 	
		$exitoso=mysqli_query($this->conexion,$eliminacion);

			return $exitoso;
	   }

	   
	   public function crearestado($tabl,$camp,$valor)
	   {
		 $sql ="INSERT INTO ".$tabl." (".$camp.") VALUES(".$valor.")";

		 $ejecutar=mysqli_query($this->conexion,$sql);
		
		 echo "<script type='text/javascript'> alert ('Registro  exitoso');</script>";
		 echo"<script>window.open('../../view/estado/listar.php','_self')</script>";
		 return $ejecutar;
		 
		
	   }

       public function consultarestado($campos,$tabla,$where)
	   {
		   $select="SELECT ".$campos." FROM ".$tabla." WHERE ".$where;
           
		   $resultado7=mysqli_query($this->conexion,$select);
	  
			return $resultado7;
	   
	   }


	   public function selecteditestado($campos,$tablas,$where)
	   {
		   $sql="SELECT ".$campos." FROM ".$tablas." WHERE ".$where;
		
		$resultado3=mysqli_query($this->conexion,$sql);
	  
		return $resultado3;
		
		   
	   }

       public function editarestado($tabl,$camp,$where){
		$actualizar="UPDATE ".$tabl." SET ".$camp." WHERE ".$where; 
	
		$ejecutar=mysqli_query($this->conexion,$actualizar);
		echo "<script type='text/javascript'> alert ('Actualizado Con Exito');</script>";
        echo"<script>window.open('../../view/estado/listar.php','_self')</script>";
		  
		return $ejecutar;
	   }

	   public function eliminarestado($tabla,$where){
		$eliminacion="DELETE FROM ".$tabla." WHERE ".$where; 	
		$exitoso=mysqli_query($this->conexion,$eliminacion);

			return $exitoso;
	   }


	   public function selectuser($campo,$tbles){
		  
		$consulestado=" SELECT ".$campo." FROM ".$tbles;
	   // echo $consulestado;
		$tblestado=mysqli_query($this->conexion,$consulestado);
  
	   return  $tblestado;
		  
	  }


	  public function selectprov($campo,$tbles){
		  
		$consulestado=" SELECT ".$campo." FROM ".$tbles;
	   // echo $consulestado;
		$tblestado=mysqli_query($this->conexion,$consulestado);
  
	   return  $tblestado;
		  
	  }


	  
   public function creartipoz($tabl,$camp,$valor)
	   {
		 $sql ="INSERT INTO ".$tabl." (".$camp.") VALUES(".$valor.")";

		 $ejecutar=mysqli_query($this->conexion,$sql);
		
		 echo "<script type='text/javascript'> alert ('Registro  exitoso');</script>";
		 echo"<script>window.open('../../view/tipo_zona/listar.php','_self')</script>";
		 return $ejecutar;
		 
		
	   }

	   public function consultartipoz($campos,$tabla,$where)
	   {
		   $select="SELECT ".$campos." FROM ".$tabla." WHERE ".$where;
           
		   $resultado7=mysqli_query($this->conexion,$select);
	  
			return $resultado7;
	   
	   }

	   public function selectedittipoz($campos,$tablas,$where)
	   {
		   $sql="SELECT ".$campos." FROM ".$tablas." WHERE ".$where;
		
		$resultado3=mysqli_query($this->conexion,$sql);
	  
		return $resultado3;
		
		   
	   }

       public function editartipoz($tabl,$camp,$where){
		$actualizar="UPDATE ".$tabl." SET ".$camp." WHERE ".$where; 
	
		$ejecutar=mysqli_query($this->conexion,$actualizar);
		echo "<script type='text/javascript'> alert ('Actualizado Con Exito');</script>";
        echo"<script>window.open('../../view/tipo_zona/listar.php','_self')</script>";
		  
		return $ejecutar;
	   }

	   public function eliminartipoz($tabla,$where){
		$eliminacion="DELETE FROM ".$tabla." WHERE ".$where; 	
		$exitoso=mysqli_query($this->conexion,$eliminacion);

			return $exitoso;
	   }
       
	   
	   public function selectzona($campo,$tbles){
		  
		$consulestado=" SELECT ".$campo." FROM ".$tbles;
	   // echo $consulestado;
		$tblestado=mysqli_query($this->conexion,$consulestado);
  
	   return  $tblestado;
		  
	  }

//-------------------------PROCESO DE INVENTARIO MOVIMIENTO-------------//


	  public  function  crearmovimiento($tabl,$camp,$valor)

	  {
		$insert2 ="INSERT INTO ".$tabl." (".$camp.") VALUES(".$valor.")";
		   
		$ejecutar=mysqli_query($this->conexion,$insert2);
	    $ejecutar = mysqli_insert_id($this->conexion);
		

		//echo "<script type='text/javascript'> alert ('Registro  exitoso');</script>";
		//echo"<script>window.open('../../controller/archivo/ArchivoController.php?opcion=listarMov','_self')</script>";
		return $ejecutar;
		
		  
	  }

	  public  function  creardetalle($tabl,$camp,$valor)

	  {
		$insert2 = "INSERT INTO ".$tabl." (".$camp.") VALUES(".$valor.")";
		   
		$ejecutar=mysqli_query($this->conexion,$insert2);
	
		echo "<script type='text/javascript'> alert ('Registro  exitoso');</script>";
		echo"<script>window.open('../../controller/archivo/ArchivoController.php?opcion=listari','_self')</script>";
		return $ejecutar;
		 
	  }
      

	  public function consultarinv_movi()
	  {
		   $inmovi="SELECT inv_mov_id,inv_mov_cantidad,inv_mov_valor_total, mov_num_factura, mov_concepto, mov_fecha_movimiento, 
		    mov_tipo_movimiento,tblusuario_usu_id,inv_existencia, inv_costo, 
		    inv_stock_minimo,inv_stock_mazimo,tblmaterial_mat_id, mat_nombre,
		    tblusuario_usu_id,usu_nombre1 FROM tblinventario_movimiento AS movinv 
			JOIN tblmovimiento AS mov ON movinv.tblmovimiento_mov_id = mov.mov_id 
			JOIN tblinventario AS inv ON movinv.tblinventario_inv_id = inv.inv_id 
			JOIN tblmaterial AS mat ON inv.tblmaterial_mat_id = mat.mat_id 
			JOIN tblusuario AS usu ON mov.tblusuario_usu_id = usu.usu_id";
		    $res=mysqli_query($this->conexion,$inmovi);
		  
		return $res;
	  
	  }

	 
	//-------------------------PROCESO DE INVENTARIO MOVIMIENTO-------------//






	  public  function  consultarmovi($campos,$tabla,$where)
	{
		$select=" SELECT ".$campos." FROM ".$tabla." WHERE ".$where;
         //echo $select;
	    $resultado7=mysqli_query($this->conexion,$select);
        
         return $resultado7;
	
	}

	  public function editarMovi($tabl, $camp, $where){
		$actualizar=" UPDATE ".$tabl." SET ".$camp." WHERE ".$where; 
		//echo $actualizar;
		//die();
		$ejecutar=mysqli_query($this->conexion,$actualizar);
		$ejecutar = mysqli_insert_id($this->conexion);
		  
		return $ejecutar;
 }



 public function eliminarmovimiento($tabla,$where){

	$eliminacion=" DELETE FROM ".$tabla." WHERE ".$where; 
	//echo $eliminacion;
			
		$exitoso=mysqli_query($this->conexion,$eliminacion);

		return $exitoso;
   }


	  public function selectmovimientos($campo,$tbles){
		  
		$maqui="SELECT ".$campo." FROM ".$tbles;
	   // echo $maqui;
		$tblmaquinaria=mysqli_query($this->conexion,$maqui);
  
	   return $tblmaquinaria;
		  
	  }


	  public function selectinventario($campo,$tbles){
		  
		$maqui="SELECT ".$campo." FROM ".$tbles;
	   // echo $maqui;
		$tblmaquinaria=mysqli_query($this->conexion,$maqui);
  
	   return $tblmaquinaria;
		  
	  }




	   public function crearinventario($tabl,$camp,$valor)
	   {
		 $sql ="INSERT INTO ".$tabl." (".$camp.") VALUES(".$valor.")";
        // echo $sql;
		// die();
		 $ejecutar=mysqli_query($this->conexion,$sql);
		 $ejecutar = mysqli_insert_id($this->conexion);

		 return $ejecutar;
		 
		
	   }



	   public function crearinven_movimiento($tabl,$camp,$valor)
	   {
		 $sql ="INSERT INTO ".$tabl." (".$camp.") VALUES(".$valor.")";
       
		 $ejecutar=mysqli_query($this->conexion,$sql);
     
		 return $ejecutar;
		 
		
	   }


	   public function consultarinventario($campos,$tabla,$where)
	   {

		   $select="SELECT ".$campos." FROM ".$tabla." WHERE ".$where;
        
		   $resultado7=mysqli_query($this->conexion,$select);
	  
		return $resultado7;
	   
	   } 
	   
       //pinta los datos del modal en la funcin editar//
	   public function selecteditinventario($campos,$tablas,$where)
	   {
		$sqlin="SELECT ".$campos." FROM ".$tablas." WHERE ".$where;
		
		
		$resultado3=mysqli_query($this->conexion,$sqlin);
	  
		return $resultado3;
		
		   
	   }

      
	  public function editarinventario($tabl,$camp,$where){

		$actualizar="UPDATE ".$tabl." SET ".$camp." WHERE ".$where; 
	     
		$ejecutar=mysqli_query($this->conexion,$actualizar);
		
		//echo "<script type='text/javascript'> alert ('Actualizado Con Exito');</script>";
       // echo"<script>window.open('../../view/inventario/listar.php','_self')</script>";
		  
		return $ejecutar;

	   }

	   public function editarinve_movi($tabl,$camp,$where){

		$actualizar="UPDATE ".$tabl." SET ".$camp." WHERE ".$where; 
	     //echo $actualizar;
		 //die();
		$ejecutar=mysqli_query($this->conexion,$actualizar);
		
		echo "<script type='text/javascript'> alert ('Actualizado Con Exito');</script>";
        echo"<script>window.open('../../view/inventario/listar.php','_self')</script>";
		  
		return $ejecutar;

	   }


	    public function eliminar_inventario($tabla,$where){
		$eliminacion="DELETE tblinventario_movimiento,tblinventario,tblmovimiento FROM ".$tabla." WHERE ".$where; 
		//echo $eliminacion;
		//die();	
		$exitoso=mysqli_query($this->conexion,$eliminacion);

			return $exitoso;
	   }



	   public function selectmaquinaria($campo,$tbles){
		  
		$maqui="SELECT ".$campo." FROM ".$tbles;
	   // echo $consulestado;
		$tblmaquinaria=mysqli_query($this->conexion,$maqui);
  
	   return $tblmaquinaria;
		  
	  }

	  public function selectbodega($campo,$tbles){
		  
		$consulbodega=" SELECT ".$campo." FROM ".$tbles;
	   // echo $consulestado;
		$bodega=mysqli_query($this->conexion,$consulbodega);
  
	   return  $bodega;
		  
	  }

	  public function selectipozona($campo,$tbles){
        
		$sql=" SELECT ".$campo." FROM ".$tbles;
	   
		$tipozona=mysqli_query($this->conexion,$sql);
  
	   return $tipozona;
		  
	  }


	  public  function  consultarmate($campos,$tabla,$where)
	{
		$select=" SELECT ".$campos." FROM ".$tabla." WHERE ".$where;
         //echo $select;
	    $resultado7=mysqli_query($this->conexion,$select);
        
         return $resultado7;
	
	}


       public function crearbodega($tabl,$camp,$valor){
	   
		 $bodega="INSERT INTO ".$tabl." (".$camp.") VALUES(".$valor.")";

		 $ejecutar=mysqli_query($this->conexion,$bodega);

		 
		 echo "<script type='text/javascript'> alert ('Registro  exitoso');</script>";
		 echo"<script>window.open('../../view/bodega/listar.php','_self')</script>";

		 return $ejecutar;
		 
		
	   }
  

	   public function consultarbodega($campos,$tabla,$where)
	   {
		   $select="SELECT ".$campos." FROM ".$tabla." WHERE ".$where;
           
		   $resultado7=mysqli_query($this->conexion,$select);
	  
			return $resultado7;
	   
	   }

	   public function selecteditbodega($campos,$tablas,$where)
	   {
		   $sql="SELECT ".$campos." FROM ".$tablas." WHERE ".$where;
		   
		$resultado3=mysqli_query($this->conexion,$sql);
	  
		return $resultado3;
		
		   
	   }

	   public function editarbodega($tabl,$camp,$where){

		$bode="UPDATE ".$tabl." SET ".$camp." WHERE ".$where; 
	
		$ejecutar=mysqli_query($this->conexion,$bode);
		echo "<script type='text/javascript'> alert ('Actualizado Con Exito');</script>";
        echo"<script>window.open('../../view/bodega/listar.php','_self')</script>";
		  
		return $ejecutar;
	   }
        
	   
	   public function eliminarbodega($tabla,$where){
		$elimi="DELETE FROM ".$tabla." WHERE ".$where; 	
	      //echo $elimi;
	       //die();
		   $sql=mysqli_query($this->conexion,$elimi);

			return $sql;
	   }

	   public function creartipod($tabl,$camp,$valor)
	{
	  $sql="INSERT INTO ".$tabl." (".$camp.") VALUES(".$valor.")";
	  
	  $ejecutar=mysqli_query($this->conexion,$sql);
	 
	  echo"<script type='text/javascript'> alert ('Registro  exitoso');</script>";
	  echo"<script>window.open('../../view/tipo daño/listar.php','_self')</script>";
	  return $ejecutar;
	  
	 
	}

	public  function consultartipod($campos,$tabla,$where)
	{
		$select="SELECT ".$campos." FROM ".$tabla." WHERE ".$where;
		 
		$resultado7=mysqli_query($this->conexion,$select);
		return $resultado7;
	
	}


	public function selectedittipod($campos,$tablas,$where)
	{
	  $sql="SELECT ".$campos." FROM ".$tablas." WHERE ".$where;
	
	 $resultado3=mysqli_query($this->conexion,$sql);
	
	 return $resultado3;
	 
		
	}

	public function editartipodd($tabl,$camp,$where){
	 $actualizar="UPDATE ".$tabl." SET ".$camp." WHERE ".$where; 
 
	 $ejecutar=mysqli_query($this->conexion,$actualizar);
	 echo "<script type='text/javascript'> alert ('Actualizado Con Exito');</script>";
	 echo"<script>window.open('../../view/tipo daño/listar.php','_self')</script>";
	   
	 return $ejecutar;
	}

	public function eliminartipod($tabla,$where){
	 $eliminacion="DELETE FROM ".$tabla." WHERE ".$where; 	
	 $exitoso=mysqli_query($this->conexion,$eliminacion);

		 return $exitoso;
	}

	  public function creartipoM($tabl,$camp,$valor)
	  {
		$sql ="INSERT INTO ".$tabl." (".$camp.") VALUES(".$valor.")";
       // echo $sql;
		//die();
		$ejecutar=mysqli_query($this->conexion,$sql);
	   
		echo "<script type='text/javascript'> alert ('Registro  exitoso');</script>";
		echo"<script>window.open('../../view/tipo material/listar.php','_self')</script>";
		return $ejecutar;
		
	   
	  }



	  public function consultartipomat($campos,$tabla)
	{
		$select="SELECT ".$campos." FROM ".$tabla;
		
		$resultado7=mysqli_query($this->conexion,$select);
	
		 return $resultado7;
	
	}





	public function  editar_tipomat($tabl,$camp,$where){

		$tmat="UPDATE ".$tabl." SET ".$camp." WHERE ".$where; 
	     // echo  $tmat;
		$ejecutar=mysqli_query($this->conexion,$tmat);
		//echo "<script type='text/javascript'> alert ('Registro  exitoso');</script>";
		//echo"<script>window.open('../../view/tipo material/listar.php','_self')</script>";
		  
		return $ejecutar;
	   }
        
	



	
	public function selectedittipomat($campos,$tablas,$where)
	{
		$sql="SELECT ".$campos." FROM ".$tablas." WHERE ".$where;
	 
	 $resultado3=mysqli_query($this->conexion,$sql);
	
	 return $resultado3;
	 
		
	}


	public function eliminartipomat($tabla,$where){
		$eliminacion="DELETE FROM ".$tabla." WHERE ".$where; 	
		$exitoso=mysqli_query($this->conexion,$eliminacion);
	   
			return $exitoso;
	   }



	   public function crearmaquinaria($tabl,$camp,$valor)
	   {
		 $sql="INSERT INTO ".$tabl." (".$camp.") VALUES(".$valor.")";
		 $ejecutar=mysqli_query($this->conexion,$sql);
		
		 echo "<script type='text/javascript'> alert ('Registro  exitoso');</script>";
		 echo"<script>window.open('../../controller/archivo/ArchivoController.php?opcion=listarmq','_self')</script>";
		 return $ejecutar;
		 
		
	   }
      
	   public  function seleceditmaquinaria($campos,$tabla,$where)
	   {
		   $select="SELECT ".$campos." FROM ".$tabla." WHERE ".$where;
			
		   $resultado7=mysqli_query($this->conexion,$select);
		   return $resultado7;
	   
	   }




	   public  function consultarmaquinaria($campos,$tabla,$where)
	   {
		   $select="SELECT ".$campos." FROM ".$tabla." WHERE ".$where;
			
		   $resultado7=mysqli_query($this->conexion,$select);
		   return $resultado7;
	   
	   }



	   public function editar_maq($tabl,$camp,$where){

		$actualizar="UPDATE ".$tabl." SET ".$camp." WHERE ".$where; 
	  
		$ejecutar=mysqli_query($this->conexion,$actualizar);
		//echo "<script type='text/javascript'> alert ('Actualizado Con Exito');</script>";
		//echo"<script>window.open('../../view/maquinaria/listar.php','_self')</script>";
		  
		return $ejecutar;
	   }

	   public function eliminarmaq($tabla,$where){
		$eliminacion="DELETE FROM ".$tabla." WHERE ".$where; 	
		$exitoso=mysqli_query($this->conexion,$eliminacion);
   
			return $exitoso;
	   }

	   public function selectcaso($campo,$tbles){
		  
		$consulestado=" SELECT ".$campo." FROM ".$tbles;
	   // echo $consulestado;
		$tblestado=mysqli_query($this->conexion,$consulestado);
  
	   return  $tblestado;
		  
	  }

	  public  function consultarorden($campos,$tabla,$where)
	  {
		$select=" SELECT ".$campos." FROM ".$tabla." WHERE ".$where;

		$resultado7=mysqli_query($this->conexion,$select);
	  
		 return $resultado7;
	  
	  }

	  public  function crearorden($tabl,$camp,$valor)
	  {
		$insert2 = "INSERT INTO ".$tabl." (".$camp.") VALUES(".$valor.")";
		
		$ejecutar=mysqli_query($this->conexion,$insert2);
	   
	   echo "<script type='text/javascript'> alert ('Registro  exitoso');</script>";
	   echo"<script>window.open('../../view/orden_mantenimiento/listar.php','_self')</script>";
		return $ejecutar;
		//$this->Objarchivo->Insertar($insert2);
		
		
		  
	  }

	  public function editarorden($tabl,$camp,$where){
			   
		$actualizar="UPDATE ".$tabl." SET ".$camp." WHERE ".$where; 
		 //echo $actualizar;
		 //die();
		
		$ejecutar=mysqli_query($this->conexion,$actualizar);
		echo "<script type='text/javascript'>alert('Actualizado Con  Exito');</script>";
		echo"<script>window.open('../../view/orden_mantenimiento/listar.php','_self')</script>";
		  
		return $ejecutar;
	   }
	  
   
	   public function eliminarorden($tabla,$where){
		$eliminacion="DELETE FROM ".$tabla." WHERE ".$where; 
			
		$exitoso=mysqli_query($this->conexion,$eliminacion);
	
	   return $exitoso;
	   }

	   public function selecteditorden($campos,$tablas,$where)
		  {
			  $sql="SELECT ".$campos." FROM ".$tablas." WHERE ".$where;
		   
		   $resultorden=mysqli_query($this->conexion,$sql);
		 
		   return $resultorden;
		   
			  
		  }  



          public function selecttipo($campo,$tbles){
		  
			$consulestado=" SELECT ".$campo." FROM ".$tbles;
		   // echo $consulestado;
			$tblestado=mysqli_query($this->conexion,$consulestado);
	  
		   return  $tblestado;
			  
		  }





		  public  function  crearcaso($tabl,$camp,$valor)
		  {
			  $insert2 = "INSERT INTO ".$tabl." (".$camp.") VALUES(".$valor.")";
		   
			$ejecutar=mysqli_query($this->conexion,$insert2);
		   
			echo "<script type='text/javascript'> alert ('Registro  exitoso');</script>";
			echo"<script>window.open('../../controller/archivo/ArchivoController.php?opcion=listarc','_self')</script>";
			return $ejecutar;
		  }
	  
		  public  function  consultarcaso($campos,$tabla,$where)
		  {
			  $select=" SELECT ".$campos." FROM ".$tabla." WHERE ".$where;
	  
			  $resultado7=mysqli_query($this->conexion,$select);
			  
			   return $resultado7;
		  
		  }
	  
	  
		  public function editarcaso($tabl, $camp, $where){
			  $actualizar=" UPDATE ".$tabl." SET ".$camp." WHERE ".$where; 
	         // echo $actualizar;
			 // die();
			  $ejecutar=mysqli_query($this->conexion,$actualizar);
			  echo "<script type='text/javascript'> alert ('Editado con exito');</script>";
			echo"<script>window.open('../../controller/archivo/ArchivoController.php?opcion=listarc','_self')</script>";
				
			  return $ejecutar;
	   }
	  
		  public function eliminarcaso($tabla,$where){
			  $eliminacion="DELETE FROM ".$tabla." WHERE ".$where; 
   
				  $exitoso=mysqli_query($this->conexion,$eliminacion);
	  
				  return $exitoso;
			 }
   
			 public function selecteditcaso($campos,$tablas,$where)
		  {
			  if($where==null){
			   $sql="SELECT ".$campos." FROM ".$tablas;
			  }else{
			   $sql="SELECT ".$campos." FROM ".$tablas." WHERE ".$where;
			  }
		   
		   
		   $resultado3=mysqli_query($this->conexion,$sql);
		 
		   return $resultado3;
		   
			  
		  }






	   


}


   



?>