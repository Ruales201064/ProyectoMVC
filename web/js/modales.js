function editar_usu(editar_id){
    $.ajax({
        method: 'GET',
        url: '../../view/Usuario/editar.php?codigo='+editar_id,
        success: function(data){
            
           $('#modal1 .modal-content').html(data);
           $('#modal1').modal('open');
           
  
        },
        error: function(){
            alert=('Ocurrio un error al consultar');
        }
   
    });
  
  }
  
  function verdetalle_usu(editar_id){
    $.ajax({
        method: 'GET',
        url: '../../view/Usuario/verdetalle.php?codigo='+editar_id,
        success: function(data){
            
           $('#modal1 .modal-content').html(data);
           $('#modal1').modal('open');
           
  
        },
        error: function(){
            alert=('Ocurrio un error al consultar');
        }
   
    });
  
  }

  function editar_rol2(editar_rol){
    $.ajax({
        method: 'GET',
        url: '../../view/roles/editar_rol.php?codigo='+editar_rol,
        success: function(data){
            
           $('#modal1 .modal-content').html(data);
           $('#modal1').modal('open');
           

        },
        error: function(){
            alert=('Ocurrio un error al consultar');
        }
   
    });
  
  }

  function editar_prov(editar_id){
    let obj={
     method: 'GET',
     url: '../../view/proveedor/editar.php?codigo='+editar_id,
 
 
 
    };
 
     $.ajax(obj)
        .done((data)=> {
 
         $('#modal1 .modal-content').html(data);
         $('#modal1').modal('open');
 
        })
        .fail(() => {
         console.log('FALLO');
 
        })
   
   
   }

   function editardoc2(editar_rol){
    $.ajax({
        method: 'GET',
        url: '../../view/Tipo de documento/editar_doc.php?codigo='+editar_rol,
        success: function(data){
            
           $('#modal1 .modal-content').html(data);
           $('#modal1').modal('open');
           
  
        },
        error: function(){
            alert=('Ocurrio un error al consultar');
        }
   
    });
  
  }

  function editar_usu(usu_id){
    let obj={
     method: 'GET',
     url: '../../view/Usuario/editar.php?usu_id='+usu_id,
    };
     $.ajax(obj)
        .done((data)=> {
  
         $('#modal1 .modal-content').html(data);
         $('#modal1').modal('open');
  
        })
        .fail(() => {
         alert=('Ocurrio un error Editar');
  
        })
  
   }
  
   function verdetalleusu(usu_id){
    let obj={
     method: 'GET',
     url: '../../view/Usuario/verdetalle.php?usu_id='+usu_id,
    };
     $.ajax(obj)
        .done((data)=> {
  
         $('#modal1 .modal-content').html(data);
         $('#modal1').modal('open');
  
        })
        .fail(() => {
         alert=('Ocurrio un error Editar');
  
        })
  
   }

   function editar_herr(her_id){
    let obj={
     method: 'GET',
     url: '../../view/herramientas/editar.php?codigo='+her_id,
    };
     $.ajax(obj)
        .done((data)=> {
  
         $('#modal1 .modal-content').html(data);
         $('#modal1').modal('open');
  
        })
        .fail(() => {
         alert=('Ocurrio un error Editar');
  
        })
  
   }



   function verdetalleher(her_id){
    let obj={
     method: 'GET',
     url: '../../view/herramientas/detalle.php?codigo='+her_id,
    };
     $.ajax(obj)
        .done((data)=> {
  
         $('#modal1 .modal-content').html(data);
         $('#modal1').modal('open');
  
        })
        .fail(() => {
         alert=('Ocurrio un error Editar');
  
        })
  
   }

   function editarTercero(ter_id){
    let obj={
     method: 'GET',
     url: '../../view/Terceros/editar.php?ter_id='+ter_id,
    };
     $.ajax(obj)
        .done((data)=> {
  
         $('#modal1 .modal-content').html(data);
         $('#modal1').modal('open');
  
        })
        .fail(() => {
         alert=('Ocurrio un error Editar');
  
        })
  
   }

   function editar_mat(mat_id){
    let obj={
     method: 'GET',
     url: '../../view/material/editar.php?codigo='+mat_id,
    };
     $.ajax(obj)
        .done((data)=> {
  
         $('#modal1 .modal-content').html(data);
         $('#modal1').modal('open');
  
        })
        .fail(() => {
         alert=('Ocurrio un error Editar');
  
        })
  
   }



   function editar_tipoma(tipo_maq_id){
    let obj={
     method: 'GET',
     url: '../../view/tipo_maquinaria/editar.php?tipo_maq_id='+tipo_maq_id,
    };
     $.ajax(obj)
        .done((data)=> {
  
         $('#modal1 .modal-content').html(data);
         $('#modal1').modal('open');
  
        })
        .fail(() => {
         alert=('Ocurrio un error Editar');
        })
   }



   function editar_tipoh(tipo_her_id){
    let obj={
     method: 'GET',
     url: '../../view/tipo_herramienta/editar.php?tipo_her_id='+tipo_her_id,
    };
     $.ajax(obj)
        .done((data)=> {
  
         $('#modal1 .modal-content').html(data);
         $('#modal1').modal('open');
  
        })
        .fail(() => {
         alert=('Ocurrio un error Editar');
        })
   }

   
   function editarestado(est_codigo){
    let obj={
     method: 'GET',
     url: '../../view/estado/editar.php?est_codigo='+est_codigo,
    };
     $.ajax(obj)
        .done((data)=> {
  
         $('#modal1 .modal-content').html(data);
         $('#modal1').modal('open');
  
        })
        .fail(() => {
         alert=('Ocurrio un error Editar');
        })
   }

   function editarmovimiento(movi_id){
      let obj={
       method: 'GET',
       url: '../../view/movimiento/editar.php?codigo='+movi_id,
      };
       $.ajax(obj)
          .done((data)=> {
    
           $('#modal1 .modal-content').html(data);
           $('#modal1').modal('open');
    
          })
          .fail(() => {
           alert=('Ocurrio un error Editar');
          })
     }
 


     function DetalleMovi(id){
      $.ajax({
          method: 'GET',
          url: '../../view/movimientos/detalle.php?codigo='+id,
          success: function(data){
              
             $('#modal1 .modal-content').html(data);
             $('#modal1').modal('open');
             
    
          },
          error: function(){
              alert=('Ocurrio un error al consultar');
          }
     
      });
    
    }


    function editar_tipoz(tipo_zona_id){
      let obj={
       method: 'GET',
       url: '../../view/tipo_zona/editar.php?tipo_zona_id='+tipo_zona_id,
      };
       $.ajax(obj)
          .done((data)=> {
    
           $('#modal1 .modal-content').html(data);
           $('#modal1').modal('open');
    
          })
          .fail(() => {
           alert=('Ocurrio un error Editar');
          })
     }




     function editar_inventario(id){
      let obj={
       method: 'GET',
       url: '../../view/inventario/editar.php?inv_id='+id,
      
      };
       $.ajax(obj)
          .done((data)=> {
    
           $('#modal1 .modal-content').html(data);
           $('#modal1').modal('open');
    
          })
          .fail(() => {
           alert=('Ocurrio un error Editar');
          })
     }



     function verdetalle_inventario(inv_id){
      let obj={
       method: 'GET',
       url: '../../view/inventario/verdetalle.php?inv_id='+inv_id,
      };
       $.ajax(obj)
          .done((data)=> {
    
           $('#modal1 .modal-content').html(data);
           $('#modal1').modal('open');
    
          })
          .fail(() => {
           alert=('Ocurrio un error Editar');
          })
     }
   
     function editar_bodega(id){
      let obj={
       method: 'GET',
       url: '../../view/bodega/editar.php?bod_id='+id,
      };
       $.ajax(obj)
          .done((data)=> {
    
           $('#modal1 .modal-content').html(data);
           $('#modal1').modal('open');
    
          })
          .fail(() => {
           alert=('Ocurrio un error Editar');
          })

     }


     function editar_tipod(tipo_daño_id){
      let obj={
       method: 'GET',
       url: '../../view/tipo daño/editar.php?tipo_dano_id='+tipo_daño_id,
      };
       $.ajax(obj)
          .done((data)=> {
    
           $('#modal1 .modal-content').html(data);
           $('#modal1').modal('open');
    
          })
          .fail(() => {
           alert=('Ocurrio un error Editar');
          })
     }
   

     function editar_tipomat(tipo_mat_id){
      let obj={
       method: 'GET',
       url: '../../view/tipo material/editar.php?tipo_mat_id='+tipo_mat_id,
      };
       $.ajax(obj)
          .done((data)=> {
    
           $('#modal1 .modal-content').html(data);
           $('#modal1').modal('open');
    
          })
          .fail(() => {
           alert=('Ocurrio un error Editar');
          })
     }

     function editar_maq(maq_id){
      let obj={
       method: 'GET',
       url: '../../view/maquinaria/editar.php?maq_id='+maq_id,
      };
       $.ajax(obj)
          .done((data)=> {
    
           $('#modal1 .modal-content').html(data);
           $('#modal1').modal('open');
    
          })
          .fail(() => {
           alert=('Ocurrio un error Editar');
          })
     }


     
     function editar_orden(ord_man_id){
      $.ajax({
          method: 'GET',
          url: '../../view/orden_mantenimiento/editar.php?ord_man_id='+ord_man_id,
          success: function(data){
              
             $('#modal1 .modal-content').html(data);
             $('#modal1').modal('open');
             
    
          },
          error: function(){
              alert=('Ocurrio un error al consultar');
          }
     
      });
    
    }

    function verdetallecaso(caso_id){
      let obj={
       method: 'GET',
       url: '../../view/caso/verdetalle.php?caso_id='+caso_id,
      };
       $.ajax(obj)
          .done((data)=> {
    
           $('#modal1 .modal-content').html(data);
           $('#modal1').modal('open');
    
          })
          .fail(() => {
           alert=('Ocurrio un error Editar');
          })
     }

     function editar_caso2(caso_id){
      $.ajax({
       method: 'GET',
       url: '../../view/caso/editar.php?caso_id='+caso_id,
       success: function(data){
    
         $('#modal1 .modal-content').html(data);
         $('#modal1').modal('open');
    
      },
      error: function(){
          alert=('Ocurrio un error al consultar');
      }
 
  });

}