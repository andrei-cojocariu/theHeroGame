<?php
/**
 * Created by PhpStorm.
 * User: Andrei C
 * Date: 8/20/2019
 * Time: 7:52 PM
 */

namespace app\SkillElementAbstract;

require_once('SkillElementInterface.php');

use app\SkillElementInterface\SkillElementInterface;

abstract class SkillElementAbstract implements SkillElementInterface
{
    protected $name;
    protected $description;
    protected $affects;
    protected $type;
    protected $chance;
    protected $how;
    protected $when;

    public function setName($name)
    {
        $this->name = ucwords($name);
    }

    public function getName()
    {
        return $this->name;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setAffects($affects)
    {
        $this->affects = $affects;
    }

    public function getAffects()
    {
        return $this->affects;
    }

    public function setType($type = 'point')
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setChance($chance = 0)
    {
        $this->chance = $chance;
    }

    public function getChance()
    {
        return $this->chance;
    }

    public function setHow($how)
    {
        $this->how = $how;
    }

    public function getHow()
    {
        return $this->how;
    }

    public function setWhen($when)
    {
        $this->when = $when;
    }

    public function getWhen()
    {
        return $this->when;
    }


}