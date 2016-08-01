<?php
	class m_articles{

		private $base_de_donnee;
		
		public function __construct($base_de_donnee){
			$this->base_de_donnee = $base_de_donnee;
		}
        
		public function liste_articles($numPage) {

                // Calcul num page - 1 * nbr element par page 
                $calcul = ($numPage - 1) * NB_ELEMENT_PAGE;
         
				$liste_campagnes = $this->base_de_donnee->prepare('SELECT * FROM articles LIMIT ?, '.NB_ELEMENT_PAGE);
                $liste_campagnes->bindValue(1, $calcul, PDO::PARAM_INT);
				$liste_campagnes->execute();
            
				$retour = $liste_campagnes->fetchAll(PDO::FETCH_OBJ);
				$liste_campagnes->closeCursor();
            
				return $retour;
		}
		
		public function rechercher_articles($recherche){
            
            //permet de stocker le résultat dans un tableau, on supprime les espaces
            $s = explode(" ", $recherche);
            // On stocke notre requête dans une variable qu'on pourra modifier en fonction des résultats
            $sqlAND = "SELECT * FROM articles";
            $sqlOR = "SELECT * FROM articles";
            $i=0; // indice

            // On va parcourir le tableau $s
            foreach($s as $mots){
                // pour éviter injection sql
                $mots = addslashes($mots); 

                if(strlen($mots)>3){ // pour éviter les petits mots comme le de etc... 
                    if($i==0){
                        $sqlAND.= " WHERE ";
                        $sqlOR.= " WHERE ";
                    }
                    else{
                        $sqlAND.= " AND ";
                        $sqlOR.= " OR ";
                    }
                    // On met en place enfin la requête sql
                    $sqlAND.="detailBien like '%$mots%'";
                    $sqlOR.="detailBien like '%$mots%'";
                    // On incrémente l'indice
                    $i++;
                }

                // UNION des 2 requêtes AND et OR
                $sql = $sqlAND ." UNION ".$sqlOR;

                // Traitement requête
                $rechercher_campagnes = $bdd->prepare($sql);
                $rechercher_campagnes->execute();
                $retour = $rechercher_campagnes->fetch(PDO::FETCH_OBJ);
                    
				return $retour;
		}
	}
        
    public function get_articles($id){
        $afficher_campagne = $this->base_de_donnee->prepare('SELECT * FROM articles WHERE idArticles=?');
        $afficher_campagne->bindValue(1, $id, PDO::PARAM_INT);
        $afficher_campagne->execute();
        
        $retour = $afficher_campagne->fetch(PDO::FETCH_OBJ);
        $afficher_campagne->closeCursor();
            
        return $retour;
    }
}
?>