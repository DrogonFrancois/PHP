<?php

//2 - Créer une page lien.php. Prévoir 4 liens avec le nom des fruits afin de faire en sorte que lorsque l'on clique dessus, le prix du fruit ( pour 1 kg) grâce à la fonction calcul() s'affiche DANS LA MEME PAGE.
print '<pre>';
	print_r( $_GET );
print '</pre>';

include_once "fonction.inc.php"; //inclusion du fichier 'fonciton.inc.php' pour pouvoir accéder à la fonction et donc au prix au kg

if( isset( $_GET['fruit'] ) ){ //SI il existe 'fruit' dans l'URL
	
	echo calcul( $_GET['fruit'], 1000 ); //on affiche le prix pour 1kg grâce à la fonction calcul() que j'ai récupéré grâce à l'inclusion
}

?>
<hr>

<a href="lien.php?fruit=pommes">Pommes</a><br>
<a href="lien.php?fruit=bananes">Bananes</a><br>
<a href="lien.php?fruit=cerises">Cerises</a><br>
<a href="lien.php?fruit=poires">Poires</a><br>