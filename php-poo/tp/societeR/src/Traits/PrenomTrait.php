<?php
declare (strict_types=1);
namespace App\Traits;

trait PrenomTrait
{
    protected string $prenom = '';
    
    public function setPrenom($prenom) : self
    {
        $this->prenom= $prenom;
        return $this;
    }

    public function getPrenom() : string
    {
        return $this->prenom;
    }
}
