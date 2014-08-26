<?php
    require("connexion.php");
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Page de contact</title>
		<meta name="description" content="">
		<meta name="author" content="admin stagiaire">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<!--<link rel="stylesheet" type="text/css" href="style.css"/>-->
	</head>

	<body>
		<div id="page">
            <?php

/*            echo "<hr><strong><u>Affichage de la classe Produit</u></strong><br/>";
            $produit = new Produit("tabouret", 1, 10);

            echo $produit->getLibelle(),"<br/>";
            echo $produit->getPrix(),"<br/>";

            $produit->setPrix(20) ->setLibelle("chaise");
            echo $produit->getLibelle(),"<br/>";
            echo $produit->getPrix(),"<br/>";

            echo $produit->getPrixTTC(),"<br/>";

            echo "<br/><u>Affichage de la classe sous forme de chaine</u><br/>";
            echo $produit;
*/
            //-------------------------------------------
            echo "<hr><strong><u>Affichage de la classe Chaise</u></strong><br/>";
            $chaise = new Chaise("tabouret", 1, 10, "rouge", 3);

            echo $chaise->getLibelle(),"<br/>"; // appartient à la classe parent Produit
            echo $chaise->getPrix(),"<br/>";    // idem
            echo $chaise->getCouleur(),"<br/>";

            echo "<br/><u>Affichage de la classe sous forme de chaine</u><br/>";
            echo $chaise;

            //-------------------------------------------
            echo "<hr><strong><u>Affichage de la classe Entreprise</u></strong><br/>";
            $entreprise = new Entreprise("DAWAN", "125485478");
            echo $entreprise->getRaisonsociale(),"<br/>";
            echo $entreprise->getSiret(),"<br/>";

            echo "<br/><u>Affichage de la classe sous forme de chaine</u><br/>";
            echo $entreprise;

            //-------------------------------------------
            echo "<hr><strong><u>Affichage de la classe Salarie</u></strong><br/>";
            $salarie = new Salarie(1, "DUPONT", "Pierre", null);
            echo $salarie->getNom(),"<br/>";
            echo $salarie->getPrenom(),"<br/>";

            echo "<br/><u>Affichage de la classe sous forme de chaine</u><br/>";
            echo $salarie;

            //-------------------------------------------
            echo "<hr><strong><u>Ajout Salarie</u></strong><br/>";
            $s1 = new salarie(1,"PIERRE", "Julien", null);
            $entreprise->Embauche($s1);
            //echo "nouveau salarié = ".$s1."<br/>";

            $s2 = new salarie(2,"PAUL", "Julienne", null);
            $entreprise->Embauche($s2);

            $s3 = new salarie(3,"JACQUES", "Juliette", null);
            $entreprise->Embauche($s3);

            echo " Affiche les attributs de l'entreprise ET les salariés<br/>";
            echo $entreprise;
            //echo "<br/><br/>";
            echo "<table border='1'>";
                echo "<caption><strong>Liste des salariés</strong></caption>";
                echo "<th>Id</th><th>nom</th><th>Prénom</th>><th>Entreprise</th>";
                echo $entreprise->getSalaries();
            echo "</table>";

            echo "<br/>";
            echo "PAUL est viré";
            $entreprise->Licensie($s2);

            echo "<br/><br/>";
            echo "<table border='1'>";
            echo "<caption><strong>Liste des salariés</strong></caption>";
            echo "<th>Id</th><th>nom</th><th>Prénom</th>><th>Entreprise</th>";
            echo $entreprise->getSalaries();
            echo "</table>";

echo "<br/>";
            $entreprise->ajouterChaises("tabouret", 1, 10, "rouge", 3);
            //echo $entreprise->listeChaise();
            echo $entreprise;
            ?>

        </div>
    </body>
</html>