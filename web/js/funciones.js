
function editar_datos(){
 //let documento = $('#prov_nit').val();
 //alert(documento);
 let datos=$('#form_editar').serialize();

 $.ajax({
   method: 'POST',
   url: '../../controller/proveedor/edit.php',
   data: datos,
   success: function(){
    M.toast({html: 'Actualizado Con exito!'})
       window.location='../../controller/archivo/ArchivoController.php?opcion=listar';
   },
   error: function(){
      alert('Error al actualizar')
   }

 });

}



	
function eliminar_datos1(borrar_id){
  let datos=$('#eliminar').serialize();
  var res=confirm('Desea Eliminar Este Registro');
            if (res==true) 
            {
 
  $.ajax({
    method: 'GET',
    url: '../../controller/proveedor/eliminar.php?borrar='+borrar_id,
    data: datos,
    success: function(){
      M.toast({html: 'Eliminado Con Exito!'})
        window.location='../../controller/archivo/ArchivoController.php?opcion=listar';
    },
    error: function(){
       alert('Error al eliminar')
    }
 
  });
 
 }
}  

   
function eliminar_rol(borrar_id){
  let datos=$('#eliminar').serialize();
  var res=confirm('Desea Eliminar Este Registro');
			if (res==true) 
			{
 
  $.ajax({
    method: 'GET',
    url: '../../controller/roles/eliminar.php?borrar='+borrar_id,
    data: datos,
    success: function(){
      M.toast({html: 'Eliminado Con exito!'})
        window.location='listar.php';
    },
    error: function(){
       alert('Error al eliminar')
    }
 
  });
 
 }
}  

