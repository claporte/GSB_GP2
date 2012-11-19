<BR>
 
<?php
    $dns = 'mysql:host=localhost;dbname=S4A4_2';
    $utilisateur = 'root';
    $motDePasse = 'root';

    //création d’un objet PDO
    $connection = new PDO( $dns, $utilisateur, $motDePasse, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8" ));

    //applique la méthode query sur l’objet $connection
    $req = "SELECT * FROM Aliment WHERE nomFrAliment LIKE '%".$_POST['nomAliment']."%';";
    //echo $req;
    $select = $connection->query($req);

    //mode de récupération par défaut
    $select->setFetchMode(PDO::FETCH_OBJ);

    //traite les résultats en boucle
    while( $enregistrement = $select->fetch() )
    {
        echo $enregistrement->numAliment, ' ', $enregistrement->nomFrAliment, "<BR/>" ;
    }

?>

</BODY>
</HTML>

