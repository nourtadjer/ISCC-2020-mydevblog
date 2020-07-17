<?php
 
if(!empty($_POST['Votre nom'])AND !empty($_POST['Votre e-mail']) AND !empty($_POST['Votre message']))
{
 
}
else{
 $msg="Veuillez renseigner tous les champs!";
}
 
?>
<!DOCTYPE html>
<html>
    <body>
    <head> 
    <head> 
      <meta charset="utf-8">
      <link rel="stylesheet" href="contacts.css" media="screen" type="text/css" />
</head> 
        <h1> Contacts </h1>
</head>
<ul>
  <li><a href="front.php">Accueil</a></li>
  <li><a href="articles.php">Articles</a></li>
  <li><a href="contacts.php">Contacts</a></li>
</ul>
</header>
<h2> Nous contacter</h2>
<h3> Insérez vos coordonnées afin que vous puissiez nous envoyer un message!</h3>

<form method="POST" action="">
    <input type="text" name="nom" placeholder="Votre nom"/><br/><br/>
    <input type="email" name="mail" placeholder="Votre e-mail"/> <br/><br/>
    <textarea name="message" placeholder="Votre message"></textarea> <br/><br/>
    <input type="submit" value="Envoyer!" name="mailform"><br/><br/>
</form>
<div class="image_footer_container"> <img class="image_footer" src="Dameafrique.jpg" alt="description" /> </div>