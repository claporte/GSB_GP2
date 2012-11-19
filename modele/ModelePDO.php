<?php
include 'ModeleInterface.php';
include 'PDO/ConnexionBD.php';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ModelePDO
 *
 * @author adproflocal
 */
class ModelePDO implements ModeleInterface{

 
    public function retourneAliment(){
        $maConnexion = new ConnexionBD();
        
        $select = $maConnexion->getConnexion()->query("SELECT * FROM Aliment");

        //mode de récupération par défaut
        $select->setFetchMode(PDO::FETCH_OBJ);
        $i=0;
        //traite les résultats en boucle
        $enregistrement = $select->fetch();
        
        $tabElem = NULL;
        while( $enregistrement )
        { 
            $tabElem[$i]["numAliment"] = $enregistrement->numAliment;
            $tabElem[$i]["descFr"] = $enregistrement->nomFrAliment;
            $tabElem[$i]["descAn"] = $enregistrement->nomAnAliment ;
            $enregistrement = $select->fetch();
            $i++;
        }
       
        if ($tabElem == NULL){
            throw new ModeleExceptions (0);
        }
        else{     
            return $tabElem;
        }
    }

    public function retourneSources(){
        $maConnexion = new ConnexionBD();
        
        $select = $maConnexion->getConnexion()->query("SELECT DISTINCT(citationSource) FROM Source");

        //mode de récupération par défaut
        $select->setFetchMode(PDO::FETCH_OBJ);
        $i=0;
        //traite les résultats en boucle
        $enregistrement = $select->fetch();
        
        $tabElem = NULL;
        while($enregistrement )
        {
            $tabElem[$i]["citationSource"] = $enregistrement->citationSource ;
            $enregistrement = $select->fetch();
            $i++;
        }
        
        if ($tabElem == NULL){
            throw new ModeleExceptions (0);
        }
        else{     
            return $tabElem;
        }
    }
 
    public function retourneComposants(){
        $maConnexion = new ConnexionBD();
        
        $select = $maConnexion->getConnexion()->query("SELECT * FROM Constituant");

        //mode de récupération par défaut
        $select->setFetchMode(PDO::FETCH_OBJ);
        $i=0;
        //traite les résultats en boucle
        $enregistrement = $select->fetch();
        $tabElem = NULL;
        while( $enregistrement )
        {
            $tabElem[$i]["numConst"] = $enregistrement->numConst;
            $tabElem[$i]["origineFrConst"] = $enregistrement->origineFrConst;
            $tabElem[$i]["origineAnConst"] = $enregistrement->origineAnConst;
            $enregistrement = $select->fetch();
            $i++;
        }
        
        if ($tabElem == NULL){
            throw new ModeleExceptions (0);
        }
        else{     
            return $tabElem;
        }
    }
    
    /*
     * le retour est du type tableau de structures 
     * avec à chaque indice le numéro du genre et sa description
     */
    
    public function retourneGenres(){
        $maConnexion = new ConnexionBD();
        
        $select = $maConnexion->getConnexion()->query("SELECT * FROM Genre");

        //mode de récupération par défaut
        $select->setFetchMode(PDO::FETCH_OBJ);
        $i=0;
        //traite les résultats en boucle
        $enregistrement = $select->fetch();
        $tabElem = NULL;
        while( $enregistrement )
        {
            $tabElem[$i]['numGenre'] = $enregistrement->numGenre;
            $tabElem[$i]['descFr'] = $enregistrement->nomFrGenre;
            $enregistrement = $select->fetch();
            $i++;
        }
        
        if ($tabElem == NULL){
            throw new ModeleExceptions (0);
        }
        else{     
            return $tabElem;
        } 
    }
    
    /* 
     * le retour est un tableau de structures de constituant avec
     * le nom du constituant
     * la quantité
     * la valeur maximale de ce constituant
     * la valeur minimale de ce constituant
     */
    public function retourneConstAlim($numAlim){
        $maConnexion = new ConnexionBD();
            
        $req = "SELECT *
                FROM CompNutri, Constituant, Aliment
                WHERE CompNutri.numConst = Constituant.numConst
                    AND Aliment.numAliment = CompNutri.numAliment
                    AND CompNutri.numAliment  = ".$numAlim.";"; 
        
        $select = $maConnexion->getConnexion()->query($req);

        //mode de récupération par défaut
        $select->setFetchMode(PDO::FETCH_OBJ);
 
        //on place les résultats dans un tableau de structures 
        $i=0;
        $enregistrement = $select->fetch();
        $tabConstituants = NULL;
        
        while( $enregistrement )
        {
            $tabConstituants[$i]["origineFrConst"] = $enregistrement->origineFrConst;
            $tabConstituants[$i]["valNutri"] = $enregistrement->valNutri;
            $tabConstituants[$i]["valMinNutri"] = $enregistrement->valMinNutri;
            $tabConstituants[$i]["valMaxNutri"] = $enregistrement->valMaxNutri;
            $i++;
            $enregistrement = $select->fetch();
        }
       
        if ($tabConstituants == NULL){
            throw new ModeleExceptions (0);
        }
        else{     
            return $tabConstituants;
        }
    }
    
