<?php
declare (strict_types=1);
namespace App\Classes;

use App\Interfaces\TravailleurInterface;


class Responsable extends Employer
{
    private array $equipe= [];

    public function setEquipe(array $equipe) : void
    {
        $this->equipe = $equipe;
    }

    public function getEquipe() : array
    {
        return $this->equipe;
    }

    public function ajouterEmploye(Employer $employe) : void
    {
        if (!in_array($employe, $this->equipe, true)) {
            $this->equipe[] = $employe;
        }
    } 

    public function faireTravailler(TravailleurInterface $travailleur) : string 
    {
        return $travailleur->travailler();
    }

    public function faireTravaillerEquipe() : void
    {
        foreach ($this->equipe as $employe) {
            //$employe->travailler();
            echo $this->faireTravailler($employe);
        }
    }
}
