<?php 
function connect_to_database(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "devblog2";
  
try {
   $pdo= new PDO("mysql:host=$servername;dbname=$databasename",$username, $password);
   $pdo ->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo ""."<br/>";
        return $pdo;
       
}        catch (PDOException $e){
           echo "". $e->getMessage();
       }
   
}

$pdo=connect_to_database();

$users= $pdo->query("SELECT*FROM articles")->fetchALL();

foreach ($users as $user){
    echo "<br/><br/><a href=articles.php>".$user["Titre"]."</a><br/><br/><br/>";
    echo $user["Extrait"]."</a><br/><br/>";
    echo $user["Texte"]."</a><br/><br/>";
    echo $user["Auteur"]."</a><br/><br/>";
    echo $user["Date"]."</a><br/><br/>";
    echo "<img src='".$user["Image"]."'/>";

}
?>
