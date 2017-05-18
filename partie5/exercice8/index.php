<html>
    <head>
        <meta charset=UTF-8" />
        <title>Exercice 8 Partie 5</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header>
            <input type="button" value="Exercice 1" onClick="javascript:document.location.href = 'http://partie5/exercice1/'" />
            <input type="button" value="Exercice 2" onClick="javascript:document.location.href = 'http://partie5/exercice2/'" />
            <input type="button" value="Exercice 3" onClick="javascript:document.location.href = 'http://partie5/exercice3/'" />
            <input type="button" value="Exercice 4" onClick="javascript:document.location.href = 'http://partie5/exercice4/'" />
            <input type="button" value="Exercice 5" onClick="javascript:document.location.href = 'http://partie5/exercice5/'" />
            <input type="button" value="Exercice 6" onClick="javascript:document.location.href = 'http://partie5/exercice6/'" />
            <input type="button" value="Exercice 7" onClick="javascript:document.location.href = 'http://partie5/exercice7/'" />
            <input type="button" value="Exercice 8" onClick="javascript:document.location.href = 'http://partie5/exercice8/'" />
            <input type="button" value="Exercice 9" onClick="javascript:document.location.href = 'http://partie5/exercice9/'" />
            <input type="button" value="Exercice 10" onClick="javascript:document.location.href = 'http://partie5/exercice10/'" />
        </header>
        <h1>Exercice 8  Partie 5</h1>
        <h2> Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau.
        </h2>
        <p>
            <?php
// La fonction array permet de créer un array
            //$mois = array('Janvier', 'février', 'mars', 'avril', 'mai', 'juin','juillet', 'aout', 'septembre' , 'octobre', 'novembre', 'décembre');
            $mois[0] = 'Janvier';
            $mois[1] = 'Février';
            $mois[2] = 'Mars';
            $mois[3] = 'Avril';
            $mois[4] = 'Mai';
            $mois[5] = 'Juin';
            $mois[6] = 'Juillet';
            $mois[7] = 'Aout';
            $mois[8] = 'Septembre';
            $mois[9] = 'Octobre';
            $mois[10] = 'Novembre';
            $mois[11] = 'Décembre';
            foreach ($mois as $elements){
                echo $elements . ' ';
            }
            ?>
        </p>
    </body>
</html>
