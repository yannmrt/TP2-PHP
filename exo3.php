<?php

function formulaire($valeur1, $valeur2, $valeur3) {
    $valeurTotal = $valeur1+$valeur2+$valeur3;
    $moyenne = $valeurTotal/3;
    echo $moyenne;
}

?>
<!doctype html>
<html lang="fr">
<head>
<title>Exo 3 - TP2</title>
</head>
<body>

<?php formulaire(5, 15, 20); ?>

</body>
</html>
<?php 

// code source de la page 
highlight_file(__FILE__); 

?>