<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

//Si no existe sesion idioma lo seteamos a español
if(!isset($_SESSION['idioma'])){
	$_SESSION['idioma']="esp";
}
$pref_lang="ini";

//Si se recibimos un idioma por ajax validamos si tiene valor 
if(isset($_POST["language"])){
	$lang = $_POST["language"];
	//verificamos si es español o ingles
	//idioma_esp
	//idioma_eng
	if($lang=="idioma_eng"){
		$_SESSION['idioma']="eng";
	}else{
		$_SESSION['idioma']="esp";
	}
	echo $lang;
}
?>