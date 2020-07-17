<?php

session_start();

?>

<!DOCTYPE html>
<html>
 
<body>
 
 <head>
           <meta charset="utf-8">
           <link rel="stylesheet" href="articles.css" media="screen" type="text/css" />
 </head>
         <header>
        
           <h1>Articles sur l'Algérie</h1>
           
 <ul>
             <li><a href="front.php">Accueil</a></li>
             <li><a href="articles.php">Articles</a></li>
             <li><a href="contacts.php">Contacts</a></li>
 </ul>
 <br/><br/>
 <div class="image_footer_container"> <img class="image_footer" src="Alger_Grande-Poste.jpg" alt="description" /> </div>

     <?php include_once("singleton.php");?>
    

</body>
</html> 
