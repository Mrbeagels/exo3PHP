<link rel="stylesheet" href="public/css/style.css">

<p class="titre"> Exo4.Créer une variable et l'initialiser à 1.  
Tant que cette variable n'atteint pas 10, il faut :
- l'afficher
- l'incrementer de la moitié de sa valeur </p>

    <p class="exo">

    <?php 
    $number = 1 ; 
    while($number <= 10){
        echo "$number ";
        $number += ($number/2);
    }

    ?>

</p>