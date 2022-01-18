<?php
// Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
// Olimpia Milano - Cantù | 55-60

$games= [
    [
        'homeTeam' => 'Hawks',
        'homePoint' => 121,
        'visitingTeam' => 'Bucks',
        'visitingPoint' => 114
    ],
    [
        'homeTeam' => 'Magic',
        'homePoint' => 88,
        'visitingTeam' => 'Trail Blazers',
        'visitingPoint' => 98
    ],
    [
        'homeTeam' => 'Heat',
        'homePoint' => 104,
        'visitingTeam' => 'Raptors',
        'visitingPoint' => 99
    ],
    [
        'homeTeam' => 'Spurs',
        'homePoint' => 107,
        'visitingTeam' => 'Suns',
        'visitingPoint' => 121
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-1 - Basket</title>
</head>
<body>
    
    <h1>Basketball games:</h1>
    <ul>
        <?php
            for ($i = 0; $i < count($games); $i++) {
                echo "<li>{$games[$i]['homeTeam']} - {$games[$i]['visitingTeam']} | {$games[$i]['homePoint']}-{$games[$i]['visitingPoint']}</li>";
            }
        ?>
    </ul>

</body>
</html>