<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    echo $_SESSION['user']['nom'] . " " . $_SESSION['user']['prenom'];
    $cle = $_SESSION['user']['id_client'];
    $pdo = new PDO("mysql:host=localhost;dbname=imoobilier", "root", "");
    $commnade = $pdo->query("SELECT nom, prenom ,cin from client WHERE id_client=$cle");
    $location = $commnade->fetchAll(PDO::FETCH_ASSOC);
    print_r($location);
    ?>
</body>

</html>