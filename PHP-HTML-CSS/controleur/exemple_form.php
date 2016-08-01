<?php
    require_once('class/f_formulaire.php');
    require_once('class/o_champ.php');

    $fabrique_formulaire = new f_formulaire();

    $formulaire[0] = new o_champ('Pseudo', 'text', 'champ_pseudo', '', true);
    $formulaire[1] = new o_champ('Mail', 'email', 'champ_mail', '', true, 64, 'nom@hote.com');
    $formulaire[2] = new o_champ('Password', 'password', 'champ_password', '', true, 64);

    $select_noms = array('Homme', 'Femme', 'Autre');
    $select_valeurs = array('0', '1', '2');

    $formulaire[3] = new o_champ('Sexe', 'select', 'champ_sexe', '', false, 0, '', $select_noms, $select_valeurs);

    $radio_noms = array('Oui', 'Non');

    $formulaire[4] = new o_champ('Acceptez vous nos conditions?', 'radio', 'champ_conditions', '', true, 0, '', $radio_noms);

    $formulaire[5] = new o_champ('Envoyer', 'submit', '', '', false);

    $erreur = -1;
    if(count($_POST) >= count($formulaire)-1) $erreur = $fabrique_formulaire->verification($formulaire);
?>