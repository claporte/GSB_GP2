<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Classe d'affichage HTML
 *
 * @author F. Missonnier
 */
class Vue {
    

    
    public function afficheonnexion(){
        include 'pConnexion.html';
    }


    public function afficheIndex(){
       // $this->getDebutPage("Bienvenue sur le site JC Decaux"); 
        
        //include de l'index de jcDecaux pour pointer dessus
        include 'templateDebut.php';
        include 'pIndexAvecAjax.php';
        include 'templateFin.php';
        /*
        ?>     
            <a href="do.php?action=visualiserAliments"> Visualiser aliments </a><BR/>
            <a href="do.php?action=visualiserComposants"> Visualiser composants</a><BR/>
            <a href="do.php?action=visualiserSources"> Visualiser sources </a><BR/>
            <a href="do.php?action=insereFormGenre">Insérer un genre</a><BR/>
            <a href="do.php?action=insereFormAliment"> Insérer un aliment</a><BR/>
            <a href="do.php?action=visualiseFormConstAlim"> Visualiser les constituants d'un aliment</a><BR/>
            <a href="do.php?action=visualiseAlimGenre"> Visualiser les aliments triés par genre</a><BR/>
            <a href="do.php?action=visualiseFormRechAlim"> Rechercher un aliment</a><BR/><BR/>
        
            <a href="do.php?action=testModele"> Test</a><BR/>
        <?php*/
       // $this->getRetourAccueil();
        //$this->getFinPage();
    }
    
    public function afficheActionVideNonReconnue(){
        
        ?>
            Vous tentez d'afficher une page non reconnue <BR/>
            <a href="do.php?action=index"> 
        <?php
         
    }
    
    public function afficheLesAliments ($tabAliments){
        $nb = count ($tabAliments);
        
        for($i=0;$i<$nb;$i++ ){
            echo($tabAliments[$i]["numAliment"]." ". $tabAliments[$i]["descFr"]."<BR/>");
        }
        
    }
    
     public function afficheLesComposants($result){
         
        $nb = count ($result);
        
        for($i=0;$i<$nb;$i++){
            echo($result[$i]["numConst"]." ". $result[$i]["origineFrConst"].' '.$result[$i]["origineAnConst"]."<BR/>");
        }
       
    }
    
    public function afficheLesSources ($result){
        $nb = count ($result);
        
        for($i=0;$i<$nb;$i++){
            echo($result[$i]["citationSource"]."<BR/>");
        }
   
    }
     
    public function afficheVisualiseAlimGenre ($result){    
        $nb = count ($result);
        
        for($i=0;$i<$nb;$i++){
            echo ($result[$i]["numAliment"].' '.$result[$i]["nomFrAliment"].' '.$result[$i]["numGenre"]
                    .' '.$result[$i]["nomFrGenre"]."<BR/>");
        }
       
    }
    
    public function afficheVisualiseRechAlim ($result){
        if (count($result)==0){?>
            Pas de résultat
        <?php
        }
        else{
            $nb = count ($result);
        
            for($i=0;$i<$nb;$i++){
                echo ($result[$i]["numAliment"].' '.$result[$i]["descFr"].' '.$result[$i]["descAn"]
                    ."<BR/>");
            }
        }
        
        $this->getRetourAccueil();
        $this->getFinPage();
    }
    
    public function afficheConstAlim($tabConstituants, $numAlim){
        $this->getDebutPage("Affichage des composants de l'aliment");
        ?>
        <h2> Valeurs nutritionnelles pour l'aliment numéro<?php echo($numAlim); ?></h2>
        <TABLE BORDER=1>
        <TR>
        <TH> Constituant </TH>
        <TH> Valeur moyenne </TH>
        <TH> Valeur minimale </TH>
        <TH> Valeur maximale</TH></TR>
        
        <?php
        $nbElems = count($tabConstituants);

        for($i=0; $i<$nbElems ; $i++){
            echo("<TR><TD>".$tabConstituants[$i]["origineFrConst"]."</TD><TD>".$tabConstituants[$i]["valNutri"].
                    "</TD><TD>".$tabConstituants[$i]["valMinNutri"]."</TD><TD>"
                    .$tabConstituants[$i]["valMaxNutri"]."</TD></TR>");
        }
        
        $this->getRetourAccueil();
        $this->getFinPage();
    }
    
