<?php
/**
 * Created by PhpStorm.
 * User: Andrei C
 * Date: 8/20/2019
 * Time: 1:00 PM
 */

namespace app\StatsElementAbstract;

require_once('StatsElementInterface.php');

use app\StatsElementInterface\StatsElementInterface;

abstract class StatsElementAbstract implements StatsElementInterface
{
    protected $name;
    protected $description;
    protected $type;
    protected $min;
    protected $max;

    public function setName($name)
    {
        $this->name = ucwords(strtolower($name));
    }

    public  function getName()
    {
        return $this->name;
    }

    public function setDescription($description)
    {
        $this->description = ucfirst(strtolower($description));
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setMin($min)
    {
        $this->min = $min;
    }

    public function getMin()
    {
        return $this->min;
    }

    public function setMax($max)
    {
        $this->max = $max;
    }

    public function getMax()
    {
        return $this->max;
    }
}