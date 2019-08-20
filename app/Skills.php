<?php
/**
 * Created by PhpStorm.
 * User: Andrei C
 * Date: 8/20/2019
 * Time: 3:27 PM
 */

namespace app\Skills;

require_once ("SkillsAbstract.php");

use app\SkillsAbstract\SkillsAbstract;
use app\SkillElement\SkillElement;

class Skills extends SkillsAbstract
{
    public function __construct($skills)
    {
        $skillArray = array();
        foreach ($skills as $key => $skill) {
            $skillArray[$key] = new SkillElement($skill);
        }
        $this->setSkills((object)$skillArray);
    }
}