function eliminar_datos32(borrar_id){
  let datos=$('#eliminar').serialize();
  var res=confirm('Desea Eliminar el Registro');
			if (res==true) 
			{
 
  $.ajax({
    method: 'GET',
    url: '../../controller/usuario/eliminar.php?borrar='+borrar_id,
    data: datos,
    success: function(){
      M.toast({html: 'Eliminado Con exito!'})
        window.location='listar.php';
    },
    error: function(){
       alert('Error al eliminar')
    }
 
  });
 
 }
}



  function editar_rol(){
    //let documento = $('#prov_nit').val();
    //alert(documento);
    let datos=$('#form_rol').serialize();
   
    $.ajax({
      method: 'POST',
      url: '../../controller/roles/edit.php',
      data: datos,
      success: function(){
        M.toast({html: 'Actualizado Con exito!'})
          window.location='listar.php';
      },
      error: function(){
         alert('Error al actualizar')
      }
   
    });
   
   }

   function eliminardoc(borrar_id){
    let datos=$('#btn_eliminar2').serialize();
    var res=confirm('Desea Eliminar Este Registro');
        if (res==true) 
        {
   
    $.ajax({
      method: 'GET',
      url: '../../controller/tipo de documento/eliminar_doc.php?borrar='+borrar_id,
      data: datos,
      success: function(){
        M.toast({html: 'Eliminado Con exito!'})
          window.location='listar.php';
      },
      error: function(){
         alert('Error al eliminar')
      }
   
    });
   
   }
  }

  function editardoc(){
    //let documento = $('#prov_nit').val();
    //alert(documento);
    let datos=$('#form').serialize();
   
    $.ajax({
      method: 'POST',
      url: '../../controller/tipo de documento/edit.php',
      data: datos,
      success: function(){
        M.toast({html: 'Actualizado Con exito!'})
          window.location='listar.php';
      },
      error: function(){
         alert('Error al actualizar')
      }
   
    });
   
   }

   function editar_usuario(){
 
    let datos=$('#form_usuario').serialize();
   
    $.ajax({
      method: 'POST',
      url: '../../controller/usuario/edit.php',
      data: datos,
      success: function(){
        M.toast({html: 'Actualizado Con exito!'})
          window.location='listar.php';
      },
      error: function(){
         alert('Error al actualizar')
      }
   
    });
   
   }



   function editar_herra(){
    
    let datos=$('#form_editarH').serialize();
   
    $.ajax({
      method: 'POST',
      url: '../../controller/herramientas/edit.php',
      data: datos,
      success: function(){
        M.toast({html: 'Actualizado Con exito!'})
          window.location='../../controller/archivo/ArchivoController.php?opcion=listarH';
      },
      error: function(){
         alert('Error al actualizar')
      }
   
    });
   
   }


   function eliminar_data(borrar_id){
    let datos=$('#btn_eliminar2').serialize();
    var res=confirm('Desea Eliminar Este Registro');
              if (res==true) 
              {
   
    $.ajax({
      method: 'GET',
      url: '../../controller/herramientas/eliminar.php?borrar='+borrar_id,
      data: datos,
      success: function(){
        M.toast({html: 'Eliminado Con exito!'})
          window.location='../../controller/archivo/ArchivoController.php?opcion=listarH';
      },
      error: function(){
         alert('Error al eliminar')
      }
   
    });
   
   }
  } 
  
  


  function editarter(){
 
    let datos=$('#form_tercero').serialize();
   
    $.ajax({
      method: 'POST',
      url: '../../controller/terceros/editer.php',
      data: datos,
      success: function(){
        M.toast({html: 'Actualizado Con exito!'})
          window.location='listar.php';
      },
      error: function(){
         alert('Error al actualizar')
      }
   
    });
   
   }
  


   function eliminardato(borrar_id){
    let datos=$('#eliminar').serialize();
    var res=confirm('Desea Eliminar Este Registro');
        if (res==true) 
        {
   
    $.ajax({
      method: 'GET',
      url: '../../controller/terceros/eliminar.php?borrar='+borrar_id,
      data: datos,
      success: function(){
        M.toast({html: 'Eliminado Con exito!'})
          window.location='listar.php';
      },
      error: function(){
         alert('Error al eliminar')
      }
   
    });
   
   }
  }  


  function editar_mat(){
    //let documento = $('#prov_nit').val();
    //alert(documento);
    let datos=$('#editar_formM').serialize();
   
    $.ajax({
      method: 'POST',
      url: '../../controller/material/edit.php',
      data: datos,
      success: function(){
        M.toast({html: 'Actualizado Con exito!'})
          window.location='../../controller/archivo/ArchivoController.php?opcion=listarMat';
      },
      error: function(){
         alert('Error al actualizar')
      }
   
    });
   
   }


   function eliminar_data1(borrar_id){
    let datos=$('#eliminar3').serialize();
    var res=confirm('Desea Eliminar Este Registro');
              if (res==true) 
              {
   
    $.ajax({
      method: 'GET',
      url: '../../controller/material/eliminar.php?borrar='+borrar_id,
      data: datos,
      success: function(){
        M.toast({html: 'Eliminado Con Exito!'})
          window.location='../../controller/archivo/ArchivoController.php?opcion=listarMat';
      },
      error: function(){
         alert('Error al eliminar')
      }
   
    });
   
   }
  }  

  function editar_tipom(){
 
    let datos=$('#form_tipomaquinaria').serialize();
   
    $.ajax({
      method: 'POST',
      url: '../../controller/tipo_maquinaria/edit.php',
      data: datos,
      success: function(){
        M.toast({html: 'Actualizado Con exito!'})
          window.location='../../controller/archivo/ArchivoController.php?opcion=listarm';
      },
      error: function(){
         alert('Error al actualizar')
      }
   
    });
   
   }

   function eliminartipom(tipo_maq_id){
    let datos=$('#btn_elimi').serialize();
    var res=confirm('Desea Eliminar el Registro');
        if (res==true) 
        {
   
    $.ajax({
      method: 'GET',
      url: '../../controller/tipo_maquinaria/eliminar.php?tipo_maq_id='+tipo_maq_id,
      data: datos,
      success: function(){
        M.toast({html: 'Eliminado Con exito!'})
          window.location='../../controller/archivo/ArchivoController.php?opcion=listarm';
      },
      error: function(){
         alert('Error al eliminar')
      }
   
    });
   
   }
  }


  function editartipoherra(){
 
    let datos=$('#form_tipoherramienta').serialize();
   
    $.ajax({
      method: 'POST',
      url: '../../controller/tipo_herramienta/edit.php',
      data: datos,
      success: function(){
        M.toast({html: 'Actualizado Con exito!'})
          window.location='../../controller/archivo/ArchivoController.php?opcion=listarh';
      },
      error: function(){
         alert('Error al actualizar')
      }
   
    });
   
   }



   function eliminartipoh(tipo_her_id){
    let datos=$('#btn_elimi').serialize();
    var res=confirm('Desea Eliminar el Registro');
        if (res==true) 
        {
   
    $.ajax({
      method: 'GET',
      url: '../../controller/tipo_herramienta/eliminar.php?tipo_her_id='+tipo_her_id,
      data: datos,
      success: function(){
        M.toast({html: 'Eliminado Con exito!'})
          window.location='../../controller/archivo/ArchivoController.php?opcion=listarh';
      },
      error: function(){
         alert('Error al eliminar')
      }
   
    });
   
   }
  }

  function editar_esta(){
 
    let datos=$('#form_estado').serialize();
   
    $.ajax({
      method: 'POST',
      url: '../../controller/estado/edit.php',
      data: datos,
      success: function(){
        M.toast({html: 'Actualizado Con exito!'})
          window.location='../../controller/archivo/ArchivoController.php?opcion=listare';
      },
      error: function(){
         alert('Error al actualizar')
      }
   
    });
   
   }
   
   function eliminarestado(est_codigo){
    let datos=$('#btn_elimi3').serialize();
    var res=confirm('Desea Eliminar el Registro');
        if (res==true) 
        {
   
    $.ajax({
      method: 'GET',
      url: '../../controller/estado/eliminar.php?est_codigo='+est_codigo,
      data: datos,
      success: function(){
        M.toast({html: 'Eliminado Con exito!'})
          window.location='../../controller/archivo/ArchivoController.php?opcion=listare';
      },
      error: function(){
         alert('Error al eliminar')
      }
   
    });
   
   }
  }



  function editar_Movi(){
 
    let datos=$('#form_editarMovi').serialize();
   
    $.ajax({
      method: 'POST',
      url: '../../controller/movimientos/edit.php',
      data: datos,
      success: function(){
        M.toast({html: 'Actualizado Con exito!'})
          window.location='../../controller/archivo/ArchivoController.php?opcion=listarMov';
      },
      error: function(){
         alert('Error al actualizar')
      }
   
    });
   
   }


   function eliminarmovimiento(codigo){
    let datos=$('#eliminar_mov').serialize();
    var res=confirm('Desea Eliminar el Registro');
        if (res==true) 
        {
   
    $.ajax({
      method: 'GET',
      url: '../../controller/movimientos/eliminar.php?borrar='+codigo,
      data: datos,
      success: function(){
        M.toast({html: 'Eliminado Con exito!'})
          window.location='../../controller/archivo/ArchivoController.php?opcion=listarMov';
      },
      error: function(){
         alert('Error al eliminar')
      }
   
    });
   
   }
  }

  function editar_tipozona(){
 
    let datos=$('#form_tipozona').serialize();
   
    $.ajax({
      method: 'POST',
      url: '../../controller/tipo_zona/edit.php',
      data: datos,
      success: function(){
        M.toast({html: 'Actualizado Con exito!'})
          window.location='../../controller/archivo/ArchivoController.php?opcion=listarz';
      },
      error: function(){
         alert('Error al actualizar')
      }
   
    });
   
   }
   

   function eliminartipozo(tipo_zona_id){
    let datos=$('#btn_elim3').serialize();
    var res=confirm('Desea Eliminar el Registro');
        if (res==true) 
        {
   
    $.ajax({
      method: 'GET',
      url: '../../controller/tipo_zona/eliminar.php?tipo_zona_id='+tipo_zona_id,
      data: datos,
      success: function(){
        M.toast({html: 'Eliminado Con exito!'})
          window.location='../../controller/archivo/ArchivoController.php?opcion=listarz';
      },
      error: function(){
         alert('Error al eliminar')
      }
   
    });
   
   }
  }


  function editar_inven(){
 
    let datos=$('#form_inventario').serialize();
      
    $.ajax({
      method: 'POST',
      url: '../../controller/inventario/edit.php',
      data: datos,
      success: function(){
        M.toast({html: 'Actualizado Con exito!'})
          window.location='../../controller/archivo/ArchivoController.php?opcion=listari';
      },
      error: function(){
         alert('Error al actualizar')
      }
   
    });
   
   }
   

   function eliminarinventario(inv_id){
    let datos=$('#btn_elim4').serialize();
    var res=confirm('Desea Eliminar el Registro');
        if (res==true) 
        {
   
    $.ajax({
      method: 'GET',
      url: '../../controller/inventario/eliminar.php?inv_mov_id='+inv_id,
      data: datos,
      success: function(){
        M.toast({html: 'Eliminado Con exito!'})
          window.location='../../controller/archivo/ArchivoController.php?opcion=listari';
      },
      error: function(){
         alert('Error al eliminar')
      }
   
    });
   
   }
  }

  function editarbod(){
 
    let datos=$('#form_bodega').serialize();
   
    $.ajax({
      method: 'POST',
      url: '../../controller/bodega/edit.php',
      data: datos,
      success: function(){
        M.toast({html: 'Actualizado Con exito!'})
          window.location='../../controller/archivo/ArchivoController.php?opcion=listarb';
      },
      error: function(){
         alert('Error al actualizar')
      }
   
    });
   
   }
   
  

