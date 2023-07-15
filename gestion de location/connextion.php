<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="post">
        <input type="gmail" name="gmail" placeholder="gmail">
        <input type="password" name="password" placeholder="Password">
        <button type="submit" value="conex" name="conex">Sign in</button>
    </form>
    <?php
    if (isset($_POST['conex'])) {
        $gmail = $_POST['gmail'];
        $password = $_POST['password'];
        $pdo = new PDO("mysql:host=localhost;dbname=imoobilier", "root", "");
        $commnade = $pdo->prepare("SELECT *from client where email = ? and password = ?");
        $commnade->execute([$gmail, $password]);
        if ($commnade->rowCount() > 0) {
            session_start();
            $_SESSION['user'] = $commnade->fetch(PDO::FETCH_ASSOC);
            header('location:locationencours.php');
        } else {
            echo "eroore";
        }
    }
    ?>
</body>

</html>