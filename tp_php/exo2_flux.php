<!doctype html>
<html>
    <head><meta charset="UTF-8 "></head>
    <body>
        <h1>Partie 2:Structure de controle et boucle </h1>
        <h2>Exercice 2.1: if elseif else </h2>
        <?php
        include 'config.php';
        function mention($note){
            if ($note>=16) return "Trés bien";
            elseif($note>=14) return "Bien";
            elseif($note>=12) return "Assez bien";
            elseif($note>= SEUIL) return "Passable";
            else return "Ajourné";
        }
        //Testes
        echo mention(17);
        echo"<br>";
        echo mention(15);
        echo"<br>";
        echo mention(12);
        echo"<br>";
        echo mention(8);
        echo"<br>";
        echo mention(18);
        echo"<br>";
        ?>
    <h2> Exercice 2.2: swich </h2>
    <?php
        $mois=date("m");
        switch ($mois){
            case '01': echo"Janvier";break;
            case '02': echo"Février";break;
            case '03': echo"Mars";break;
            case '04': echo"Avril";break;
            case '05': echo"Mai";break;
            case '06': echo"Join";break;
            case '07': echo"Juillet";break;
            case '08': echo"Aoùt";break;
            case '09': echo"Septembre";break;
            case '010': echo"Octobre";break;
            case '011': echo"Novembre";break;
            case '012': echo"Décembre";break;
            default : echo "ce mois n'existe pas "; break;
        // si ona oublier break dans un cas ,l'execution du programme sera continue
    }
?>

<h2>Exercice 2.3 : Boucles </h2>
<?php
for ($i=1; $i<=6; $i++) {
    for($j=1; $j<=$i; $j++){
        echo "*";
    }
    echo "<br>"; 

    }


    $i=0;
    while($i<=20 ){
        if($i==10) echo"<strong>$i</strong><br>";
        else{
        echo $i ."<br>";}
        $i=$i+2;

    }

 echo"les nombres pairs de 0 à 10 :<br>";
    for($i=0;$i<=10;$i++){
        if($i%2!=0) continue;
        echo $i."<br>"; 
        }

        echo"<br>";
        echo"<br>";


$i = 1;

while (true) { 
    switch ($i) {
        case 5:
            echo "At 5<br>";
            break; 

        case 10:
            echo "At 10; quitting<br>";
            break 2; 
    }
    $i++;
}

echo"<br>";
echo"<br>";


$i=0;
do {
if ($i==10) {echo"<strong>$i</strong><br>";}
else{
echo $i ."<br>";}
$i+=2;
}while($i<=20);

?>
 </body>
</html>