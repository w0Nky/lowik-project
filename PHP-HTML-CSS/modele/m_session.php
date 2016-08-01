<?php
	class m_session{
		
		private $base_de_donnee;
		
		public function __construct($base_de_donnee){
			$this->base_de_donnee = $base_de_donnee;
		}
		
        /* Vérifie les cookies de session */
		public function vérification_cookie() {
				$vérification_cookie = $this->base_de_donnee->prepare('SELECT id FROM utilisateurs WHERE id = ? AND password = ?');
				$vérification_cookie->bindValue(1, $_COOKIE['u'], PDO::PARAM_INT);
				$vérification_cookie->bindValue(2, $_COOKIE['p'], PDO::PARAM_STR);
				$vérification_cookie->execute();
				$retour_vérif = $vérification_cookie->fetch(PDO::FETCH_OBJ);
				
				return $retour_vérif->id;
		}
	}
?>