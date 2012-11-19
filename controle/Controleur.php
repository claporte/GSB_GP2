<?php
include 'vue/Vue.php';
//include 'modele/ModelePropel.php';
include 'modele/ModelePDO.php';



class Controleur {
    private $vue;
    private $modele;
    
    public function __construct() {
        $this->vue = new Vue();
        $this->modele = new ModelePDO();
    }

    public function doGetPost($tabParametres){
        //action visualiser aliments

        switch ($tabParametres["action"]){
            
            case 'connexion':
                $this->vue->afficheConnexion();
            
            case "index" :
                $this->vue->afficheIndex();
                break;
            
            case "visualiserAliments" :
                try {
                    //on va chercher les infos dans le modèle
                    $result = $this->modele->retourneAliment();
                    //on les affiche à la vue
                    $this->vue->afficheLesAliments($result);
                }
                catch(ModeleExceptions $ex){
                    $this->vue->afficheException($ex->getMessageErreur());
                }
                break;
            
            case "visualiserSources" :
                try {
                    //on va chercher les infos dans le modèle
                    $result = $this->modele->retourneSources();
                    //on les affiche à la vue
                    $this->vue->afficheLesSources($result);
                }
                catch(ModeleExceptions $ex){
                    $this->vue->afficheException($ex->getMessageErreur());
                }
                break;
            
            case "visualiserComposants" :
                try {
                    //on va chercher les infos dans le modèle
                    $result = $this->modele->retourneComposants();
                    //on les affiche à la vue
                    $this->vue->afficheLesComposants($result);
                }
                catch(ModeleExceptions $ex){
                    $this->vue->afficheException($ex->getMessageErreur());
                }
                break;
            
            case "insereAliment":
                // insereAliment?descFR=Cantal&descAN=Cantal&numGenre=06.6
                try {
                    $ok = $this->modele->insereAliment($tabParametres["descFR"], $tabParametres["descAN"], $tabParametres["numGenre"]);
                    $this->vue->afficheInsertAlimentOK();
                }
                catch(ModeleExceptions $ex){
                     $this->vue->afficheInsertAlimentNonOK();
                }
                break;
                
            case  "visualiseConstAlim":
                try {
                    //visualiseConstAlim&numAlim=1017
                    $result = $this->modele->retourneConstAlim($tabParametres["numAlim"]);

                    $this->vue->afficheConstAlim($result, $tabParametres["numAlim"]);
                }
                catch(ModeleExceptions $ex){
                    $this->vue->afficheException($ex->getMessageErreur());
                }
                break;
            
            case "visualiseFormConstAlim":
                try {
                    //on va chercher les aliments...
                    $tabAliments = $this->modele->retourneAliment();
                    //pour les afficher dans le formulaire
                    $this->vue->afficheFormConstAlim($tabAliments);
                }
                catch(ModeleExceptions $ex){
                    $this->vue->afficheException($ex->getMessageErreur());
                }
                break;
            
            case "visualiseAlimGenre":
                try {//visualiseAlimGenre
                    $result = $this->modele->retourneVisualiseAlimGenre();

                    $this->vue->afficheVisualiseAlimGenre($result);
                }
                catch(ModeleExceptions $ex){
                    $this->vue->afficheException($ex->getMessageErreur());
                }
                break;
            
            case "visualiseRechAlim":
                //visualiseRechAlim
                try {
                    $result = $this->modele->retourneVisualiseRechAlim($tabParametres["alimRecherche"]);

                    $this->vue->afficheVisualiseRechAlim($result);
                }
                catch(ModeleExceptions $ex){
                    $this->vue->afficheException($ex->getMessageErreur());
                }
                break;
            
            case "visualiseFormRechAlim":
                $this->vue->afficheVisualiseFormRechAlim();
                break;
            
            case "insereGenre":
                //action=insereGenre&numGenre=22&descFR=Sauce%20Mac%20Do&descAN=Sauce%20Mac%20Do
                try{
                    $ok = $this->modele->insereGenre($tabParametres["numGenre"], $tabParametres["descFR"], $tabParametres["descAN"]);
                    $this->vue->afficheInsertGenreOK();
                }
                catch(ModeleExceptions $ex){
                     $this->vue->afficheInsertGenreNonOK($ex->getMessageErreur());
                }
                break;
            case "insereFormGenre":
                //On n'affiche ici que le formulaire (on ne va rien chercher 
                //dans le modèle
                $this->vue->afficheFormInsertGenre();
                break;
            
            case "insereFormAliment":
                
                try {//On va chercher la liste des genres dans le modèle
                    $genres = $this->modele->retourneGenres();

                    $this->vue->afficheFormInsertAliment($genres);
                }
                catch(ModeleExceptions $ex){
                    $this->vue->afficheException($ex->getMessageErreur());
                }
                break;
            
            case "insereFormGenre":
                //On n'affiche ici que le formulaire (on ne va rien chercher 
                //dans le modèle
                $this->vue->afficheFormInsertGenre();
                break;
            
            case "testModele":
                //$result = $this->modele->getAlimentsSelonGenre("Fromage");
                //$this->modele->getAlimentsSelonConstituant("Eau", 50, 100);
                //$this->modele->getSourcesPasDansCompNutri();
                $this->modele->getGenresPasDansAliment();
                break;
            
            case "connecter" :
                $result = $this->modele->verifierConnexion($tabParametres["nameUser"], $tabParametres["password"]);
                if($result){
                    
                }
                else {
                    $this->vue->incription();
     
                 }
                
            break;
            
            case "inscription":
                $result = $this->modele->inscription($tabParametres["nameUser"], $tabParametres["password"]);
                if($result){
                
                }
                else {
             
 }
            break;
            
            case "afficheConnexion":
                $this->vue->affichePageConnexion();
            break;
            

            default ://l'action est vide (ou non reconnue)
                $this->vue->afficheActionVideNonReconnue();
                break;
        }
            
    }
   
}

?>
