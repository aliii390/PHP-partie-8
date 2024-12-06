<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<a href="page2.php">Submit</a>
<?php 

// session_start();


$nom = "Jean";
$prenom = "Jacques";
$age = 35;

$_SESSION['nom']= $nom;
$_SESSION['prenom'] = $prenom;
$_SESSION['age'] = $age;



?>

</body>
</html>