    public function afficheFormConstAlim($tabAliments){
        $this->getDebutPage("Choisir un aliment pour connaitre sa constitution");
        
        ?>
        <form action="do.php" method="POST">
            Quelle description d\'aliment voulez-vous ? <BR/><BR/>
        
        <?php
        //on construit la liste (bouton radio) des aliments
        $nb = count ($tabAliments);
        
        for($i=0;$i<$nb;$i++ )
        {	 	
            echo ("<INPUT type='radio' name='numAlim' value='". $tabAliments[$i]["numAliment"]. "'>". $tabAliments[$i]["descFr"]. "<BR/>");
        }
        
        ?> <input type="hidden" name="action" value="visualiseConstAlim">
                <input type="submit" value="Envoyer" />
                <input type="reset" value="Annuler" />
        </form>
        <?php
        $this->getFinPage();
    }
    
     public function afficheVisualiseFormRechAlim(){

        ?>
             Rechercher aliment :
            <input type="text" id="inputRech"  size="20" /><BR/><BR/>
            <input type="button" onclick="afficheAlim('visualiseRechAlim', document.getElementById('inputRech').value);" value="OK"> 
            <input type="reset" value="Annuler" />
            <div id="reponseAlim">
            </div>

        <?php

    }
    
    public function afficheInsertGenreOK(){
        $this->getDebutPage("Insertion OK");
        ?>
        Le genre est bien inséré
        <?php
        $this->getRetourAccueil();
        $this->getFinPage();
    }
     
    public function afficheInsertGenreNonOK($message){
        $this->getDebutPage("Insertion pas bien déroulée");
        ?> Le genre n'a pas été inséré : <?php echo ($message); ?><BR/>
        <?php
        $this->getRetourAccueil();
        $this->getFinPage();
    }
    
    public function afficheInsertAlimentOK(){
        $this->getDebutPage("Insertion OK");
        ?>
        L'aliment est bien inséré
        <?php
        $this->getRetourAccueil();
        $this->getFinPage();
    }
     
    public function afficheInsertAlimentNonOK(){
        $this->getDebutPage("Insertion pas bien déroulée");
        ?>
        L'aliment n'a pas été inséré
        <?php
        $this->getRetourAccueil();
        $this->getFinPage();
    }
    
    public function afficheFormInsertGenre(){
        $this->getDebutPage("Insertion d'un genre");
        //attention : dans le formulaire, l'action envoyée est 
        //de la forme do.php?action=insereGenre&descAn=MyTaylorIsRich&descFr=Jaimelafwance
        //pour envoyer le paramètre insereGenre, il faut le placer dans un input caché
        
        ?>
            <form action="do.php " method="GET">
                    Numéro du genre
                    <input type="text" name="numGenre" size="20" ><BR/><BR/>
                    Description du genre (AN)
                    <input type="text" name="descAN" size="20" ><BR/><BR/>
                    Description du genre (FR)
                    <input type="text" name="descFR" size="20" >
                    <br/><br/>
                    <input type="hidden" name="action" value="insereGenre">
                    <input type="submit" value="Envoyer" >
                    <input type="reset" value="Annuler" >
                </form>
        <?php
        
        $this->getFinPage();
    }
    
    public function afficheFormInsertAliment($genres){
        $this->getDebutPage("Insertion d'un aliment");
        
        //voir commentaire précédent pour le champ caché    
        //on construit la liste de genres en fonction du tableau que la vue nous 
        //a passé    
        ?>
        <form action="do.php " method="GET">
            Description de l'aliment (AN)
            <input type="text" name="descAN" size="20" ><BR/><BR/>
            Description de l'aliment (FR)
            <input type="text" name="descFR" size="20" ><BR/><BR/>
            Genre <select name='numGenre' size='1'>
            <?php 
            $nbElems = count($genres);
            
            for($i=0; $i<$nbElems ; $i++){
                echo('<option value="'.$genres[$i]["numGenre"]. '"> '.$genres[$i]["numGenre"]. ' '. $genres[$i]["descFr"].'</option>');
            }

        ?> </select><br/><br/>
            <input type="hidden" name="action" value="insereAliment">
            <input type="submit" value="Envoyer" >
            <input type="reset" value="Annuler" >
            </form>
        <?php
        $this->getFinPage();
    }
    
    public function afficheException ($texte){
        $this->getDebutPage("Erreur");?>
        Erreur dans la page :
        <?php
        echo ($texte);
        $this->getRetourAccueil();
        $this->getFinPage();

        }
        
        public function affichePageConnexion(){
            include "templateDebut.php";
            include "pConnexion.php";
            include "templateFin.php";
        }
        
        public function incription(){
            include 'vue/pInscription.html';
        }
}


?>
