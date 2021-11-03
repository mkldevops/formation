<?php

class Vehicule
{
  private int $vitesse = 120;

  public function getVitesse(): int
  {
    return $this->vitesse;
  }

  public function setVitesse(int $vitesse): self
  {
    $this->vitesse = $vitesse;

    return $this;
  }
}

class Voiture extends Vehicule
{
  public static $nbPortes = 5;
  
  public static function ajouterPortes()
  {
    self::$nbPortes++;
    echo sprintf("Une voiture avec %d portes", self::$nbPortes);
  }
}
var_dump(Voiture::$nbPortes, Voiture::ajouterPortes());