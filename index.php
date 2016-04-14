<?php
/**
 * Created by PhpStorm.
 * User: ninon
 * Date: 13/04/16
 * Time: 17:20
 */

//////////////////-version finale-///////////////////

$tab = array(
    "Emmanuel" => 42,
    "Thierry" => 51,
    "Pascal" => 45,
    "Eric" => 48,
    "Nicolas" => 19
);

foreach($tab as $cle => $element) {
    echo $cle.' est &acirc;g&eacute; de '.$element.' ans.<br>';
}

$ageMoyen = array_sum($tab) / count($tab);
echo '<br>La moyenne d\'&acirc;ge est de ' . $ageMoyen . ' ans.';


//"Emmanuel"  => 42,
//"Thierry"   => 51,
//"Pascal"    => 45,
//"Eric"      => 48,
//"Nicolas"   => 19

//////////////////-test1-///////////////////
/*
$age0['Emmanuel'] = "42";
$age0['Thierry'] = "51";
$age0['Pascal'] = "45";
$age0['Eric'] = "48";
$age0['Nicolas'] = "19";
echo "Emmanuel a " . $age0['Emmanuel'] . " ans.";
//echo "<br>";
//echo ($age0['Emmanuel'] + $age0['Thierry'] + $age0['Pascal'] + $age0['Eric'] + $age0['Nicolas']) / 5;
echo "<br>";
print_r($age0) ;
*/

//////////////////-test2-///////////////////
/*
function Moyenne()
{
    $Nombres = func_get_args();
    $Nb = sizeof($Nombres);
    $Somme = 0;
    foreach ($Nombres as $Valeur)
    {
        $Somme += $Valeur;
    }
    return ($Somme / $Nb);
}
// Exemple
echo 'La moyenne d\'&acirc;ge est de ' . Moyenne(42, 51, 45, 48, 19) . ' ans.';
*/

//////////////////-test3-///////////////////
/*
$age2 = array
(
    array("Emmanuel",42),
    array("Thierry",51),
    array("Pascal",45),
    array("Eric",48),
    array("Nicolas",19)
);

echo $age2[0][0]." est &acirc;g&eacute; de ".$age2[0][1]." ans.<br>";
echo $age2[1][0]." est &acirc;g&eacute; de ".$age2[1][1]." ans.<br>";
echo $age2[2][0]." est &acirc;g&eacute; de ".$age2[2][1]." ans.<br>";
echo $age2[3][0]." est &acirc;g&eacute; de ".$age2[3][1]." ans.<br>";
echo $age2[4][0]." est &acirc;g&eacute; de ".$age2[4][1]." ans.<br>";
*/

//////////////////-test4-///////////////////
/*
$age = array
(
    array("Emmanuel",42),
    array("Thierry",51),
    array("Pascal",45),
    array("Eric",48),
    array("Nicolas",19)
);

echo "<table style='border: solid 1px black'><tr style='font-weight: bold'><td>Nom</td><td>&Acirc;ge</td></tr>";
for ($row = 0; $row < 5; $row++) {
    echo "<tr>";
    for ($col = 0; $col <  2; $col++) {
        echo "<td>".$age[$row][$col]."</td>";
    }
    echo "</tr>";
}
echo "</table>";
*/

?>