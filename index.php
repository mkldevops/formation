<?php
/* $nom1 = 'Hamada';
$prenom1 = 'Fahari';
$age1 = 35;
$anciennete1 = 12;
$nom2 = 'Dupont';
$prenom2 = 'Michel';
$age2 = 50;
$anciennete2 = 20;
function presentation($nom, $prenom, $age, $anciennete)
{
  echo "Mon nom est $nom, mon prenom est $prenom,
    j'ai $age ans
    je travail depuis $anciennete ans.\n\r";
}
presentation($nom1, $prenom1, $age1, $anciennete1);
presentation($nom2, $prenom2, $age2, $anciennete2); */

class Employe 
{
  const NB_EMPLOYE_MAX = 10;
  private static $nbEmploye = 0;
  private $nom;
  private $prenom;
  private $age;
  private $anciennete;


  public function __construct($nom, $prenom, $age, $anciennete) 
  {
    $this->setNom($nom);
    $this->setPrenom($prenom);
    $this->setAge($age);
    $this->setAnciennete($anciennete);
    self::incrementeEmploye();
  }

  public static function getPourcentage()
  {
    return self::$nbEmploye * 100 / self::NB_EMPLOYE_MAX;
  }

  private static function incrementeEmploye()
  {
    if(self::$nbEmploye < self::NB_EMPLOYE_MAX) {
      self::$nbEmploye++;
    }
  }

  public function presentation() 
  {
    echo "Mon nom est $this->nom, mon prenom est $this->prenom,
    j'ai $this->age ans
    je travail depuis $this->anciennete ans.\n\r";
  }

  public function getNom() 
  {
    return $this->nom;
  }

  public function setNom($nom) 
  {
    $this->nom = $nom;
  }
  
  public function getPrenom() 
  {
    return $this->prenom;
  }

  public function setPrenom($prenom) 
  {
    $this->prenom = $prenom;
  }
  
  public function getAge() 
  {
    return $this->age;
  }

  public function setAge($age) 
  {
    $this->age = ($age >= 18 && $age <= 65) ? $age : ($age < 18 ? 18 : 65);
  }
  
  public function getAnciennete() 
  {
    return $this->anciennete;
  }

  public function setAnciennete($anciennete) 
  {
    $this->anciennete = $anciennete <= 40 ? $anciennete : 40;
  }

}

$employe1 = new Employe('Hamada', 'Fahari', 35, 12);
echo Employe::getPourcentage();
//$employe1->presentation();
/* 
$employe2 = new Employe();
$employe2->nom = 'Dupont';
$employe2->prenom = 'Michel';
$employe2->age = 50;
$employe2->anciennete = 20;
$employe2->presentation();

$employe3 = new Employe();
$employe3->nom = 'Sauvage';
$employe3->prenom = 'William';
$employe3->age = 35;
$employe3->anciennete = 10;
$employe3->presentation(); */