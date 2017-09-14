<?php include('../../view_header_app.php')?>
<?php include('../menu.php')?>

    <div class="col-md-12">
        <h1 class="text-center">Registro de usuario </h1>
            <form action="index.php" method="post" enctype="multipart/form-data">
                <input type="text" name="action" value="<?php if(isset($values['action']) and $values['action']!='') echo $values['action'];?>">
                    <div>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#datos_usuario" aria-controls="datos_usuario" role="tab" data-toggle="tab">Datos de usuario</a></li>
                        </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="datos_usuario"><?php require('datos_usuario.php');?></div>
                            </div>
                    </div>
                <button type="submit" id="guardar" class="btn btn-success">Guardar</button>
                <a class="btn btn-default" href="<?php echo full_url?>/rrhh/usuarios/index.php?action=Index">Regresar</a>
            </form>

<?php include('../../view_footer_solicitud.php')?>
