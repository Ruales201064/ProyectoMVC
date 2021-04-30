
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Ventas y clientes</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body class="imagen">
  <nav class="blue accent-3" role="navigation">
     <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="  white-text brand-logo  Serviventas ">Serviventas</a>
      <ul class="right hide-on-med-and-down">
        <li><a class="white-text"href="#">Salir</a></li>
      </ul>
  </nav>
<br>
<div class="card-panel1">                      <!-- formulario de de registrar--> 
  <div class="row">
    <form class="col s12 center"method="POST" action="validacion.php">
        <div class="container">
                 <br><br>
               <h4 class=" white-text">iniciar sesion</h4>
             <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">person</i>
                  <input class=" white-text"id="email" type="email" name="usu_email" class="validate">
                  <label for="email">Email</label>
                </div>
            </div>
          <div class="row"> 
            <div class="input-field col s12">
                  <i class="material-icons prefix">lock</i>
                  <input class=" white-text" id="password" type="password" name="usu_password"class="validate">
                     <label for="password">Password</label>
                </div>
           </div>   
       <br>
       </div>  
       <button type="submit"class="blue accent-3 waves-light btn">Registrar</botton>
  </form>
</div>
</div>
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  
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