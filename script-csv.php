<?php
    require_once ('admin.php');
    include_once ('./admin-header.php');




?>
<div class="wrap nosubsub">
    <?php screen_icon('edit'); ?>
    <br />
    <h1 class="masque-facture">CSV des formulaires</h1>


    <?php

    // echo $_SERVER['REQUEST_URI'];

    $urldossier = '../wp-content/themes/Octopus/csv';
    $nb_fichier = 0;
    $vartemp = "";
    if($dossier = opendir($urldossier))
    {

        $urldossier = str_replace("..", '', $urldossier);

        while(false !== ($fichier = readdir($dossier)))
        {

            if($fichier != '.' && $fichier != '..' && $fichier != 'index.php')
            {
           
                $nb_fichier++; // On incrémente le compteur de 1
                $vartemp.= '<a href="'.site_url.$urldossier.'/' . $fichier . '" target="_blank" class="button-primary">' . $fichier . '</a><br/><br/>';
           
            } // On ferme le if (qui permet de ne pas afficher index.php, etc.)
         
        } // On termine la boucle

        
        echo 'Il y a <strong>' . $nb_fichier .'</strong> fichier(s) dans le dossier<br/><br/>';

        echo $vartemp;
         
        closedir($dossier);
     
    }
     
    else
         echo 'Le dossier n\' a pas pu être ouvert';

?>

</div>














<?php
// include('./admin-footer.php');