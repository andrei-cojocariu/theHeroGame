<?php
/**
 * Created by PhpStorm.
 * User: Andrei C
 * Date: 8/20/2019
 * Time: 3:47 PM
 */

namespace app\Stats;


class recicleble
{

    public function generateHealth()
    {
        $health = rand($this->health->getMin(), $this->health->getMax());

        return $health;
    }

    public function generateStrength()
    {
        $strength = rand($this->strength->getMin(), $this->strength->getMax());

        return $strength;
    }

    public function generateDefence()
    {
        $defence = rand($this->defence->getMin(), $this->defence->getMax());

        return $defence;
    }

    public function generateSpeed()
    {
        $speed = rand($this->speed->getMin(), $this->speed->getMax());

        return $speed;
    }

    public function generateLuck()
    {
        $luck = rand($this->luck->getMin(), $this->luck->getMax());

        return $luck;
    }
}