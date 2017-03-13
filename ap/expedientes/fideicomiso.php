<?php $data_archivo = $Folios->getListadoFoliosArchivo('fideicomiso.php');?>

<?php foreach($data_archivo as $data):?>

  <div class="form-group col-sm-4">
        <label><?php echo $data['nom_tipdoc']?> 
            <?php if($data['multiple']=='S'):?>
                <small class="text-danger">(*)</small> <b class="">[ + ]</b>
            <?php endif; ?>
        </label>
        <input type="file" class="form-control" id="" name="<?php echo "documentos_".$data['nom_variable']."_".$data['id_tipdoc']?>[]">
  </div>


<?php endforeach;?>