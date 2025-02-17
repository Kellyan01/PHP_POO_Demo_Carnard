<?php
//implements = implémenter l'interface InterfaceVoler
class NeVolPas implements InterfaceVoler{
    //On définit la méthode voler() rendu obligatoire par l'interface
    public function voler():void{
        echo "<p>Je ne vole pas </p>";
    }
}