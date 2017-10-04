<?php 
$liste_langue=array('fr', 'en');
$langue_principale = 'fr';

if(!isset($_SESSION['lang']))
{
	if(isset($_GET['lang']) and in_array($_GET['lang'], $liste_langue))
	{
		include_once($_GET['lang'].'.php');
		$_SESSION['lang'] = $_GET['lang'];
	}
	else
	{
		include_once($langue_principale.'.php');
		if(defined('ICL_LANGUAGE_CODE')) {
			$_SESSION['lang'] = ICL_LANGUAGE_CODE;
		} else {
			$_SESSION['lang'] = $langue_principale;
		}
	}
}
else
{
	if(isset($_GET['lang']) and in_array($_GET['lang'], $liste_langue))
	{
		include_once($_GET['lang'].'.php');
		$_SESSION['lang'] = $_GET['lang'];
	}
	else
	{
		if(defined('ICL_LANGUAGE_CODE')) {
			$_SESSION['lang'] = ICL_LANGUAGE_CODE;
		} else {
			$_SESSION['lang'] = $langue_principale;
		}
		include_once($_SESSION['lang'].'.php');
	}
}
?>