<?php
require_once('../Model/m_connectDB.php');
require_once('../Model/m_sanbay.php');

$action = filter_input(INPUT_POST, 'action');
if(empty($action)){
	$action = filter_input(INPUT_GET, 'action');
	if(empty($action)){
		$action = 'index';
	}
}

switch ($action) {
	case 'index':
		$sanbay = sanbayDB::getAll();

		include('../View/index.php');
		break;
	
	default:
		# code...
		break;
}
?>