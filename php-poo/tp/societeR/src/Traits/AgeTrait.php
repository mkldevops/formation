<?php
declare (strict_types=1);
namespace App\Traits;

trait AgeTrait
{
    protected int $age = 0;

    public function setAge($age) : self
    {
        $this->age = $age;
        return $this;
    }
    public function getAge() : int
    {
        return $this->age;
    }
}
