<BR>
<?php 
	// le code AJAX envoie
	//page.php?nom=lavaleurdeinput
	//si la valeur que j'ai entrée dans l'input = "Fabrice" on affiche
	if ($_POST['nom'] == "Fabrice") {
		echo ("Bonjour, toi je te connais Fabrice");
                //par exemple on ajoute une liste déroulante dans un autre formulaire
                ?>
                    <BR>
                    <FORM action="bonjour.php">
                          <SELECT name="hop" size="1">
                          <OPTION>lundi
                          <OPTION>mardi
                          <OPTION>mercredi
                          <OPTION>jeudi
                          <OPTION>vendredi
                          </SELECT>
                    </FORM>
                <?php
        }
	else
		echo ("Bonjour je ne te connais pas : ".$_POST['nom']);
?>
</BODY>
</HTML>

