<?php include("../../autoload.php");?>	
<?php //include("validator.php");?>
<?php include("../security/security.php");?>
<?php $action = "";

if(isset($_REQUEST["action"]) and $_REQUEST["action"]!=""){
	$action = $_REQUEST["action"];
}

$values = $_REQUEST;
$values = array_merge($values,$_FILES);
	switch ($action) {
		case "index":
			executeIndex($values);	
		break;
		case "new":
			executeNew($values);	
		break;
		case "add":
			executeAdd($values);	
		break;
		case "prestamo":
			executePrestamo($values);	
		break;
		default:
			executeIndex($values);
		break;
	}
	function executeIndex($values = null)
	{

		require('form_view.php');
	}
	function executeNew($values = null)
	{
                $values['action'] = 'add';
		require('registro_view.php');
	}
	function executePrestamo($values = null)
	{

		require('prestamo.php');
	}
	function executeAdd($values = null)
	{
        
            if(isset($_FILES) and count($_FILES)>0){
                foreach($_FILES as $key => $value){
                     $hasta = count($_FILES[$key]['name']);
                     for($i=0;$i<=$hasta;$i++){
                         $name = $_FILES[$key]['name'][$i];
                         $size = $_FILES[$key]['size'][$i];
                         $tmp_name = $_FILES[$key]['tmp_name'][$i];
                         if($size > 0){
                             echo $name."<br>";
                         } 

                     }
                } 
            }
            die;
           
            require('prestamo.php');
	}

		
		
		
	