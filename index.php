<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo '<h1>Cours de php</h1>';
    
   
    $nom='jamazi';
    $prenom='karima';
    $nomComplet=$prenom." ".$nom;
    echo "<p> Bonjour je suis ". " " .$prenom. " ".$nom ."</p>";
    $phrase='la programmation est amusante';
    echo $phrase. "<br>";
    $mot=substr($phrase,3,13);
    echo $mot. "<br>";
    $texte="les chats sont adorables";
    $nouveautexte=str_replace("chats","chiens",$texte);
    echo $nouveautexte;


    $chaine="La maison bleu";
    $bleu=substr($chaine,10,4);
    echo "<br>". $bleu;

    $avis="Ce film était vraiment mauvais";
    $exellent=str_replace("mauvais","exellent",$avis);
    echo "<br>".$exellent;

    $texte = "bienvenue sur notre site web.";
    $lettre=ucfirst($texte);
    echo "<br>".$lettre;

    $prixunitaire=899.99;
    $quantité=3;
    $prixtotal=$prixunitaire*$quantité;
    echo "<br>".$prixtotal;

    $article1 = "Livre";
    $prixArticle1 = 12.99;
    $quantiteArticle1 = 2;
    $prixAvantRemise1=$prixArticle1*$quantiteArticle1;
    echo"<br>".$prixAvantRemise1;
    
    $prixArticle2 = 9.99;
    $quantiteArticle2 = 3;
    $prixAvantRemise2=$prixArticle2*$quantiteArticle2;
    
    $prixArticle3 = 49.99;
    $quantiteArticle3 =1;
    $prixAvantRemise3=$prixArticle3*$quantiteArticle3;
    $prixTotal= ($prixAvantRemise1+$prixAvantRemise2+$prixAvantRemise3);
   echo "<br>".$prixTotal;

   $remise=($prixTotal*10)/100;
   echo "<br>".$remise;

   $prixApresRemise=$prixTotal-$remise;
   echo"<br>".$prixApresRemise;

   # EXERCICE:
#soit la variable nombre
#ecrire un programme qui permet de tester si elle est paire ou impaire
#si elle est paire afficher => le nombre est paire
#si non afficher => le npombre est impaire
$nombre=3;
if($nombre%2==0){
echo "jour pair"."<br>";
}else {
    echo"nombre inpair"."<br>"."<br>";
}

 

 

    # EXERCICE:
# soit la variable age suivante
$age = 18;
#ecrire le code qui permet de verifier si age est superieur a 18
# si age est superieur ou egale a 18 afficher => majeur
# si age est inferieur a 18 afficher => mineur

 

if ($age>=18) {
    echo"majeur <br>";

}
else{
    echo"mineur <br>";
}
    # EXERCICE:
// une annee bissextile est une annee divisible par 4 et pas par 100 ou divisible par 400
// ecrire un programme qui permet de verifier si une annee est bisextile ou pas
// si elle l'est affiche annee bissextile
// si non affiche annee pas bissextile

 

$bissex=1998;
if (($bissex%4==0)&&($bissex%100!==0)||($bissex%400==0)) {
    echo"année bissextille";
}
else {
    echo "année pas bissextille .<br>";
}

    ?>
</body>
</html>