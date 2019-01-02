<?php
echo "Hello World<br>\n";
/*echo "Hello World";

$prenom = "Tom";

echo "Hello $prenom";

echo $prenom;

define('nom', 'BERNARDIN');
echo nom;

$prenom = 1337;
define('nom', 'truc');
echo $prenom;*/

// VARIABLES ET TABLEAUX
$tab = array();
$tab = ['rouge', 'jaune', 'vert', 'bleu'];
echo $tab[0]; 
echo "<br>";

$tab2 = ['nom' => 'BERNARDIN', 'prenom' => 'Tom', 'ecole' => 'EM', ];
echo $tab2['prenom'];

arsort($tab2);

echo "<pre>";
print_r($tab2);
echo "</pre>";

echo count($tab2);

#Ajouter un élément dans un tableau

array_push($tab, "violet", "blanc"); // Ici on peut en ajouter plusieur sur la même ligne

echo "<pre>";
print_r($tab);
echo "</pre>";

$tab[] = 'noir'; // Ici faut réecrire à chacque fois, souvent utilisé dans une fonction

echo "<pre>";
print_r($tab);
echo "</pre>";

$tab2['metier'] = 'prof'; #nouvelle entrée (avec une nouvelle clé)
$tab2['nom'] = 'TOTO'; #attention, ici on va remplacer la valeur de la clé 'nom'

echo "<pre>";
print_r($tab2);
echo "</pre>";

#Supprimer un élément du tableau:
#Le dernier élément:
array_pop($tab);
echo "<pre>";
print_r($tab);
echo "</pre>";

#Un élément particulier
unset($tab[4]); // vire le violet
echo "<pre>";
print_r($tab);
echo "</pre>";

$listeDeCourses = 'nesquick,quinoa,carotte,bierre,pizza';
$tabCourses = explode(',', $listeDeCourses); # explode passe une string en tab
echo "<pre>";
print_r($tabCourses);
echo "</pre>";

sort($tabCourses);
echo "<pre>";
print_r($tabCourses);
echo "</pre>";

echo implode(', ', $tabCourses); # implode passe un tab en string

// LES BOUCLES

$j = 0;

while ($j <= 10) // < > == === != <= >=
{
    echo $j. '<br>';
    $j++;
}


for ($i=1; $i <= 3; $i++)
{
    echo $i. "- je ne dois pas parler en classe <br>";
} 

$tab = ['rouge', 'jaune', 'vert', 'bleu'];
foreach ($tab as $val)
{
    echo$val. '<br>';
}

$tab2 = ['nom' => 'BERNARDIN', 'prenom' => 'Tom', 'ecole' => 'EM', ];
foreach ($tab2 as $key => $val)
{
    echo $key.' : '.$val.'<br>';
}

echo "<br><br>";

// EXERCICE DU LOTO

/*
echo rand(1, 49);
echo rand(1, 49);
echo rand(1, 49);
echo rand(1, 49);
echo rand(1, 49);
*/

// MA VERSION:

$random = range(1, 49); #avec range je fais un tab de 1 à 49 au hasard
shuffle($random); #avec shuffle je mélange les nombres

for ($i = 0; $i < 6; $i++) # boucle for: index mis à 0, tant qu'il est  inférieur à 6 l'index va faire ++
{
    if ($i != 5) # si l'indice est différent de 5 on execute ce qui suit
    {
        echo $random[$i]; # on affiche les 5 premiers de la tab
        echo '<br>';
    }
}

// CORRECTION:
$nbATirer = 5;
$valeurMax = 49;

$loto = [];
while(count($loto) < $nbATirer)
{
    $num = rand(1, $valeurMax);
    if(!in_array($num, $loto))
    {
        $loto[] = $num;
    }
}
sort($loto);

echo implode(' - ', $loto);

echo '<br><br>';

// LES FONCTIONS (persos)

function maFonction($arg1, $arg2, $arg3)
{
    return $arg1 + $arg2 * $arg3;
}

echo maFonction(1, 2, 3);

?>
