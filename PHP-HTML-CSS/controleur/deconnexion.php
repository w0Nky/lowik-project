<?php
	/**** SESSION ****/
	session_start();

	/**** CLASS CONTROLEUR ****/
    require_once('class/t_texte.php');
    require_once('class/f_formulaire.php');
    require_once('class/o_champ.php');

    require_once('class/c_session.php');
    require_once('class/c_utilisateur.php');

	/**** MODELE ****/
	require_once('modele/m_session.php');
	require_once('modele/m_utilisateur.php');
	
	/**** OBJETS ****/
    $t_texte = new t_texte();
    $fabrique_formulaire = new f_formulaire();

	$m_session = new m_session($base_de_donnee);
	$c_session = new c_session($m_session, $t_texte);

	$m_utilisateur = new m_utilisateur($base_de_donnee);
	$c_utilisateur = new c_utilisateur($m_utilisateur);

	/**** VERIF SESSION ****/
	$c_session->session();

    if($_SESSION['id'] != 0) header('Location: accueil');

    $c_utilisateur->deconnexion();

    $nom_page = 'Déconnexion - '.NOM_PAGE_DEFAUT;
?>