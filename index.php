<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>SMVC</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="web/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="web/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
   


 <style>

        .card-panel1 {
          margin-left: 500px;
          margin-right: 500px;
          color:deepskyblue;  
          border-radius: 30px;
          opacity: .6;
          background-color: rgb(0, 0, 0);
          height:70%;
         

        }
     
     body{
             background-image: url(fotologin.jpg);
             background-size: 100%;

           }

</style>
 
 
  <nav class="deepskyblue" role="navigation">
     <div class="nav-wrapper container">
      <a id="logo-container" href="#" class=" white-text brand-logo  Serviventas ">S.M.V.C</a>
      <ul class="right hide-on-med-and-down">
        
      </ul>
  </nav>
<br><br><br>
 <!-- formulario de de registrar--> 
 
<div class="card-panel1">                     
  <div class="row">
    <form class="col s12 center"method="POST" action="controller/usuario/validacion.php">
        <div class="container">
                 <br><br>
               <h4 class="deepskyblue-text">User Login </h4>
             <div class="row">
                <div class="input-field col s11">
                  <i class="material-icons prefix">person</i>
                  <input class=" white-text"id="email" type="email" name="usu_correo" class="validate">
                  <label for="email"></label>
                </div>
            </div>
          <div class="row"> 
            <div class="input-field col s11">
                  <i class="material-icons prefix">lock</i>
                  <input class=" white-text" id="password" type="password" name="usu_contrasena"  class="validate">
                     <label for="password"></label>
                </div>
           </div>   
       <br>
       </div> 
       
         
       <button type="submit"class="blue accent-5 waves-light btn">LOGIN</botton>
  </form>
</div>
</div>

 
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../../js/materialize.js"></script>
  <script src="../../js/init.js"></script>
  
  <script>

  $(document).ready(function(){
    $('.sidenav').sidenav();
  });
        </script>
  
  <script>
  $(document).ready(function(){
    $('select').formSelect();
  });
      
    $(document).ready(function(){
    $('.collapsible').collapsible();
  });  
      
  </script> 
  
  
  
  </body>
</html>