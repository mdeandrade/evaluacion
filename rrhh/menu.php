<?php $rol= $_SESSION['id_rol']; ?>
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
  <div class="container-fluid"> </div>
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
		<a class="navbar-brand" href="<?php echo full_url;?>/rrhh/index.php?action=bienvenida"><i class="fa fa-home"></i></a>
		<!--<a class="navbar-brand" href="<?php echo full_url;?>/ap/index.php?action=bienvenida"><img src="<?php echo full_url;?>/web/img/titulo.png"></a>-->

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle"></i> <strong><?php echo ucwords($_SESSION['nom_usuario']); ?></strong><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo full_url?>/rrhh/perfil/index.php">Cambiar Clave</a></li>
          </ul>
        </li>
        <li><a href="<?php echo full_url?>/rrhh/index.php?action=logout"><i class="fa fa-power-off"></i> Cerrar sesión</a></li>
      </ul>
    <?php if (($rol==1)||($rol==2)||($rol==4)||($rol==5)){ ?>
      <ul class="nav navbar-nav">
        <li class="">
          <a class="dropdown-toggle" href="<?php echo full_url?>/rrhh/usuarios/index.php?action=index" role="button" aria-haspopup="true"><i class="fa fa-users"></i>Usuarios</a>
        </li>
      </ul>
    <?php } ?>
    <?php if (($rol==1)||($rol==4)||($rol==5)) { ?>
        <ul class="nav navbar-nav">
        <li class="dropdown">
          <a class="dropdown-toggle" href="<?php echo full_url?>/rrhh/procesos/index.php?action=index" role="button" aria-haspopup="true"><i class="fa fa-cogs"></i>Procesos</a>
        </li>
      </ul>
    <?php } ?>
    <?php if (($rol==1)||($rol==2)||($rol==4)||($rol==5)){ ?>
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-users"></i> Personal <span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li><a href="<?php echo full_url?>/rrhh/personal/index.php?action=index">Listado del Personal</a></li>
          </ul>
        </li>
      </ul>
    <?php } ?>
    <?php if (($rol==3)){ ?>
        <ul class="nav navbar-nav">
        <li  class="dropdown">
          <a  href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-users"></i> ODI <span class="caret"></span></a>
          <ul class="dropdown-menu" >
              <li><a href="<?php echo full_url?>/rrhh/odis/index.php?action=index">ODI asignados</a></li>
          </ul>
        </li>
      </ul>
    <?php } ?>
    <?php if (($rol==1)||($rol==2)||($rol==3)||($rol==4)||($rol==5)){ ?>
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a class="dropdown-toggle" href="<?php echo full_url?>/rrhh/evaluaciones/index.php?action=index"  role="button" aria-haspopup="true"><i class="fa fa-tasks"></i> Evaluaciones </a>
             
        </li>
      </ul> 
   <?php } ?>
<!--<ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#"" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-users"></i> Niveles <span class="caret"></span></a>
           <ul class="dropdown-menu">
              <li><a href="<?php echo full_url?>/rrhh/niveles/index.php?action=index">Listado de Niveles</a></li>
          </ul>
        </li>
      </ul>-->
    <?php if (($rol==1)||($rol==2)||($rol==3)||($rol==4)||($rol==5)) { ?>
      <ul class="nav navbar-nav">
        <li class="dropdown">
                    <a class="dropdown-toggle" href="<?php echo full_url?>/rrhh/estadisticas/index.php?action=index" role="button" aria-haspopup="true"><i class="fa fa-tasks"></i>Estadísticas</a>
           <!--<ul class="dropdown-menu">
              <li><a href="<?php echo full_url?>/rrhh/estadisticas/index.php?action=index"></a></li>
          </ul>-->
        </li>
      </ul>
    <?php } ?>

  </div><!-- /.container-fluid -->
</nav>
		