    public function retourneVisualiseRechAlim($alimRecherche){
        $maConnexion = new ConnexionBD();
        
        $select = $maConnexion->getConnexion()->query("SELECT * FROM Aliment WHERE nomFrAliment LIKE '%".$alimRecherche."%'");

        //mode de récupération par défaut
        $select->setFetchMode(PDO::FETCH_OBJ);
        $i=0;
        $tabElem = NULL;
        
        //traite les résultats en boucle
        $enregistrement = $select->fetch();
        while( $enregistrement )
        {
            $tabElem[$i]["numAliment"] = $enregistrement->numAliment;
            $tabElem[$i]["descFr"] = $enregistrement->nomFrAliment;
            $tabElem[$i]["descAn"] = $enregistrement->nomAnAliment ;
            $enregistrement = $select->fetch();
            $i++;
        }
        
        if ($tabElem == NULL){
            throw new ModeleExceptions (0);
        }
        else{     
            return $tabElem;
        } 
    }
    
    
    public function retourneVisualiseAlimGenre(){
        $maConnexion = new ConnexionBD();
      
        $req = "SELECT numAliment, nomFrAliment, Aliment.numGenre AS NG, nomFrGenre 
                FROM Aliment, Genre  
                WHERE Aliment.numGenre = Genre.numGenre
                ORDER BY Aliment.numGenre, nomFrGenre";
        
        $select = $maConnexion->getConnexion()->query($req);
        
        //mode de récupération par défaut
        $select->setFetchMode(PDO::FETCH_OBJ);
        $i=0;
        //traite les résultats en boucle
        $enregistrement = $select->fetch();
        $tabElem = NULL;
        
        while( $enregistrement )
        {
            $tabElem[$i]["numAliment"] = $enregistrement->numAliment;
            $tabElem[$i]["nomFrAliment"] = $enregistrement->nomFrAliment;
            $tabElem[$i]["numGenre"] = $enregistrement->NG;
            $tabElem[$i]["nomFrGenre"] = $enregistrement->nomFrGenre;
            $enregistrement = $select->fetch();
            $i++;
        }
        
        if ($tabElem == NULL){
            throw new ModeleExceptions (0);
        }
        else{     
            return $tabElem;
        } 
    }
    
    public function insereGenre($numGenre, $descFR, $descAN){
        $maConnexion = new ConnexionBD();

        //applique la méthode query sur l’objet $connection
        $req2 = "INSERT INTO Genre (numGenre, nomAnGenre, nomFrGenre) VALUES ('".$numGenre."', '".$descFR."', '".$descAN."');";
        
        $res = $maConnexion->getConnexion()->exec($req2);

        if (!$res){
            throw new ModeleExceptions (1);
        }
    }
    
    public function insereAliment($descFR, $descAN, $numGenre){
        $maConnexion = new ConnexionBD();
        //on recherche le maximum pour faire l'auto-incrément
        $req1 = "SELECT MAX(numAliment) AS maxNum FROM Aliment";

        $select1 = $maConnexion->getConnexion()->query($req1);

        //mode de récupération par défaut
        $select1->setFetchMode(PDO::FETCH_OBJ);

        //qu'une valeur donc pas de boucle
        $enregistrement1 = $select1->fetch();

        $num = $enregistrement1->maxNum;
        $num++;

        //applique la méthode query sur l’objet $connection
        $req2 = "INSERT INTO Aliment (numAliment, nomFrAliment, numGenre, nomAnAliment) VALUES (".$num.", '".$descFR."', '".$numGenre."', '".$descAN."');";
        $res = $maConnexion->getConnexion()->exec($req2);

       if (!$res){
            throw new ModeleExceptions (1);
        }
    }

    public function verifierConnexion($nameUser, $password) {
        $maConnexion = new ConnexionBD();
        
        $req = "SELECT *
                FROM USER
                WHERE nameUser = (".$nameUser.")'
                AND password = (".$password.")";
        
        $result = $maConnexion->getConnexion()->exec($req);
         if($result){
             return true;
         }
        else {
             return false;
 }
                
    }
    
    public function inscription($nameUser, $password){
        $maConnexion = new ConnexionBD();
        
        $req = "INSERT INTO USER (nameUser, password)
                VALUES ('".$nameUser."','".$password."');";
        
    $maConnexion->getConnexion()->exec($req);
      
        
        
    }
}

?>
