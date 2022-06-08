<link rel="stylesheet" href="public/assets/css/style.css">

<p class="titre"> Exo2.Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.  
Tant que la première variable n'est pas supérieure à 20 :
- multiplier la première variable avec la deuxième
- afficher le résultat
- incrementer la première variable </p>

<p class="exo">
    <?php
    $number1 = 0;
    $number2= 90;

    while($number1 < 20){
        $number3 = $number1 * $number2;
        echo "$number3 ";
        $number1 ++;
    }

    ?>

</p>

