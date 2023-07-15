<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="get">
        <label>date debut</label>
        <input type="date" name="date1">
        <label>date fin</label>
        <input type="date" name="date2">
        <input type="submit" value="recherche" name="recherche">

    </form>


    <?php
    if (isset($_GET['recherche'])) {
        $date1 = $_GET['date1'];
        $date2 = $_GET['date2'];
        $pdo = new PDO("mysql:host=localhost;dbname=imoobilier", "root", "");
        $commnade = $pdo->prepare("SELECT * from location where date_debut_location > '$date1' and date_fim_location< '$date2'");
        $commnade->execute();
        $location = $commnade->fetchAll(PDO::FETCH_ASSOC);
        print_r($location);
    }

    ?>

</body>

</html>