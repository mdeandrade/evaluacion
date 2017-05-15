
    
    <!--<div class="row">
        <div class="col-xs-4 text-center">
             <img src="<?php echo full_url;?>/web/img/contraloria.png" width="80">
        </div>
        <div class="col-xs-4 text-center">
            <h1>Sistema de evaluación del desempeño de la Contraloría Metropolitana de Caracas</h1>
        </div>
        <div class="col-xs-4 text-center">
             <img src="<?php echo full_url;?>/web/img/sncf.png" width="100"    >
        </div>
    </div>-->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
		<a class="navbar-brand" href="<?php echo full_url;?>/ap/index.php?action=bienvenida"><i class="fa fa-home"></i></a>
		<!--<a class="navbar-brand" href="<?php echo full_url;?>/ap/index.php?action=bienvenida"><img src="<?php echo full_url;?>/web/img/titulo.png"></a>-->

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> Mi perfil<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo full_url?>/ap/Perfil/index.php">Cambiar Clave</a></li>
          </ul>
        </li>
        <li><a href="<?php echo full_url?>/rrhh/index.php?action=logout"><i class="fa fa-power-off"></i> Cerrar sesión</a></li>
      </ul>
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-users"></i> Usuarios <span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li><a href="<?php echo full_url?>/ap/Usuarios/index.php?action=index">Lista de usuarios</a></li>
          </ul>
        </li>
      </ul>        
       
 
  </div><!-- /.container-fluid -->
</nav>
		<div class="row">
			<div class="col-sm-2 col-sm-offset-8">Usuario: <strong><?php echo $_SESSION['nom_usuario']; ?></strong></div>
			
			
		</div>

