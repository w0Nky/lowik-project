<?php
	/* CHEMINS */
	define('DS', '/'); //DIRECTORY_SEPARATOR
	define('ROOT', dirname(dirname(__FILE__)));

	/* BASE DE DONNEE */
	define('CONST_DB_HOST', "localhost");
	define('CONST_DB_NAME', "lowik");
	define('CONST_DB_USER', "root");
	define('CONST_DB_PASS', "");
	
	/* PARAMETRES */
	define('AFFICHER_ERREURS', true);
	define('PAGE_DEFAUT', 'accueil');
	define('TIMEOUT_CONNEXION', 2592000);
	define('TIMEOUT_MOBILE_SESSION', 3600);
	define('NB_ELEMENT_PAGE', 5);

    /* CHAINES */
    define('NOM_PAGE_DEFAUT', 'Lowik try to be fitt');
    define('DESCRIPTION_DEFAUT', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.');
    define('KEYWORDS_DEFAUTS', '');

    /* PATH  */
    define('BOOTSRAP_CSS', './css/bootstrap.css');
    define('STYLE_CSS', './vue/css/style.css');
    define('IMAGES_STYLE', './vue/images/');

	$pages_existantes = array('erreur', 'accueil', 'admin', 'articles', 'training','inscription', 'deconnexion');

    $code_retour[0] = 'OK';
    $code_retour[1] = 'Nom de compte ou mot de passe absent';
    $code_retour[2] = 'Identifiants incorrectes';
    $code_retour[3] = 'Ce compte nécessite d\'être activé';
    $code_retour[4] = 'Champ absent';
    $code_retour[5] = 'Champ vide';
    $code_retour[6] = 'Taille maximum dépassé pour un champ';
    $code_retour[7] = 'Valeur du champ incorrecte';
?>