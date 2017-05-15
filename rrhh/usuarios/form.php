<?php include('../../view_header_app.php')?>
<?php include('../menu.php')?>

<h1 class="text-center">Usuarios</h1>
<form action="index.php" method="post" enctype="multipart/form-data">
    <input type="text" name="action" value="<?php if(isset($values['action']) and $values['action']!='') echo $values['action'];?>">
    
    <button type="submit" >Guardar</button>
</form>

<?php include('../../view_footer_solicitud.php')?>
