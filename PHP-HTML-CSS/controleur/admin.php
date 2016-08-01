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

	$m_session = new m_session($base_de_donnee);
	$c_session = new c_session($m_session, $t_texte);

	$m_admin = new m_admin($base_de_donnee);
	$c_utilisateur = new c_utilisateur($m_utilisateur);

	/**** VERIF SESSION ****/
	$c_session->session();

    if($_SESSION['id'] != 0) header('Location: accueil');


    $erreur = -1;
    if(count($_POST) >= count($formulaire)-1) $erreur = $fabrique_formulaire->verification($formulaire);
    if($erreur == 0) {
        $erreur = $c_utilisateur->connexion($_POST['email'], $_POST['password'], 0);
        
        if($erreur == 0) header('Location: accueil');
    }

    $nom_page = 'Connexion - '.NOM_PAGE_DEFAUT;
?>