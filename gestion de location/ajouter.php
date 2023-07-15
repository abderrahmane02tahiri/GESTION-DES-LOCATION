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
    if (isset($_POST['ajouter'])) {

        $cin = $_POST['cin'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $pdo = new PDO("mysql:host=localhost;dbname=imoobilier", "root", "");
        $commnade = $pdo->prepare('INSERT INTO client values (null,?,?,?,?,?)');
        $commnade->execute([$cin, $nom, $prenom, $email, $password]);
        header('location: listeC.php');
    }
    ?>

    <form method="POST">
        <label> cin </label> <br>
        <input type="text" name="cin"><br>
        <label> nom </label> <br>
        <input type="text" name="nom"><br>
        <label> prenom </label> <br>
        <input type="text" name="prenom"><br>
        <label> email </label> <br>
        <input type="email" name="email"><br>
        <label> password </label> <br>
        <input type="password" name="password"><br>
        <br>
        <input type="submit" value="ajouter" name="ajouter">
    </form>

</body>

</html>