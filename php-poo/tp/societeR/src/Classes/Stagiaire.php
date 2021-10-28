<?php
declare (strict_types=1);
namespace App\Classes;

use App\Interfaces\TravailleurInterface;
use App\Traits\NomTrait;
use App\Traits\PrenomTrait;
use App\Traits\AgeTrait;

class Stagiaire implements TravailleurInterface
{
    use NomTrait;
    use PrenomTrait;
    use AgeTrait;

    public function __construct(string $nom, string $prenom,int $age)
    {
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setAge($age);
    }

    public function travailler() : string
    {
        return "Je travaille en tant que stagiaire. \n\r";
    }
}
