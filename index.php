<?php
require("vendor/autoload.php");

/*Slugify*/
use Cocur\Slugify\Slugify;

$slugify = new Slugify();
echo $slugify->slugify('Ântônio á *&6'); // hello-world

echo "<br><hr><br>";

/*Classes Internas*/
use Classes\ClassTeste;
$Teste=new ClassTeste();