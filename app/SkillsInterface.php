<?php
/**
 * Created by PhpStorm.
 * User: Andrei C
 * Date: 8/20/2019
 * Time: 3:25 PM
 */

namespace app\SkillsInterface;

require_once("SkillElement.php");

interface SkillsInterface
{
    function setSkills($skills);
    function getSkills();

}