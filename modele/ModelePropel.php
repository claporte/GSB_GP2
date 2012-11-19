<?php

include 'ModeleInterface.php';
/**
 * Classe Modele
 * On se connecte à la base de donnée par l'intermédiare de la classe 
 * ConnexionBD
 * 
 * NB : on ne peut pas stocker la connexion à la BD une fois pour toute la 
 * session dans un attribut privé car PDO se déconnecte automatiquement à chaque fois
 *  
 * @author RChrtaufour
 */
include 'ModeleExceptions.php';


class ModelePropel implements ModeleInterface{

    private function getInit() {

        // Include the main Propel script
        require_once 'vendor/Propel/runtime/lib/Propel.php';

        // Initialize Propel with the runtime configuration
        Propel::init("modele/Propel/build/conf/Propel-conf.php");

        // Add the generated 'classes' directory to the include path
        set_include_path("modele/Propel/build/classes" . PATH_SEPARATOR . get_include_path());
      
    }

    public function retourneAliment(){
        $this->getInit();
        
        $aliments = AlimentQuery::create()->find();
            
        $i=0;
        $tabElem = NULL;
        foreach($aliments as $aliment) {
            $tabElem[$i]["numAliment"] = $aliment->getNumaliment();
            $tabElem[$i]["descFr"] = $aliment->getNomfraliment() ;
            $tabElem[$i]["descAn"] = $aliment->getNomfraliment() ;
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
        $this->getInit();
        
        //"SELECT DISTINCT(citationSource) FROM Source"
        
        $c = new Criteria();
        $c->addSelectColumn(SourcePeer::CITATIONSOURCE);
        $c->SetDistinct();
        
        $sources = SourcePeer::doSelectStmt($c);

        $i=0;
        $tabElem = NULL;
        foreach($sources as $source) {
            $tabElem[$i]["citationSource"] = $source["CITATIONSOURCE"];
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
        $this->getInit();
        
        //SELECT * FROM Constituant
        $consts = ConstituantQuery::create()
                ->find();
       
        $tabElem = NULL;
        $i=0;
        foreach($consts as $const) {
            $tabElem[$i]["numConst"] = $const->getNumconst();
            $tabElem[$i]["origineFrConst"] = $const->getOriginefrconst();
            $tabElem[$i]["origineAnConst"] = $const->getOrigineAnConst();
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
        $this->getInit();
        
        //SELECT * FROM Genre
        $genres = GenreQuery::create()
                ->find();
 
        $tabElem = NULL;
        $i=0;
        foreach($genres as $genre) {
            $tabElem[$i]['numGenre'] = $genre->getNumgenre();
            $tabElem[$i]['descFr'] = $genre->getNomfrgenre();
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
        $this->getInit();
            
        /*SELECT *
                FROM CompNutri, Constituant, Aliment
                WHERE CompNutri.numConst = Constituant.numConst
                    AND Aliment.numAliment = CompNutri.numAliment
                    AND CompNutri.numAliment  = ".$numAlim.";"; 
        */
        
        $compnutris = CompNutriQuery::create()
                ->filterByNumaliment($numAlim)
                ->find();
        $i=0;
        $tabElem = NULL;
        
        foreach($compnutris as $compnutri) {
            $tabElem[$i]["origineFrConst"] = $compnutri->getConstituant()->getOriginefrconst();
            $tabElem[$i]["valNutri"] = $compnutri->getValnutri();
            $tabElem[$i]["valMinNutri"] = $compnutri->getValminnutri();
            $tabElem[$i]["valMaxNutri"] = $compnutri->getValmaxnutri();
            $i++;
        }
        if ($tabElem == NULL){
            throw new ModeleExceptions (0);
        }
        else{     
            return $tabElem;
        }
    }
    
    public function retourneVisualiseRechAlim($alimRecherche){
        $this->getInit();
        
        //SELECT * FROM Aliment WHERE nomFrAliment LIKE '%".$alimRecherche."%'

        $aliments = AlimentQuery::create()
                ->filterByNomfraliment('%'.$alimRecherche.'%')
                ->find();
        
        $i=0;
        $tabElem = NULL;
        foreach($aliments as $aliment) {
            $tabElem[$i]["numAliment"] = $aliment->getNumaliment();
            $tabElem[$i]["descFr"] = $aliment->getNomfraliment() ;
            $tabElem[$i]["descAn"] = $aliment->getNomfraliment() ;
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
        $this->getInit();
      
        /*"SELECT numAliment, nomFrAliment, Aliment.numGenre AS NG, nomFrGenre 
                FROM Aliment, Genre  
                WHERE Aliment.numGenre = Genre.numGenre
                ORDER BY Aliment.numGenre, nomFrGenre";*/
        $aliments = AlimentQuery::create()->orderByNumgenre()
                        ->useGenreQuery()->orderByNomfrgenre()
                        ->endUse()
                    ->find();
        $i=0;
        $tabElem = NULL;
        foreach($aliments as $aliment) {
            $tabElem[$i]["numAliment"] = $aliment->getNumaliment();
            $tabElem[$i]["nomFrAliment"] = $aliment->getNomfraliment();
            $tabElem[$i]["numGenre"] = $aliment->getNumgenre();
            $tabElem[$i]["nomFrGenre"] = $aliment->getGenre()->getNomfrgenre();
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
        $this->getInit();
        
        $ge = new Genre();
        $ge->setNumgenre($numGenre);
        $ge->setNomfrgenre($descFR);
        $ge->setNomangenre($descAN);
        
        try {
            $res = $ge->save();
        }
        catch (Exception $ex){
            throw new ModeleExceptions (2);
        }
        if (!$res){
            throw new ModeleExceptions (1);
        }
    }
    
    public function insereAliment($descFR, $descAN, $numGenre){
        $this->getInit();
        //on recherche le maximum pour faire l'auto-incrément
        $dernierAliment = AlimentQuery::create()
                ->withColumn('COUNT(Aliment.numAliment)','somme')
                ->find();
     
        $aliment = $dernierAliment[0];
        $num = $aliment->getSomme();
        
        $al = new Aliment($num);
        $al->setNumaliment($numGenre);
        $al->setNomfraliment($descFR);
        $al->setNomanaliment($descAN);
        $res = $al->save();
        //$req2 = "INSERT INTO Aliment (numAliment, nomFrAliment, numGenre, nomAnAliment) VALUES (".$num.", '".$descFR."', '".$numGenre."', '".$descAN."');";
        //$res = $maConnexion->getConnexion()->exec($req2);

        if (!$res){
            throw new ModeleExceptions (1);
        }
    }
  
    /*
     * Les aliments qui ont $nomGenre dans le nom de leur genre 
     * 
     * retourne tabAliments : tableau associatif de la forme 
     * $tabElem[$i]["numAliment"] 
     * $tabElem[$i]["nomFrAliment"] 
     * $tabElem[$i]["nomFrGenre"] =
     */
    
    public function getAlimentsSelonGenre($nomGenre){
        /*SELECT Aliment . *
         FROM Aliment, Genre
         WHERE Aliment.numGenre = Genre.numGenre
             AND Genre.nomFrGenre LIKE '%Fromage%'*/
        
        $this->getInit();
        //on recherche le maximum pour faire l'auto-incrément
        $lesAliments = AlimentQuery::create()
                ->useGenreQuery()
                    ->filterByNomfrgenre('%'.$nomGenre.'%')
                ->endUse()
                ->find();
        
        $i=0;
        $tabElem = NULL;
        foreach($lesAliments as $aliment) {
            $tabElem[$i]["numAliment"] = $aliment->getNumaliment();
            $tabElem[$i]["nomFrAliment"] = $aliment->getNomfraliment();
            $tabElem[$i]["nomFrGenre"] = $aliment->getGenre()->getNomfrgenre();
            $i++;
        }
        
        if ($tabElem == NULL){
            throw new ModeleExceptions (0);
        }
        else{     
            return $tabElem;
        }
    }
     public function verifierConnexion(){
       //TODO
         
               
       
   }
    
    
    /*
     * @author RCHristaufour
     * 
     * Les aliments qui ont une valeur minimale de $min 
     * et maximale de $max d'un constituant $nomConst
     * 
     * @return 
     * retourne tabAliments : tableau associatif de la forme 
     * $tabElem[$i]["numAliment"] 
     * $tabElem[$i]["nomFrAliment"] 
     * $tabElem[$i]["nomFrGenre"] =
     */
     public function getAlimentsSelonConstituant($nomConst, $min, $max){
        /* exemple : les aliments qui ont plus de 50% d'eau 
          SELECT Aliment . *
            FROM Constituant, CompNutri, Aliment
            WHERE origineFrConst LIKE "Eau (g/100g)"
                AND Aliment.numAliment = CompNutri.numAliment
                AND Constituant.numConst = CompNutri.numConst
                AND valMinNutri >50*/
        
        $this->getInit();
        
        $lesAliments = AlimentQuery::create()
                ->useCompNutriQuery()
                    ->filterByValminnutri(array('min' => $min, 'max' => $max))
                    ->useConstituantQuery()
                        ->filterByOriginefrconst('%'.$nomConst.'%')
                        ->endUse()
                    ->endUse()
                ->find();
        
        $i=0;
        $tabElem = NULL;
        foreach($lesAliments as $aliment) {
            $tabElem[$i]["numAliment"] = $aliment->getNumaliment();
            $tabElem[$i]["nomFrAliment"] = $aliment->getNomfraliment();
            $tabElem[$i]["nomFrGenre"] = $aliment->getGenre()->getNomfrgenre();
            $i++;
        }
        
        if ($tabElem == NULL){
            throw new ModeleExceptions (0);
        }
        else{     
            return $tabElem;
        }
    }
    
    // ---------------------------------- ACTIVITE SLAM 3 ------------------------------------
     
    
        /*
     * 
     * Les genres qui n'apparaissent jamais dans les aliments
        SELECT *
        FROM Genre
        WHERE numGenre NOT IN (SELECT numGenre
                                FROM Aliment
        )
     * 
     */
    public function getGenresPasDansAliment (){
        $this->getInit();

        /*v*/
        
        $notInQuery = sprintf(
            'SELECT %s FROM %s',
            AlimentPeer::NUMGENRE,
            AlimentPeer::TABLE_NAME
        );
 
        $c = new Criteria();
        $crit0 = $c->getNewCriterion(GenrePeer::NUMGENRE, $notInQuery, Criteria::NOT_IN);
 
        // Remember to change the peer class here for the correct one in your model
        $c->add($crit0);
        $result = SourcePeer::doSelect($c);
      
        foreach( $result as $rc)
            echo  $rc;
     }

     
    /*
     * 
     * Le numéro des sources qui apparaissent plus de 2 fois dans les compositions nutritionnelles
        SELECT CompNutri.numSource, COUNT(*)
        FROM CompNutri
        GROUP BY numSource
        HAVING COUNT(*)>2
     */
     
     public function getNumSourcesCompNutri($nb){
        $this->getInit();
        
        $lesCompNutri = CompNutriQuery::create()
                ->withColumn('COUNT(*)', 'nbFois')
                ->groupBy('CompNutri.numSource')
                ->having('COUNT(*)>2')
                ->limit(10)
                ->find();
        
        //A TERMINER echo $lesCompNutri;
        
        /*$i=0;
        $tabElem = NULL;
        foreach($lesAliments as $aliment) {
            $tabElem[$i]["numAliment"] = $aliment->getNumaliment();
            $tabElem[$i]["nomFrAliment"] = $aliment->getNomfraliment();
            $tabElem[$i]["nomFrGenre"] = $aliment->getGenre()->getNomfrgenre();
            $i++;
        }
        
        if ($tabElem == NULL){
            throw new ModeleExceptions (0);
        }
        else{     
            return $tabElem;
        }*/
    }
    
    /*
     * 
     * Le numéro des sources qui n'apparaissent jamais dans les compositions nutritionelles
     SELECT *
     FROM Source
        WHERE numSource NOT IN (SELECT numSource
        FROM CompNutri)

     * 
     */
     public function getSourcesPasDansCompNutri (){
        $this->getInit();

        $c = new Criteria();
 
        $notInQuery = sprintf(
            '%s NOT IN (SELECT %s FROM %s)',
            SourcePeer::NUMSOURCE,
            CompNutriPeer::NUMSOURCE,
            CompNutriPeer::TABLE_NAME
        );
 
        $c->add(SourcePeer::NUMSOURCE, $notInQuery, Criteria::CUSTOM);
 
        $result = SourcePeer::doSelect($c);

        foreach( $result as $rc)
            echo  $rc;
     }
  
    //- Les 10 aliments qui possèdent le plus de sucre (dont la valeur Max nutritionnelle du composant sucre)
    //est la plus grande
    
    /*
     * SELECT Aliment . * , origineFrConst, valMaxNutri
        FROM CompNutri, Constituant, Aliment
        WHERE Constituant.numConst = CompNutri.numConst
        AND Aliment.numAliment = CompNutri.numAliment
        AND origineFrConst LIKE "%Sucre%"
        ORDER BY CompNutri.valMaxNutri DESC
        LIMIT 0 , 10
     */
    //- Les aliments qui ont tous les constituants renseignés 
        /*SELECT CompNutri.numAliment, nomFrAliment, COUNT(*)
        FROM Aliment, CompNutri
        WHERE Aliment.numAliment = CompNutri.numAliment
        GROUP BY CompNutri.numAliment, nomFrAliment
        HAVING COUNT(*) = (SELECT COUNT(*)
                           FROM Constituant);*/
    
    /*Le nombre d'aliments qui ont tous les constituants renseignés (2 requêtes)
    CREATE VIEW test AS (SELECT CompNutri.numAliment, nomFrAliment, COUNT(*) AS nbAlim
        FROM Aliment, CompNutri
        WHERE Aliment.numAliment = CompNutri.numAliment
        GROUP BY CompNutri.numAliment, nomFrAliment
        HAVING COUNT(*) = (SELECT COUNT(*)
                           FROM Constituant));
    */
    
       
    //- Le nombre de constituants par aliment
    /*  SELECT CompNutri.numConst, COUNT(*) AS nbAliments
            FROM CompNutri, Constituant
            WHERE CompNutri.numConst = Constituant.numConst
            GROUP BY CompNutri.numConst
         * 
         * -> Tous à 1440, peu d'intérêt (ils sont tous renseignés pour tous les aliments
         */
    
   
    /*Est-ce que tous les aliments ont tous les constituants renseignés ? Si non lesquels ? 
         SELECT *
        FROM Aliment
        WHERE numAliment NOT
        IN (
                SELECT numAliment
                FROM test
        )
     * 
     */
    


}

?>
