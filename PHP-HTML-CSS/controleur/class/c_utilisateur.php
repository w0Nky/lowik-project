<?php
	class c_utilisateur {
		
		private $modele;
		
		public function __construct($p_modele){
			$this->modele = $p_modele;
		}
		
        public function connexion($compte, $password, $retenir) {
			if(!empty($compte) AND !empty($password)) {
				$verification = $this->modele->connexion($compte, $password);

				if(!empty($verification)) {
                    $code_activation = $verification->code_activation;
                    
					if($code_activation == 0) {
						$_SESSION['id'] = $verification->id;

						if($retenir == 1) {
							Setcookie("u", $verification->id, time() + TIMEOUT_CONNEXION);
							Setcookie("p", hash('sha256', $password),time()+2592000);
						}
					} else { return 3; }
				} else { return 2; }
			} else { return 1; }
		}
        
        public function deconnexion() {
            setcookie('u', '', time()+1);
            setcookie('p', '', time()+1);
            
            $_SESSION['id'] = 0;
        }
	
	}
?>