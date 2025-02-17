<?php
//Ma Classe abstraite
abstract class AbstractCanard{
    //Attribut
    private ?string $nom;
    private ?InterfaceVoler $comportementVol; //relation de possession, mes canards possèdent une fonctionnalité de Vol

    //Constructeur
    public function __construct(?string $nom,?InterfaceVoler $comportementVol){
        $this->nom = $nom;
        $this->comportementVol = $comportementVol;
    }

    //GETTER ET SETTER
    public function getNom():string{
        return $this->nom;
    }
    public function setNom(?string $nom):?AbstractCanard{
        $this->nom = $nom;
        return $this;
    }
    public function getComportementVol():?InterfaceVoler{
        return $this->comportementVol;
    }
    public function setComportementVol(?InterfaceVoler $comportementVol):?AbstractCanard{
        $this->comportementVol = $comportementVol;
        return $this;
    }

    //METHOD
    public abstract function afficher():void;

    public function saluer():void{
        echo "<p>Coin coin ! </p>";
    }
}