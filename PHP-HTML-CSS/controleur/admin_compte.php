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

    // Si id != 0 ça veut dire qu'il est connecté
    if($_SESSION['id'] != 0){
        
        // On va chercher les données de l'utilisateurs 
        $donnesUtilisateurs = $m_utilisateur->obtenir_information_utilisateurs($_SESSION['id']);
        
        //Variable
        
        
        $formulaire[0] = new o_champ('Nom ', 'text', 'Nom', $donnesUtilisateurs['nom'], true);
        $formulaire[1] = new o_champ('Prenom', 'text', 'Prenom', $donnesUtilisateurs['prenom'], true);
        $formulaire[2] = new o_champ('Email', 'email', 'Email', $donnesUtilisateurs['mail'], true);
        $formulaire[3] = new o_champ('Mot de passe', 'password', 'password', '', true);
        $formulaire[4] = new o_champ('Téléphone', 'text', 'telephone', $donnesUtilisateurs['telephone'], true);
        $formulaire[5] = new o_champ('Mettre à jour', 'submit', '', '', false);

        $erreur = -1;
        // On calcule le nombre de post rempli et en fonction de l'erreur un certain numéro est retourné
        if(count($_POST) >= count($formulaire)-1) $erreur = $fabrique_formulaire->verification($formulaire);
        // Donc c'est ok donc on execute la requête
        if($erreur == 0) $erreur = $m_utilisateur->mise_a_jour_compte($_SESSION['id'], $_POST['Nom'], $_POST['Prenom'], $_POST['Email'], $_POST['password'], $_POST['telephone']);
        
    }else{
        header('Location: accueil');
    }

    // Titre de la page
    $nom_page = 'Mon Compte - '.NOM_PAGE_DEFAUT;
?>