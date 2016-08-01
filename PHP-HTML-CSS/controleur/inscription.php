<?php
	/**** SESSION ****/
	session_start();

	/**** CLASS CONTROLEUR ****/
    require_once('class/t_texte.php');
	require_once('class/c_session.php');
    require_once('class/f_formulaire.php');
    require_once('class/o_champ.php');

	/**** MODELE ****/
	require_once('modele/m_session.php');
    require_once('modele/m_utilisateur.php');
	
	/**** OBJETS ****/
    $t_texte = new t_texte();
    $fabrique_formulaire = new f_formulaire();

	$m_session = new m_session($base_de_donnee);
    $m_utilisateur = new m_utilisateur($base_de_donnee);
	$c_session = new c_session($m_session, $t_texte);

	/**** VERIF SESSION ****/
	$c_session->session();


    if($_SESSION['id'] != 0) header('Location: accueil');

    $formulaire[0] = new o_champ('Adresse email', 'email', 'email', '', true);
    $formulaire[1] = new o_champ('Nom', 'text', 'Nom', '', true);
    $formulaire[2] = new o_champ('Prenom', 'text', 'Prenom', '', true);
    $formulaire[3] = new o_champ('Mot de passe', 'password', 'passe', '', true);
    $formulaire[4] = new o_champ('Retaper', 'password', 'repasse', '', true);

    $select_noms = array('Benevole', 'Medecin', 'Personne compétente', 'Modérateur');
    $select_valeurs = array('0', '1', '2', '3');

    $formulaire[5] = new o_champ('Catégorie', 'select', 'champ_Cat', '', true, 0, '', $select_noms, $select_valeurs);

    $formulaire[6] = new o_champ('Telephone', 'text', 'tel', '', true);

    $formulaire[7] = new o_champ('Justificatif de catégorie', 'text', 'Justif_Cat', '', false);

    $formulaire[8] = new o_champ('S\'inscrire', 'submit', '', '', false);

    $erreur = -1;

    if(count($_POST) >= count($formulaire)-1) $erreur = $fabrique_formulaire->verification($formulaire);

    if($erreur == 0) {
        
        if($m_utilisateur->verification_compte_existant($_POST['email']) == 0) {
             $m_utilisateur->inscription($_POST['champ_Cat'], $_POST['Nom'], $_POST['Prenom'], $_POST['email'], $_POST['passe'], $_POST['tel'], $_POST['Justif_Cat']);
        } else {
      
            $erreur == 666;
        }    
    }

?>