<?php include("../view_header_app.php");?>
<?php include("menu.php");?>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="page-header">
        <h1>Bienvenido(a) <strong><?php echo $_SESSION['pri_nom'];?> <?php echo $_SESSION['pri_ape'];?></strong><small> al <?php echo title;?> <?php echo version;?></small></h1>
    </div>
</div>

<?php include("../view_footer_solicitud.php");?>
