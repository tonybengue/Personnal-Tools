<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lire/Ecrire</title>
</head>
<body>
    <!--
    Pour que PHP puisse créer des fichiers, il doit avoir accès à un dossier qui lui en autorise la création. Il faut en effet donner le droit à PHP de créer et modifier les fichiers, sinon celui-ci ne pourra rien faire.
    
    https://openclassrooms.com/courses/concevez-votre-site-web-avec-php-et-mysql/lire-et-ecrire-dans-un-fichier-5
    -->
<?php
/*1 : on ouvre le fichier :nom fichier, 
r : pour lecture seule
r+ : lecture et écriture

=>le répertoire doit avoir chmod 77 pour a+
a : ouvre le fichier en lecture seule, s'il n'exite pas, le crée
a+ : Ouvre le fichier en lecture et écriture. Si le fichier & n'existe pas, il est créé 

fgetc : lit caractère par caractère, lourd faudrait une boucle
fgets : ligne par ligne*/ 

    $file = "compteur.txt";
    $monfichier = fopen($file,'r+') or die('Cannot open file:  '.$file);

    /* 2 : on fera ici nos opérations sur le fichier
         on lit la première ligne du fichier
    */
    $pages_vues = fgets($monfichier, 255); // On lit la première ligne (nombre de pages vues, 255 caractères max)
    $pages_vues += 1; // On augmente de 1 ce nombre de pages vues
    fseek($monfichier, 0); // On remet le curseur au début du fichier
    fputs($monfichier, $pages_vues); // On écrit le nouveau nombre de pages vues

    // 3 : quand on a fini de l'utiliser, on ferme le fichier
    fclose($monfichier);

    echo '<p>Cette page a été vue ' . $pages_vues . ' fois !</p>';
?> 
</body>
</html>