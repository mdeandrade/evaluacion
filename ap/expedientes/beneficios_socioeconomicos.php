<?php $data_archivo = $Folios->getListadoFoliosArchivo('beneficios_socioeconomicos.php');?>

<?php foreach($data_archivo as $data):?>

  <div class="form-group col-sm-4" id="div_<?php echo $data['nom_variable']."_".$data['id_tipdoc'];?>">
        <label><?php echo $data['nom_tipdoc']?> 
            <?php if($data['multiple']=='S'):?>
            <small class="text-danger">(*)</small> <b class=""><a onclick="sumaCampo('<?php echo $data['nom_variable']?>','<?php echo $data['id_tipdoc']?>');">[ + ]</a></b>
            <?php endif; ?>
        </label>
        <input type="file" class="form-control" id="" name="<?php echo "documentos_".$data['nom_variable']."_".$data['id_tipdoc']?>[0]">
  </div>


<?php endforeach;?>
