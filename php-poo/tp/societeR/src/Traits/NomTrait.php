<?php
declare (strict_types=1);
namespace App\Traits;

trait NomTrait
{
    protected string $nom = '';
 
    public function setNom($nom) : self
    {
        $this->nom= $nom;
        return $this;
    }

    public function getNom() : string
    {
        return $this->nom;
    }
}
