<?php
	class c_session{
		
		private $modele;
		private $texte;
		
		public function __construct($p_modele, $ptexte){
			$this->modele = $p_modele;
			$this->texte = $ptexte;
		}
		
        /* Vérifie la variable de session id */
		public function session(){
			if(!isset($_SESSION['id'])){
				$_SESSION['id'] = 0;
				$id = 0;
			} else {
				$id = $_SESSION['id'];
			}
		}
        
        /* Prend en paramètre l'id de session mobile (ou 0) et renvoie l'id après vérification */
        public function session_mobile($id){
            $ip = $_SERVER['REMOTE_ADDR'];
            
            $this->modele->timeout_mobile();
            
            if($id != 0) {
                $id_verif = $this->modele->verifie_session_mobile($id, $ip);
                
                if(empty($id_verif)) {
                    $id = $this->texte->random_generateur(32);
                    $this->modele->nouvelle_session_mobile($id, $ip);
                } else {
                    $this->modele->update_session_mobile($id, $ip);
                }
            } else {
                $id = $this->texte->random_generateur(32);
                $this->modele->nouvelle_session_mobile($id, $ip);
            }
            
            return $id;
        }
	
	}
?>