

<?php 

session_start();

$login =  $_POST['login'];

$mdp = $_POST['mdp'];

$_SESSION['login']= $login;

$_SESSION['mdp'] = $mdp;

setcookie('login', $_POST['login']);
setcookie('mdp', $_POST['mdp']);




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<p>

<?php 


    echo "Bienvenue". " ". $_SESSION['login'] . "<br>";
    
    echo $_SESSION['mdp'];

 

?>
</p>
<a href="./index.php">Modifier mes data</a>
</body>
</html>