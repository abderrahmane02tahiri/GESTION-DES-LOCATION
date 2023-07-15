<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liseclient</title>
</head>

<body>
    <h2>ajouter les client</h2>
    <a href="ajouter.php">ajouter un client</a>
    <h2>liste des location</h2>
    <a href="Llocation.php">liste des location</a>
    <h2>liste des clients</h2>
    <pre>
    <?php
    $pdo = new PDO("mysql:host=localhost;dbname=imoobilier", "root", "");
    $commnade = $pdo->prepare('select * from client');
    $commnade->execute();
    $clients = $commnade->fetchAll(PDO::FETCH_ASSOC);

    ?>
    </pre>


    <table width="100%" border="1">
        <thead>
            <tr>
                <th>id_client</th>
                <th>cin</th>
                <th>nom</th>
                <th>prenom</th>
                <th>email</th>
                <th>password</th>
                <th>Suprimmer</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($clients as $client) { ?>
                <tr>
                    <td>
                        <?php echo $client['id_client'] ?>
                    </td>
                    <td>
                        <?php echo $client['cin'] ?>
                    </td>
                    <td>
                        <?php echo $client['nom'] ?>
                    </td>
                    <td>
                        <?php echo $client['prenom'] ?>
                    </td>
                    <td>
                        <?php echo $client['email'] ?>
                    </td>
                    <td>
                        <?php echo $client['password'] ?>
                    </td>
                    <td>
                        <a href="supprimer.php?id=<?php echo $client['id_client'] ?>"
                            onclick="return confirm ('vouler vous supprimer')">supprimer</a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>

</body>

</html>