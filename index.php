<?php
include_once('includes/header.php');
include_once('pages/home.php');
	

	if(isset($_GET['acao'])){
	$acao = $_GET['acao'];
		if($acao == 'page-home'){
			include_once('pages/home.php');
		}elseif ($acao == 'page-about'){
			include_once('pages/about.php');
		}

	}else{
		include_once('pages/home.php'); 
	}


