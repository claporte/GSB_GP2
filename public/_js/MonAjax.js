    /* 
     * To change this template, choose Tools | Templates
     * and open the template in the editor.
     */
var xhr = null;
// Fonction de creation de l'objet XMLHttpRequest qui resservira pour chaques fonctions AJAX
function getXhr(){
    //on crée l"objet XMLHttpRequest (pour résumer c'est cet objet qui fait des requêtes HTTP au serveur
    //en discutant par le langage XML)
    //il est créé avec un constructeur différent que l'on soit sous IE (Microsoft) ou Mozilla 
    if(window.XMLHttpRequest) 
        xhr = new XMLHttpRequest(); 
    else 
        if(window.ActiveXObject){  
            try{
                xhr = new ActiveXObject("Msxml2.XMLHTTP");
            }
            catch (e){
                xhr = new ActiveXObject("Microsoft.XMLHTTP");
            }
        }
        else { 
            alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest, veuillez le mettre � jour"); 
            xhr = false; 
        } 

    return xhr;
}

// Premiere fonction : remplacer le contenu d'un div
function rechercheAliment(monAction){
/*document.getElementById('test').innerHTML = "allo"; 
    //on construit l'objet XMLHttpRequest qui permet de discuter avec le serveur
    xhr = getXhr();
    xhr.onreadysatechange = function()            {
        if(xhr.readyState == 4 && xhr.status == 200)
        {
                //une page HTML = une arborescence DOM que l'on peut utiliser en JAVASCRIPT
                //exemple : pour récupérer en JS la valeur de l'inmput text qui a comme id "txt", on fait document.getElementById('txt').value
                      //là, on va ajouter à l'objet document HTML en cours qui a comme id "reponseNom" le code généré dans la page de test
                document.getElementById('test').innerHTML = xhr.responseText;
        }
    }

    xhr.open("post",'do.php',true);
    //format de l'entête de la requête http
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    //on passe au serveur la requête http://localhost/page.php?nom=lavaleurduchamp (on rajoute les paramètres en POST)
    xhr.send("action="+monAction);*/
    
            //on construit l'objet XMLHttpRequest qui permet de discuter avec le serveur
        xhr = getXhr();

        xhr.onreadystatechange = function()            {
            if(xhr.readyState == 4 && xhr.status == 200)
            {
                    document.getElementById('test').innerHTML = xhr.responseText;
            }
        }
        
        xhr.open("POST",'do.php',true);
        
        xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
        
        xhr.send("action="+monAction);

}

 function afficheAlim(monAction, maValeur){

      xhr = getXhr();

        xhr.onreadystatechange = function()            {
            if(xhr.readyState == 4 && xhr.status == 200)
            {
                    document.getElementById('reponseAlim').innerHTML = xhr.responseText;
            }
        }
        
        xhr.open("POST",'do.php',true);
        
        xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
        
        xhr.send("action="+monAction+"&alimRecherche="+maValeur);
 }
function connexion(monAction){
    xhr = getXhr();

        xhr.onreadystatechange = function()            {
            if(xhr.readyState == 4 && xhr.status == 200)
            {
                    document.getElementById('Conexion').innerHTML = xhr.responseText;
            }
        }
        
        xhr.open("POST",'do.php',true);
        
        xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
        
        xhr.send("action="+monAction);
 }
}
