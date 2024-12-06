

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h3> user agent = 
    <?php
    echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";
    ?>
</h3>

<h3> adresse ip = 
    <?php
    echo $_SERVER['REMOTE_ADDR'] . "\n\n";
    ?>
</h3>

<h3> nom du serveur = 
    <?php
    echo $_SERVER['SERVER_NAME'] . "\n\n";
    ?>
</h3>

</body>
</html>