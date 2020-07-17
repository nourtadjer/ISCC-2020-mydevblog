<?php 

session_start();
var_dump($_POST);
echo $_POST["password"];

     
?>
<?php
header('Location:http://localhost/ISCC/ISCC-2020-mydevblog/ISCC-2020-mydevblog/front.php');
exit();
?>