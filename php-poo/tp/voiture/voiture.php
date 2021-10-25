<?php

class Voiture
  {
    public static $nbPortes = 5;
    
    public static function ajouterPortes()
    {
      self::$nbPortes++;
      echo sprintf("Une voiture avec %d portes", self::$nbPortes);
    }
  }
  var_dump(Voiture::$nbPortes, Voiture::ajouterPortes());