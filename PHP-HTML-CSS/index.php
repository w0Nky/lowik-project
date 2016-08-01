<?php
	/* Permet d'évaluer le temps de génération de la page */
	$t0 = microtime();

	/* Config */
	require_once('config/const.php');
	require_once('config/base_de_donnee.php');

	/* Affichage ou pas des erreurs */
	if(AFFICHER_ERREURS){
		error_reporting(E_ALL);
		ini_set('display_errors','On');
	} else {
		error_reporting(E_ALL);
		ini_set('display_errors','Off');
	}
	
	// S'il existe une url
	if(isset($_GET['url'])){
		$url = $_GET['url'];
	} else {
		$url = '';
	}
	
	/* Permet de se protéger des injections */
	$globales = array('_GET', '_POST', '_COOKIE');
	foreach($globales as $valeur){
		foreach($GLOBALS[$valeur] as $clef => $val){
			$GLOBALS[$clef] = stripslashes($val);
		}
	}
	
	/* Découpage de l'url */
	$page = PAGE_DEFAUT;
	$url_param = '';

	$urlTableau = explode(DS, $url, 2);// explose une chaine en segment DS -> directory sperator soit '/'
	
	if(isset($urlTableau[0]) && !empty($urlTableau[0])) $page = $urlTableau[0]; // Si l'url tableau existe et qu'il n'est pas vide alors c'est qu'on a une page
	if(isset($urlTableau[1]) && !empty($urlTableau[1])) $url_param = $urlTableau[1]; // Si param existe et qu'il est pas vide c'est qu'on a des params


	if(!in_array($page, $pages_existantes)){
		$page = 'erreur';
		$message_erreur = '404 page introuvable';
	}
	
	/* Réparation des get */
	$url_param = explode('/', $url_param);

    /* Nom de page par défaut */
	$nom_page = NOM_PAGE_DEFAUT;
    $meta_description = DESCRIPTION_DEFAUT;
    $meta_keywords = KEYWORDS_DEFAUTS;

	/**** Appel du controleur et des vues ****/
	include('controleur/'.$page.'.php');
	
	
	include('vue/header.php');
	include('vue/'.$page.'.php');
	include('vue/footer.php');
	
	/* Affichage du temps de génération */
	$t1 = microtime();
	echo '<!-- page genere en '.($t1 - $t0).' secondes -->';
?>