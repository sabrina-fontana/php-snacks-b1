<?php

// SNACK 1*************************************************************
echo '<b>PHP Snack 1</b><br><br>';
$matches = [
  [
    'homeTeam' => 'Olimpia Milano',
    'visitingTeam' => 'Virtus Bologna',
    'homeTeamPoints' => 10,
    'visitingTeamPoints' => 12
  ],
  [
    'homeTeam' => 'Varese',
    'visitingTeam' => 'Olimpia Milano',
    'homeTeamPoints' => 10,
    'visitingTeamPoints' => 5
  ],
  [
    'homeTeam' => 'Virtus Roma',
    'visitingTeam' => 'Libertas Livorno',
    'homeTeamPoints' => 5,
    'visitingTeamPoints' => 8
  ],
  [
    'homeTeam' => 'Varese',
    'visitingTeam' => 'Virtus Bologna',
    'homeTeamPoints' => 6,
    'visitingTeamPoints' => 10
  ],
  [
    'homeTeam' => 'Libertas Livorno',
    'visitingTeam' => 'Teramo Basket',
    'homeTeamPoints' => 5,
    'visitingTeamPoints' => 14
  ],
  [
    'homeTeam' => 'Basket Rimini',
    'visitingTeam' => 'Aquila Trento',
    'homeTeamPoints' => 12,
    'visitingTeamPoints' => 9
  ]
];

for ($i = 0; $i < count($matches); $i++) {
  $match = $matches[$i];
  echo $match['homeTeam'] . ' - ' . $match['visitingTeam'] . ' | ' . $match['homeTeamPoints'] . ' - ' . $match['visitingTeamPoints'] . '<br><br>';
};

// SNACK 2*********************************************************
echo '<b>PHP Snack 2</b><br>';
echo '<em>Passare come parametri GET name, mail e age</em><br><br>';

$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

if (strlen($name) > 3 && strpos($mail, '@') !== false && strpos($mail, '.') !== false && is_numeric($age)) {
  echo 'Accesso riuscito.';
} else {
  echo 'Accesso negato.';
}
