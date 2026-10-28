<!Doctype html>
<html>
    <head><meta charset="UTF-8"></head>
<body>
    <h1>Exercice 3.1 : Création</h1>
    <?php
        include 'config.php';
        include 'includes/entete_inc.php';
        //avec include si le fichier n'existe pas elle va afficher une erreur et contenu l'exucution normale
        //avec require si le fichier n'existe pas elle va afficher une erreur et arréte tout le programme
        include 'includes/menu_inc.php';

        // si on inclue le fichier avec include 2 fois, le contenu du fichier s'affiche 2 fois
        // si on inclue le fichier avec include_once 2 fois le contenu du fichier serait afficher une seul fois
    ?>

    <?php
    $notes = [
    "Mohamed" => 16, "Ahmed" => 14, "Hind" => 13, "Aicha" => 15,
    "Samir" => 13, "Zakaria" => 13, "Rafik" => 10, "Ilham" => 9,
    "Hamza" => 7, "Sami" => 7, "Noura" => 14
        ];
        $modules=["Web2","structure de données en C","Recherche Opérationnel"];
        foreach($modules as $module){
            echo $module."<br>";
        }
        echo"<br>";
        echo $modules[0]."<br>";
        echo $modules[1]."<br>";
        echo $modules[2]."<br>";
    ?>
    <h1> Exercice 3.2 : Affichage HTML</h1>
    <?php

         function mention($note){
            if ($note>=16) return "Trés bien";
            elseif($note>=14) return "Bien";
            elseif($note>=12) return "Assez bien";
            elseif($note>= SEUIL) return "Passable";
            else return "Ajourné";}
    ?>
    <table border="1" cellpading="10" cellspacing="0">
        <thead> 
            <tr>
            <th>Nom</th>
            <th>Note </th>
            <th>Mention </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($notes as $nom=>$note):?>
                <tr style="color :<?php echo ($note<10)? 'red':'black';?>">
                    <td><?php echo $nom;?></td>
                    <td><?php echo $note;?></td>
                    <td><?php echo mention($note);?></td>
                </tr>
                <?php endforeach; ?>
        </tbody>
    </table>

 <h1>Exercice 3.3 : Statistiques</h1>
        <?php
        $meilleure=$notes["Mohamed"];
        $faible=$notes["Mohamed"];
        $somme=0;
    foreach($notes as $nom=>$note){
        $somme+=$note;
        if($note>$meilleure){
            $meilleure=$note;
        }

        if($note<$faible){
            $faible=$note;
        }
        }
        $moyenne=$somme/count($notes);

        echo "Somme : " . $somme . "<br>";
        echo "Moyenne : " . $moyenne . "<br>";
        echo "Meilleure note : " . $meilleure . "<br>";
        echo "Plus faible note : " . $faible . "<br>";
        echo"<br>";

        echo"<strong> Vérification par array_sum() : </strong><br>";
        echo "Somme : " .array_sum($notes). "<br>";
        echo "Nombre des éléments : " .count($notes). "<br>";
        echo "Meilleure note : " . max($notes). "<br>";
        echo "Plus faible note : " . min($notes). "<br>";
        echo"<br>";


$effectifs = [];

foreach ($notes as $nom => $note) {
    $m = mention($note);

    if (isset($effectifs[$m])) {
        $effectifs[$m]++;
    } else {
        $effectifs[$m] = 1;
    }
}

foreach ($effectifs as $m => $nombre) {
    echo $m . " : " . $nombre . "<br>";
}
echo"<br>";
?>


<h1>Exercice 3.4 : Tri</h1>
<?php 
function afficher($tab) {
    echo "<table border='1' cellpadding='5' cellspacing='0'>";

    echo "<thead>
            <tr>
                <th>Nom</th>
                <th>Note</th>
            </tr>
          </thead>";

    echo "<tbody>";
    foreach ($tab as $nom => $note) {
        echo "<tr>
                <td>$nom</td>
                <td>$note</td>
              </tr>";
    }
    echo "</tbody>";

    echo "</table>";
}

echo "<strong>Tri par noms croissants</strong><br>";
$tableau = $notes;
ksort($tableau);
afficher($tableau);

echo "<strong>Tri par notes décroissantes</strong><br>";
$tableau = $notes;
arsort($tableau);
afficher($tableau);

echo "<strong>Tri par noms décroissants</strong><br>";
$tableau = $notes;
krsort($tableau);
afficher($tableau);

echo "<strong>Tri par notes croissantes</strong><br>";
$tableau = $notes;
asort($tableau);
afficher($tableau);

// pour trier un tableau indéxé il faut utiliser la fonction sort()
?>
<h1>Exercice 3.5 : Opérateurs de tableaux</h1>
<?php

$a = ["x" => 1, "y" => 2];
$b = ["y" => 2, "x" => 1];

// $a + $b : union des deux tableaux
var_dump($a + $b);
echo"<br>";

// $a == $b : affiche true, car les clés et les valeurs sont identiques 
 var_dump($a == $b); 
echo"<br>";
// $a === $b : affiche false, car l'ordre des éléments est différent 
var_dump($a === $b); 
echo"<br>";
?>

<?php include 'includes/pied_inc.php'; ?>

</body>
</html>