function eliminarbodega(bod_id){
    let datos=$('#eliminarBodega').serialize();
    var res=confirm('Desea Eliminar el Registro');
        if (res==true) 
        {
   
    $.ajax({
      method: 'GET',
      url: '../../controller/bodega/eliminar.php?bod_id='+bod_id,
      data: datos,
      success: function(){
        M.toast({html: 'Eliminado Con exito!'})
        window.location='../../controller/archivo/ArchivoController.php?opcion=listarb';
      },
      error: function(){
         alert('Error al eliminar')
      }
   
    });
  }
}









  
  function editar_tipod(){
 
    let datos=$('#editar').serialize();
   
    $.ajax({
      method: 'POST',
      url: '../../controller/tipo daño/edit.php',
      data: datos,
      success: function(){
        M.toast({html: 'Actualizado Con exito!'})
          window.location='../../controller/archivo/ArchivoController.php?opcion=listard';
      },
      error: function(){
         alert('Error al actualizar')
      }
   
    });
   
   }

  function eliminartipod(tipo_daño_id){
    let datos=$('#btn_elim4').serialize();
    var res=confirm('Desea Eliminar el Registro');
        if (res==true) 
        {
   
    $.ajax({
      method: 'GET',
      url: '../../controller/tipo daño/eliminar.php?tipo_dano_id='+tipo_daño_id,
      data: datos,
      success: function(){
        M.toast({html: 'Eliminado Con exito!'})
          window.location='../../controller/archivo/ArchivoController.php?opcion=listard';
      },
      error: function(){
         alert('Error al eliminar')
      }
   
    });
  }
}
function eliminartipomat(tipo_mat_id){
  let datos=$('#eliminar2').serialize();
  var res=confirm('Desea Eliminar el Registro');
      if (res==true) 
      {
  
  $.ajax({
    method: 'GET',
    url: '../../controller/tipo material/eliminar.php?tipo_mat_id='+tipo_mat_id,
    data: datos,
    success: function(){
      M.toast({html: 'Eliminado Con exito!'})
        window.location='../../controller/archivo/ArchivoController.php?opcion=listarmt';
    },
    error: function(){
       alert('Error al eliminar')
    }
  
  });
  }
  }

  function editar_tipomat(){

    let datos=$('#editar_tipoM').serialize();
    
    $.ajax({
      method: 'POST',
      url: '../../controller/tipo material/edit.php',
      data: datos,
      success: function(){
        M.toast({html: 'Actualizado Con exito!'})
          window.location='../../controller/archivo/ArchivoController.php?opcion=listarmt';
      },
      error: function(){
         alert('Error al actualizar')
      }
    
    });
    
    }


    function eliminarmaq(maq_id){
      let datos=$('#select').serialize();
      var res=confirm('Desea Eliminar el Registro');
          if (res==true) 
          {
      
      $.ajax({
        method: 'GET',
        url: '../../controller/maquinaria/eliminar.php?maq_id='+maq_id,
        data: datos,
        success: function(){
          M.toast({html: 'Eliminado Con exito!'})
            window.location='../../controller/archivo/ArchivoController.php?opcion=listarmq';
        },
        error: function(){
           alert('Error al eliminar')
        }
      
      });
      }
      }

      function editar_maqui(){

        let datos=$('#editar_maq2').serialize();
        
        $.ajax({
          method: 'POST',
          url: '../../controller/maquinaria/edit.php',
          data: datos,
          success: function(){
            M.toast({html: 'Actualizado Con exito!'})
              window.location='../../controller/archivo/ArchivoController.php?opcion=listarmq';
          },
          error: function(){
             alert('Error al actualizar')
          }
        
        });
        
        }



















