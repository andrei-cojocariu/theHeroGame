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
}