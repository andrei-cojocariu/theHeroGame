<?php
/**
 * Created by PhpStorm.
 * User: Andrei C
 * Date: 8/13/2019
 * Time: 7:23 PM
 */

namespace app\Character;

require_once('CharacterAbstract.php');

use app\CharacterAbstract\CharacterAbstract;
use app\Stats\Stats;
use app\Skills\Skills;

class Character extends CharacterAbstract
{

    public function __construct($json)
    {
        $json = $this->getAbsolutePath($json);
        $character = json_decode(file_get_contents($json));

        $this->setName($character->name);

        $stats = new Stats($character->stats);
        $this->setStats($stats);

        $skills = new Skills($character->skills);
        $this->setSkills($skills->getSkills());
    }

}