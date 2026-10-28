<!Doctype html>
<html>
    <head >
        <meta charset='UTF-8'>
    </head>

    <body>

        <h1>NOMS DE VARIABLE :</h1>
<?php

#ceci est un commantaire dans une seule ligne avec#
//ceci est aussi un commantaire dans une seule ligne //
/*ceci est un commantaire sur plusieurs lignes*/
echo "Hello World <br>";

/* $x ce nom est valide car il commance par $ et suvie par lettre */
$x=6;
echo" la valeur de la varieble x est :".$x ."<br>";
/* $_x est valide car il commance avec $ et commance par _ ce qui est autorisé suivie par une lettre */
$_x=9;
echo" la valeur de la varieble _x est :".$_x ."<br>";
/* $2x est invalide car commance par nombre ce qui est interdit */

/*  $x-y est invalide car il contient une tiret qui est aussi interdit*/

/* $Prix_HT est valide car il commance par $ et suivie par lettre  */

$Prix_HT=16;
echo" la valeur de la varieble Prix_HT est :".$Prix_HT ."<br>";

/*  $prix ht est invalide car il contient espace ce qui est non interdit*/

/* $état est valide car il commance par $ et suivie par lettre */
$état=1;
echo" la valeur de la varieble état est :".$état ."<br>";

/*  $A et $a sont deux variables différent car PHP est senssible à la casse*/
$A=16;
$a=5;
echo " la valeur de la variable \$A $A <br>";
echo " la valeur de la variable \$a $a <br>";

require("config.php");
echo "l'etablisement est : ".ETABLISSEMENT ."<br>" ;
echo "Le seuil est : ".SEUIL ."<br>" ;
echo"la note minimale : ".NOTE_MIN ." <br>";
echo"la note maximale : ".NOTE_MAX ." <br>";

if(defined('SEUIL')){
    echo"la constante SEUIL est existe .<br>";
}
else{
    echo "la constante SEUIL n'est existe pas . <br>";
}

if(defined('INCONNUE')){
    echo"la constante INCONNUE est existe .<br>";
}
else{
    echo "la constante INCONNUE n'est existe pas . <br>";
}

#lorsqu'on affiche un constante non défini il y'aura une erreur
/*la différence ente const et define() est dans le syntaxe de declartion :
    const : mot clé permet de creer une constante est elle doit etre déclaré en dehor de tout bloc .
    define(): une fonction qui permet de créer une constante est peut etre déclaré dans n'importe où dans le programme. */
?>

<h1>Exercice 1.3 : Calcul</h1>
<?php
$prix_ht = 60;
$tva = 20;
$TTC=$prix_ht + $tva;
echo "Le prix TTC du produit est de ".$TTC ." € <br>";
?>

<h1>Exercice 1.4 : Types et conversion </h1>
<?php
$test = 42;
$test =(string)$test;
var_dump($test);
echo"<br>";
//0 c'est false
var_dump((bool) 0);
echo"<br>";
//0.0 c'est false
var_dump((bool) 0.0);
echo"<br>";
// "0" c'est false
var_dump((bool) "0");
echo"<br>";
//" " c'est True
var_dump((bool) " ") ;
echo"<br>";
//"abc" c'est True
var_dump((bool) "abc");
echo"<br>";
//[] c'est false
var_dump((bool) []);
echo"<br>";
//null c'est false
var_dump((bool) null);
echo"<br>";


// (int) 3.9 est un int donne 3
var_dump((int) 3.9 );
echo"<br>";
//(int) "12abc" int de valeur 12
var_dump((int) "12abc" );
echo"<br>";
//(float) "1.5e3" est float de valeur 1.5
var_dump((float) "1.5e3" );
echo"<br>";
//(int) true est un int qu'est 1
var_dump((int) true );
echo"<br>";

$décimale=255;
$binaire=11111111;
$héxadécimale=0xFF;
$octal=0377;

echo"La valeur  en Décimale : $décimale <br>";
echo"La valeur  en Binaire: $binaire <br>";
echo"La valeur  en Héxadécimale : $héxadécimale<br>";
echo"La valeur  en Octal : $octal<br><br>";


?>

<h1>Exercice 1.5 : Chianes de caractères</h1>
<?php
$traitees = "égales à ";
$ici= 2;

echo"Ahmed a dit :\"J'ai réussi\"<br>";
echo "Voullez-vous supprimer C:\*.*?<br>";
echo "Ceci n'affichera pas \\n de nouvelle ligne <br>";
echo"Les variables ne seront pas \$traitees \$ici <br>";
echo "Les variables seront ".$traitees ." ".$ici;

$chaine="* Bonjour les développeurs *";
$phrase= trim($chaine,"*") ;
echo "$phrase <br>";
for ($l=0;$l<strlen($phrase);$l++){
    echo "$phrase[$l] <br>";
}

?>

<h1>Partie 2:Structure de controle et boucle </h1>

</body>