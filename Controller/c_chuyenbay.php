<?php
require_once('../Model/m_connectDB.php');
require_once('../Model/m_chuyenbay.php');

$action = filter_input(INPUT_POST, 'action');
if(empty($action)){
	$action = filter_input(INPUT_GET, 'action');
	if(empty($action)){
		$action = 'index';
	}
}

switch ($action) {
	case 'index':
		print_r($_GET);
		break;
	
	default:
		# code...
		break;
}
?>