<?php
/**
 * Created by PhpStorm.
 * User: Andrei C
 * Date: 8/20/2019
 * Time: 3:26 PM
 */

namespace app\SkillsAbstract;

require_once("SkillsInterface.php");

use app\SkillsInterface\SkillsInterface;

abstract class SkillsAbstract implements SkillsInterface
{
    protected $skills;

    public function setSkills($skills)
    {
        $this->skills = $skills;
    }

    public function getSkills()
    {
        return $this->skills;
    }
}