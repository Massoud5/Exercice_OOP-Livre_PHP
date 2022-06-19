<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Livre-POO</title>
</head>
<body>
    




    <?php

        include("livre.php");
        include("auteur.php");



        $auteur = new Auteur("Stephen", "King");

        $livre1 = new Livre("Ca", "1986", "1138", "20", $auteur);
        $livre2 = new Livre("Simeterre", "1983", "374", "15", $auteur);
        $livre3 = new Livre("Le Fléau", "1978", "823", "14", $auteur);
        $livre4 = new Livre("Shining", "1977", "447", "16", $auteur);
        
        
        echo $auteur -> afficherBibliographie();
        



    ?>




</body>
</html>