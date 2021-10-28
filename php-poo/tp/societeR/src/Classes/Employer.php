<?php
declare (strict_types=1);
namespace App\Classes;

use App\Interfaces\EmployerInterface;
use  App\Interfaces\TravailleurInterface;
use  App\Traits\NomTrait;
use  App\Traits\PrenomTrait;
use  App\Traits\AgeTrait;
use App\Exception\RException;

class Employer implements EmployerInterface, TravailleurInterface
{
    use NomTrait;
    use PrenomTrait;
    use AgeTrait;


    private static int $nbEmploye = 0;
    protected int $anciennete = 0;
    
    /**
     * __construct
     *
     * @param  string $nom
     * @param  string $prenom
     * @param  int $age
     * @param  int $anciennete
     * @return void
     */
    public function __construct(string $nom, string $prenom, int $age, int $anciennete)
    {
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setAge($age);
        $this->setAnciennete($anciennete);

        Employer::incrementeEmploye();
    }

    
    /**
     * setAge
     *
     * @param  int $age
     * @return void
     */
    public function setAge(int $age) : void
    {
        if ($age < 18 || $age > 65) {
            throw  new RException('la personne n\' a pas l\'age requis');
        }
        $this->age = $age;
        // $this->age = ($age >= 18 && $age <= 65) ? $age :($age<18 ? 18 : 65) ;
    }
    public function setAnciennete(int $anciennete)
    {
        if ($anciennete > 40) {
            throw  new RException('la personne  a trop d\'expérience');
        }
        $this->anciennete = $anciennete;
        // $this->anciennete = $anciennete <=40 ? $anciennete : 40;
    }
    
    /**
     * getAnciennete
     *
     * @return int
     */
    public function getAnciennete() : int
    {
        return $this->anciennete;
    }
    
    /**
     * incrementeEmploye
     *
     * @return void
     */
    public static function incrementeEmploye() : void
    {
        if (Employer::$nbEmploye <= self::NB_EMPLOYE_MAX) {
            self::$nbEmploye++;
        }
    }

    public static function afficheNbEmploye() : int
    {
        return (Employer::$nbEmploye / Employer::NB_EMPLOYE_MAX) * 100;
    }

    public function personalPresentation() : void
    {
        echo "Bonjour, je m'appelle " . $this->name . " ". $this->firstname  ." et j'ai " .$this->age . " ans. J'ai " .$this->anciennete. " ans d'ancienneté. \n\r";
    }
    public function travailler() : string
    {
        return "Je travaille en tant qu Employer. \n\r";
    }
}
