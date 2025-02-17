<?php
//implements = implémenter l'interface InterfaceVoler
class VolerAvecAille implements InterfaceVoler{
    //On définit la méthode voler() rendu obligatoire par l'interface
    public function voler():void{
        echo "<p>Je bats des ailles </p>";
    }
}