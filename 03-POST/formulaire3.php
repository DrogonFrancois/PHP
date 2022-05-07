<h1>FORMULAIRE 3</h1>

<a href="formulaire2.php">Go page formulaire2</a>
<hr>

<?php

print '<pre>';
	print_r( $_POST );
print '</pre>';

//EXERCICE : affichez les données issues du formulaire2.php et faites en sorte d'informer l'internaute que le prénom ET l'email sont obligatoires (donc dans le cas ou le champ est vide affichez un message d'erreur) 
	//empty() : teste si c'est vide !
//Pensez a eviter les erreurs lors de l'arrivée sur la page

if( empty( $_POST['pseudo'] ) || empty( $_POST['email'] ) ){ //SI l'input pseudo est vide - OU QUE - l'input email est vide

	echo "<p style='color:red'>Vous devez renseigner tous les champs !</p>";
}
else{ //SINON, c'est que les deux champs sont remplis et on affiche les informations

	echo "Votre pseudo : ". $_POST['pseudo'] ."<br>";
	echo "Votre email : $_POST[email] <br>";
}

//----------------------------------------------------------
//version Francois :
// $champ_vide=0;

// if (empty($_POST['pseudo'])) $champ_vide=1;
// if (empty($_POST['email'])) $champ_vide=1;


// if ( $champ_vide==1 ):

//     exit("ERREUR : tous les champs ne sont pas remplis.");
// else:
//     $pseudo=$_POST['pseudo'];   
//     $email=$_POST['email'];
  
// 	echo "Votre pseudo : ".$pseudo ."<br>";
// 	echo "Votre email : $email <br>";

// endif;
echo "<hr>";
//----------------------------------------------------------
if( empty( $_POST['pseudo'] ) && empty( $_POST['email'] ) ){ //SI l'inpput pseudo ET QUE l'input email sont vides

	echo "<p style='color:red'>Vous devez renseigner tous les champs !</p>";
}
elseif( empty( $_POST['pseudo'] ) ){ //SI l'input pseudo est vide

	echo "<p style='color:red'>Vous devez renseigner votre pseudo !</p>";
}
elseif( empty( $_POST['email'] ) ){ //SI l'input email est vide

	echo "<p style='color:red'>Vous devez renseigner votre email !</p>";
}
else{ //SINON, c'est que les deux champs sont remplis et on affiche les informations

	echo "Votre pseudo : ". $_POST['pseudo'] ."<br>";
	echo "Votre email : $_POST[email] <br>";
}

