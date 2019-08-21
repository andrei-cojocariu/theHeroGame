<?php
/**
 * Created by PhpStorm.
 * User: Andrei C
 * Date: 8/13/2019
 * Time: 7:21 PM
 */

namespace app\CharacterAbstract;

require_once('CharacterInterface.php');

use app\CharacterInterface\CharacterInterface;
use app\Stats\Stats;

abstract class CharacterAbstract implements CharacterInterface
{
    protected $name;
    protected $stats;
    protected $skills;

    protected $generatedHealth;
    protected $generatedStrength;
    protected $generatedDefence;
    protected $generatedSpeed;
    protected $generatedLuck;


    /**
     * Returns absolute path of a given file
     *
     * @param $file
     *
     * @return string
     */
    protected function getAbsolutePath($file)
    {
        try {
            return realpath($file);
        } catch (\Exception $e) {
            echo("something");
        }
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = ucwords(strtolower($name));
    }

    public function getStats()
    {
        return $this->stats;
    }

    public function setStats($stats)
    {
        $this->stats = $stats;
    }

    public function getSkills()
    {
        return $this->skills;
    }

    public function setSkills($skills)
    {
        $this->skills = $skills;
    }

    private function generateHealth($health)
    {
        $health = rand($health->getMin(), $health->getMax());

        return $health;
    }

    public function getGeneratedHealth()
    {
        return $this->generatedHealth;
    }

    private function generateStrength($strength)
    {
        $strength = rand($strength->getMin(), $strength->getMax());

        return $strength;
    }

    public function getGeneratedStrength()
    {
        return $this->generatedStrength;
    }

    private function generateDefence($defence)
    {
        $defence = rand($defence->getMin(), $defence->getMax());

        return $defence;
    }

    public function getGeneratedDefence()
    {
        return $this->generatedDefence;
    }

    private function generateSpeed($speed)
    {
        $speed = rand($speed->getMin(), $speed->getMax());

        return $speed;
    }

    public function getGeneratedSpeed()
    {
        return $this->generatedSpeed;
    }

    private function generateLuck($luck)
    {
        $luck = rand($luck->getMin(), $luck->getMax());

        return $luck;
    }

    public function getGeneratedLuck()
    {
        return $this->generatedLuck;
    }

    public function generateBattleStats($stats)
    {
        $this->generatedHealth = $this->generateHealth($stats->getHealth());
        $this->generatedStrength = $this->generateStrength($stats->getStrength());
        $this->generatedDefence = $this->generateDefence($stats->getDefence());
        $this->generatedSpeed = $this->generateSpeed($stats->getSpeed());
        $this->generatedLuck = $this->generateLuck($stats->getLuck());
    }
}