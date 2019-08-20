<?php
/**
 * Created by PhpStorm.
 * User: Andrei C
 * Date: 8/20/2019
 * Time: 12:14 PM
 */

namespace app\StatsAbstract;

require_once('StatsInterface.php');
require_once('StatsElement.php');

use app\StatsInterface\StatsInterface;
use app\StatsElement\StatsElement;


abstract class StatsAbstract implements StatsInterface
{
    protected $health;
    protected $strength;
    protected $defence;
    protected $speed;
    protected $luck;

    public function setHealth($health)
    {
        $health = new StatsElement($health);

        $this->health = $health;
    }

    public function getHealth()
    {
        return $this->health;
    }

    public function setStrength($strength)
    {
        $strength = new StatsElement($strength);

        $this->strength = $strength;
    }

    public function getStrength()
    {
        return $this->strength;
    }

    public function setDefence($defence)
    {
        $defence = new StatsElement($defence);

        $this->defence = $defence;
    }

    public function getDefence()
    {
        return $this->defence;
    }

    public function setSpeed($speed)
    {
        $speed = new StatsElement($speed);

        $this->speed = $speed;
    }

    public function getSpeed()
    {
        return $this->speed;
    }

    public function setLuck($luck)
    {
        $luck = new StatsElement($luck);

        $this->luck = $luck;
    }

    public function getLuck()
    {
        return $this->luck;
    }

}