<!-- 
## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
-->



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack1 - matches</title>
</head>

<body>
  <?php
  $arr_played_maches = [
    [
      'home' => [
        'team' => 'Milano',
        'score' => '91',
      ],
      'guest' => [
        'team' => 'Torino',
        'score' => '88',
      ]
    ],

    [
      'home' => [
        'team' => 'Bolzano',
        'score' => '55',
      ],
      'guest' => [
        'team' => 'Chiavari',
        'score' => '62',
      ]
    ],

    [
      'home' => [
        'team' => 'Leccie',
        'score' => '59',
      ],
      'guest' => [
        'team' => 'Roma',
        'score' => '55',
      ]
    ],

    [
      'home' => [
        'team' => 'Salerno',
        'score' => '101',
      ],
      'guest' => [
        'team' => 'Genova',
        'score' => '49',
      ]
    ],

    [
      'home' => [
        'team' => 'Crotone',
        'score' => '76',
      ],
      'guest' => [
        'team' => 'Pescara',
        'score' => '97',
      ]
    ]

  ];
  ?>

  <h2>
    <?php
    for ($i = 0; $i < count($arr_played_maches); $i++) {

      $game = $arr_played_maches[$i];

      echo $game['home']['team'] . ' - ' . $game['guest']['team'] . ' | ' . $game['home']['score'] . ' - ' . $game['guest']['score'] . '<br>' . '<br>';
    }
    ?>
  </h2>


</body>

</html>