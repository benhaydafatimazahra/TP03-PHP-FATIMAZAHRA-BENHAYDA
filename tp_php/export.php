<?php

$resultats = [
    [
        "nom" => "Ahmed",
        "notes" => [14, 16, 12],
        "moyenne" => 14
    ],
    [
        "nom" => "Sara",
        "notes" => [15, 13, 17],
        "moyenne" => 15
    ]
];

$json = json_encode($resultats, JSON_PRETTY_PRINT);
file_put_contents("data/notes.json", $json);

$json = file_get_contents("data/notes.json");
$donnees = json_decode($json, true);

echo "<pre>";
print_r($donnees);
echo "</pre>";

echo "<h3>Comparaison</h3>";

echo "<pre>";
echo "Résultat de serialize() :\n";
echo serialize($resultats);

echo "\n\nRésultat de json_encode() :\n";
echo json_encode($resultats);
echo "</pre>";

//Le format JSON, obtenu avec `json_encode()`, est executable  par une application JavaScript, contrairement au format `serialize()`, qui est spécifique à PHP.
?>

