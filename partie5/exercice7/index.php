<html>
    <head>
        <meta charset=UTF-8" />
        <title>Exercice 7 Partie 5</title>
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
        <h1>Exercice 7  Partie 5</h1>
        <h2> Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims.
        </h2>
        <p>
           <?php
            //On créer un tableau case par case
            $departement = array (
             '02' => 'Aisne',
             '62' => 'Nord',
             '60' => 'Oise',
             '59' => 'Pas-De-Calais',
             '80' => 'Somme');
            $departement ['51'] = 'Marne';
            echo $departement ['51'];
            ?>
        </p>
    </body>
</html>
