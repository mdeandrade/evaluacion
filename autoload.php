<?php
session_start();
$_SERVER["DOCUMENT_ROOT"] = "/xampp/htdocs";
//$_SERVER["DOCUMENT_ROOT"] = "/var/www/html";
error_reporting(1);
$project_folder = '/evaluacion';
$development_env = false;
if($_SERVER['HTTP_HOST'] == 'localhost' or $_SERVER['HTTP_HOST'] == 'localhost' or strpos($_SERVER['HTTP_HOST'], "localhost") !== false)
{
	$development_env = true;
}
if($development_env == true)
{
    $project_folder = '/evaluacion';
}

define("main_folder",$project_folder);//Project name and directory name//prueba 2
define("title","Sistema de Evaluación del Desempeño de la Contraloría Metropolitana de Caracas");
define("Author","Contraloría Metropolitana de Caracas");
define("Company","Sistema_RRHH");
define("version","");
define("development_by","CMC");
define("upload_temp_dir",$_SERVER["DOCUMENT_ROOT"]."/".main_folder."/web/uploads/temp");
define("upload_dir",$_SERVER["DOCUMENT_ROOT"]."/".main_folder."/web/uploads/documentos");
define("images_dir","../../../../web/images/");

/* configuraciones apache*/
$base_dir  = __DIR__; // Absolute path to your installation, ex: ../xampp/htdocs/PhpProject1
$doc_root  = preg_replace("!${_SERVER['SCRIPT_NAME']}$!", '', $_SERVER['SCRIPT_FILENAME']); # ex: xampp/htdocs
$base_url  = preg_replace("!^${doc_root}!", '', $base_dir); # ex: '' or '/PhpProject1'
$protocol  = empty($_SERVER['HTTPS']) ? 'http' : 'https';
$port      = $_SERVER['SERVER_PORT'];
$disp_port = ($protocol == 'http' && $port == 80 || $protocol == 'https' && $port == 443) ? '' : ":$port";
$domain    = $_SERVER['SERVER_NAME'].$project_folder;
$full_url  = "${protocol}://${domain}";

define("base_dir",__DIR__);// Absolute path to your installation, ex: ../xampp/htdocs/PhpProject1
define("doc_root", preg_replace("!${_SERVER['SCRIPT_NAME']}$!", '', $_SERVER['SCRIPT_FILENAME']));// ex: ../xampp/htdocs
define("base_url",preg_replace("!^${doc_root}!", '', $base_dir));# ex: '' or '/PhpProject1'
define("protocol",empty($_SERVER['HTTPS']) ? 'http' : 'https');
define("port",$_SERVER['SERVER_PORT']);
define("disp_port",($protocol == 'http' && $port == 80 || $protocol == 'https' && $port == 443) ? '' : ":$port");
define("domain",$_SERVER['SERVER_NAME'].$project_folder);
define("full_url",protocol."://".domain);
define("image_url",full_url."/web/images/");
/*
 * 
 * You can add more constants
 * -|||--|-
 * |
 * 
 * */
 define('mail_from',"tecnologia@cmc.gob.ve");
 define('message_updated',"Registro actualizado satisfactoriamente");
 define('message_created',"Registro creado satisfactoriamente");
//Class definition
include($_SERVER["DOCUMENT_ROOT"]."/".main_folder."/lib/notorm-master/NotORM.php");//se debe incluir una sola vez en todo el cms
include($_SERVER["DOCUMENT_ROOT"]."/".main_folder."/lib/ConnectionORM.class.php");
include($_SERVER["DOCUMENT_ROOT"]."/".main_folder."/lib/ConnectionSiga.class.php");
include($_SERVER["DOCUMENT_ROOT"]."/".main_folder."/lib/Utilitarios.class.php");
include($_SERVER["DOCUMENT_ROOT"]."/".main_folder."/lib/vendors/swiftmailer/lib/swift_required.php");
include($_SERVER["DOCUMENT_ROOT"]."/".main_folder."/lib/ValidateBase.class.php");
include($_SERVER["DOCUMENT_ROOT"]."/".main_folder.'/lib/vendors/securimage/securimage.php');
include($_SERVER["DOCUMENT_ROOT"]."/".main_folder.'/lib/model/Login.class.php');
include($_SERVER["DOCUMENT_ROOT"]."/".main_folder.'/lib/model/Procesos.class.php');
include($_SERVER["DOCUMENT_ROOT"]."/".main_folder.'/lib/model/Funcionarios.class.php');
include($_SERVER["DOCUMENT_ROOT"]."/".main_folder.'/lib/model/Usuarios.class.php');
include($_SERVER["DOCUMENT_ROOT"]."/".main_folder.'/lib/model/Personas.class.php');
include($_SERVER["DOCUMENT_ROOT"]."/".main_folder.'/lib/model/Ubicaciones.class.php');
include($_SERVER["DOCUMENT_ROOT"]."/".main_folder.'/lib/model/Evaluadores.class.php');
include($_SERVER["DOCUMENT_ROOT"]."/".main_folder.'/lib/model/Evaluaciones.class.php');
include($_SERVER["DOCUMENT_ROOT"]."/".main_folder.'/lib/model/Roles.class.php');
include($_SERVER["DOCUMENT_ROOT"]."/".main_folder.'/lib/model/Rangos.class.php');
include($_SERVER["DOCUMENT_ROOT"]."/".main_folder.'/lib/model/Cargos.class.php');
/*validation class*/
//include($_SERVER["DOCUMENT_ROOT"]."/".main_folder."/lib/vendor/GUMP/gump.class.php");


/***
 Class autoloads by model_base_generator.php
**/
//include($_SERVER["DOCUMENT_ROOT"]."/".main_folder."/lib/model/Users.class.php");