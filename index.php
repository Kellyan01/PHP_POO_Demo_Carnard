<?php
include './AbstractClass/abstractCanard.php';
include './Interface/interfaceVoler.php';
include './ComportementVol/neVolPas.php';
include './ComportementVol/volerAvecAille.php';
include './Model/colvert.php';
include './Model/leurre.php';

$colvert = new Colvert("Howard", new VolerAvecAille());
$leurre = new Leurre("Gilbert", new NeVolPas());

$colvert->afficher();
$colvert->saluer();
//Je récupère l'objet Comportement de Vol pour faire voler mon canard
$colvert->getComportementVol()->voler();

$leurre->afficher();
$leurre->saluer();
//Je récupère l'objet Comportement de Vol pour faire voler mon canard
$leurre->getComportementVol()->voler();