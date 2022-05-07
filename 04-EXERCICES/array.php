<?php
// 4 - Créer une page array.php :
// 	4.1 - Déclarer un tableau avec tous les fruits : pommes, cerises, peches, bananes
	$tab_fruit = array( 'pommes', 'bananes', 'poires', 'cerises' );

// 	4.2 - Déclarer un tableau avec tous les poids suivants : 100, 500, 1000, 2000, 5000
	$tab_poids = [100, 500, 1000, 2000, 5000];

// 	4.3 - Affichez les 2 tableaux (print_r)
	print '<pre>';
		print_r( $tab_fruit );
		print_r( $tab_poids );
	print '</pre>';

// 	4.4 - Sortir le fruit 'cerise' avec le poids 500 via les tableaux créés pour les transmettre à la fonction calcul() et ainsi obtenir le prix

include_once "fonction.inc.php";

echo calcul( $tab_fruit[3], $tab_poids[1] ) . '<hr>';

// 	4.5 - Sortir TOUS les prix pour les cerises avec tous les poids (boucle)
foreach( $tab_poids as $poids ){

	echo calcul( $tab_fruit[3], $poids );
}
//Autre méthode avec la boucle for :
echo "<p>Taille du tableau des poids : ". sizeof( $tab_poids ) ."</p>";

for( $i = 0; $i < sizeof( $tab_poids); $i++ ){

	echo calcul( $tab_fruit[3], $tab_poids[ $i ] );
}

// 	4.6 - Sortir tous les prix pour tous les fruits acvec tous les poids (boucles imbriquées)
foreach( $tab_fruit as $valeur_fruit ){

	echo "<h2> $valeur_fruit </h2>";

	foreach( $tab_poids as $valeur_poids ){

		echo calcul( $valeur_fruit, $valeur_poids );
	}
}

echo "<hr>";
// 4.7 - faire un affichage dans un tableau ('table') pour un affichage plus 'propre'
echo "<table border='2' >";
	echo "<tr>";
		echo "<td>&nbsp;</td>";

		foreach( $tab_poids as $poids ){

			echo "<th> $poids </th>";
		}
	echo "</tr>";

	foreach( $tab_fruit as $fruit ){

		echo "<tr>";
			echo "<th> $fruit </th>";

			foreach( $tab_poids as $poids ){

				echo "<td>". calcul( $fruit, $poids ) ."</td>";
			}

		echo "</tr>";
	}
echo "</table>";





echo "<br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br>";