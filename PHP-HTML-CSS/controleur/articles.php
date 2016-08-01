<?php
	/**** SESSION ****/
	session_start();

	/**** CLASS CONTROLEUR ****/
    require_once('class/t_texte.php');

	require_once('class/c_session.php');

	/**** MODELE ****/
	require_once('modele/m_session.php');
	require_once('modele/m_articles.php');
	
	/**** OBJETS ****/
    $t_texte = new t_texte();

	$m_session = new m_session($base_de_donnee);
	$c_session = new c_session($m_session, $t_texte);

    $m_articles = new m_articles($base_de_donnee);

	/**** VERIF SESSION ****/
	$c_session->session();

	if(!empty($url_param[0])) {
		if(preg_match('#^[0-9]{1,}$#', $url_param[0])) {
			$num_page = $url_param[0];
		} else { $num_page = 1; }
	} else { $num_page = 1; }

    $liste_articles = $m_articles->liste_articles($num_page);
?>