$(document).on("click","#agregar_fv", function(){
								                 
  var fila=$('#tr_fv').html();
  $('#tbody_fv').append('<tr>'+ fila + '</tr>');


  });



  $(document).on("click",".eliminar", function(){
                           
   $(this).parent().parent().remove();
  


  });




  function eliminarorden(ord_man_id){
    let datos=$('#eliminarorden').serialize();
    var res=confirm('Desea Eliminar el Registro');
        if (res==true) 
        {
   
    $.ajax({
      method: 'GET',
      url: '../../controller/orden_mantenimiento/eliminar.php?ord_man_id='+ord_man_id,
      data: datos,
      success: function(){
        M.toast({html: 'Eliminado Con exito!'})
        window.location='../../controller/archivo/ArchivoController.php?opcion=listarorden';
      },
      error: function(){
         alert('Error al eliminar')
      }
   
    });




  }
}


function editarorden_m(){
 
  let datos=$('#form_orden').serialize();
 
  $.ajax({
    method: 'POST',
    url: '../../controller/orden_mantenimiento/edit.php',
    data: datos,
    success: function(){
      M.toast({html: 'Actualizado Con exito!'})
        window.location='../../controller/archivo/ArchivoController.php?opcion=listarorden';
    },
    error: function(){
       alert('Error al actualizar')
    }
 
  });
 
 }

 function eliminarcaso(caso_id){
  let datos=$('#eliminarcaso').serialize();
  var res=confirm('Desea Eliminar Este Registro');
            if (res==true) 
            {
 
  $.ajax({
    method: 'GET',
    url: '../../controller/caso/eliminar.php?caso_id='+caso_id,
    data: datos,
    success: function(){
      M.toast({html: 'Eliminado Con exito!'})
        window.location='../../controller/archivo/ArchivoController.php?opcion=listarc';
    },
    error: function(){
       alert('Error al eliminar')
    }
 
  });
 
 }
} 


function editar_caso(){
    
  let datos=$('#form_caso').serialize();
//  alert(datos);
 
  $.ajax({
    method: 'POST',
    url: '../../controller/caso/edit.php',
    data: datos,
    success: function(){
      M.toast({html: 'Actualizado Con exito!'})
        window.location='../../controller/archivo/ArchivoController.php?opcion=listarc';
    },
    error: function(){
       alert('Error al actualizar')
    }
 
  });
 
 }

