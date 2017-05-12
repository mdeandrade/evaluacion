<?php
if(!isset($_SESSION['id_persona']) or !isset($_SESSION['id_persona'])){

	header("Location:".full_url."/rrhh/errors_pages/login_required.php");	
} 
