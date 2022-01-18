<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<!-- check = ?name=Filippo&mail=pippo@gmail.com&age=21              -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>

<body>
    <h1>Controllo accesso:</h1>
    <h2>
        <?php
        if (strlen($_GET["name"]) > 3 && strpos($_GET['mail'], "@") && strpos($_GET['mail'], ".") && is_numeric($_GET["age"])) {
            echo "Accesso riuscito!";
        } else {
            echo "Accesso negato!";
        }
        ?>
    </h2>
</body>

</html>