<?php
//Extends = héritage de la classe AbstractCanard
class Leurre extends AbstractCanard {
    //Je définie le comportement de la méhode abstraite héritée afficher
    public function afficher():void{
        echo "<p>Je suis un canard en plastique.</p>";
    }
}