<?php

function formulaire($valeur1, $valeur2, $valeur3) {
    echo '<table border="1"><tr>';
    echo '<td>' . $valeur1 . '</td>';
    echo '<td>' . $valeur2 . '</td>';
    echo '<td>' . $valeur3 . '</td>';
    echo '</tr>';

}

?>
<!doctype html>
<html lang="fr">
<head>
<title>Exo 2 - TP2</title>
</head>
<body>

<?php echo formulaire("valeur1", "valeur2", "valeur3"); ?>

</body>
</html>
<?php 

// code source de la page 
highlight_file(__FILE__); 

?>