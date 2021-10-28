<?php
declare (strict_types=1);
namespace App\Interfaces;

interface EmployerInterface
{
    public const NB_EMPLOYE_MAX = 10;

    public function __construct(string $nom, string $prenom, int $age, int $anciennete);

    public static function incrementeEmploye();

    public static function afficheNbEmploye();

    public function personalPresentation();
}
