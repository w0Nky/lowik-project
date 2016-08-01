<?php
	class t_texte{
		
        /* Prend en paramètre un timestamp et retourne une date relative */
		public function quand($timestamp){
			date_default_timezone_set('Europe/Paris');
			$superdate = date('d F Y', $timestamp);
			
			$superdate = str_replace('January', 'janvier', $superdate);
			$superdate = str_replace('February', 'février', $superdate);
			$superdate = str_replace('March', 'mars', $superdate);
			$superdate = str_replace('April', 'avril', $superdate);
			$superdate = str_replace('May', 'mai', $superdate);
			$superdate = str_replace('June', 'juin', $superdate);
			$superdate = str_replace('July', 'juillet', $superdate);
			$superdate = str_replace('August', 'aout', $superdate);
			$superdate = str_replace('September', 'septembre', $superdate);
			$superdate = str_replace('October', 'octobre', $superdate);
			$superdate = str_replace('November', 'novembre', $superdate);
			$superdate = str_replace('December', 'décembre', $superdate);
			
			return $superdate;
		}
        
        public function random_generateur($nb_car){
            $caractères = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
            $generation = '';
            for($i = 0; $i < $nb_car; $i++){
                $generation .= $caractères[rand(0, count($caractères)-1)];
            }
            return $generation;
        }
		
	}
?>