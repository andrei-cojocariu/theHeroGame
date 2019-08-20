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

class Skills extends SkillsAbstract
{
    public function __construct($skills) {
        $i = 0;
        foreach ($skills as $skill) {
            if ($i==0) {
                var_dump($skill);
                $i++;
            }
        }
    }
}