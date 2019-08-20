<?php
/**
 * Created by PhpStorm.
 * User: Andrei C
 * Date: 8/20/2019
 * Time: 7:53 PM
 */

namespace app\SkillElement;

use app\SkillElementAbstract\SkillElementAbstract;

require_once ("SkillElementAbstract.php");

class SkillElement extends SkillElementAbstract
{
    public function __construct($elements)
    {
        $this->setName($elements->name);
        $this->setDescription($elements->description);
        $this->setAffects($elements->affects);
        $this->setType($elements->type);
        $this->setChance($elements->chance);
        $this->setHow($elements->how);
        $this->setWhen($elements->when);
    }
}