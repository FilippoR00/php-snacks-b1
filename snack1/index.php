<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php
    $partite = [
        [
            "squadra1" => "Trieste",
            "score1" => 83,
            "squadra2" => "Reggiana",
            "score2" => 85,
        ],
        [
            "squadra1" => "Brescia",
            "score1" => 88,
            "squadra2" => "Brindisi",
            "score2" => 67,
        ],
        [
            "squadra1" => "Varese",
            "score1" => 76,
            "squadra2" => "Trento",
            "score2" => 80,
        ],
        [
            "squadra1" => "Treviso",
            "score1" => 70,
            "squadra2" => "Milano",
            "score2" => 68,
        ]
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    <h1>Risultati:</h1>
    <p> 
        <?php
            for ($i = 0; $i < count($partite); $i++) {
                echo "<div>" . $partite[$i]['squadra1'] . " - " . $partite[$i]['squadra2'] . " | " . $partite[$i]['score1'] . "-" . $partite[$i]['score2'] . "</div>";
            } 
        ?>
    </p>
</body>
</html>