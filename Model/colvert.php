<?php
//Extends = héritage de la classe AbstractCanard
class Colvert extends AbstractCanard {
    //Je définie le comportement de la méhode abstraite héritée afficher
    public function afficher():void{
        echo "<p>Je suis un canard à tête verte.</p>";
    }
}