<link rel="stylesheet" href="public/css/style.css">

<p class="titre"> Exo3. Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.  
Tant que la première variable n'est pas inférieure ou égale à 10 :
- multiplier la première variable avec la deuxième
- afficher le résultat
- décrémenter la première variable  </p>

    <p class="exo">
    <?php
    $number1 = 100;
    $number2= 2;

    while($number1 >= 10){
        $number3 = $number1 * $number2;
        echo "$number3 ";
        $number1 --;
    }

    ?>

</p>