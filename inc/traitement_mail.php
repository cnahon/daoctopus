<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<?php

include_once('config.php');

if ($_POST['type']=="contact")
{
	$data = array(
  	array($_POST['nom'],$_POST['prenom'],$_POST['telephone'],$_POST['email'],$_POST['message']));
 
	$f = fopen('data_subscribers.csv', 'a');
	foreach ($data as $ligne) {
	    fputcsv($f, $ligne, ';');
	    }
	  fclose($f);


	$sqlcustomers = mysql_query("insert into ethik_subscribers (nom, prenom, email, message, telephone) values ('". $_POST['nom'] ."', '". $_POST['prenom'] ."', '". $_POST['email'] ."', '". $_POST['message'] ."', '". $_POST['telephone'] ."') ");

	$to    	 = 'yellow.cyril@gmail.com'; 
	$subject = 'Demande de contact sur le site '.$_POST['site_name']; 
	$message = "R&eacute;capitulatif d'informations : ". "<br/>". "<br/>".
	'Nom : '.$_POST['prenom'].' '.$_POST['nom']."<br/>".
	'Email : '.$_POST['email']."<br/>".
	'T&eacute;l&eacute;phone : '.$_POST['telephone']."<br/>".
	'Message : '.$_POST['message']."<br/><br/><br/>".
	'Message envoy&eacute; depuis le formulaire de contact du site '.$_POST['site_name']." : ".$_POST['site_url']."<br/>".
	'T&eacute;l&eacute;charger la liste des adh&eacute;rents : '.$_POST['template_url'].'/inc/data_subscribers.csv';

	$headers = 'From: '.$_POST['email'] . "\n" .
	'Reply-To: '.$_POST['email'] . "\n" .
	'X-Mailer: PHP/' . phpversion(). 
	'MIME-Version: 1.0'."\n".
	'Content-Type: text/html; charset="utf-8"' . "\n";

	mail($to, utf8_decode($subject), $message, $headers);
}

?>

<script type="text/javascript">
  alert("Merci ! Notre &eacute;quipe va traiter votre demande !");
</script>