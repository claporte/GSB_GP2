<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author adproflocal
 */
interface ModeleInterface {
    public function retourneAliment();
    public function retourneSources();
    public function retourneComposants();
    public function retourneGenres();
    public function retourneConstAlim($numAlim);
    public function retourneVisualiseRechAlim($alimRecherche);
    public function retourneVisualiseAlimGenre();
    public function insereGenre($numGenre, $descFR, $descAN);
    public function insereAliment($descFR, $descAN, $numGenre);
    public function verifierConnexion($nameUser,$password);
}

?>
