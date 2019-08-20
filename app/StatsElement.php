<?php
/**
 * Created by PhpStorm.
 * User: Andrei C
 * Date: 8/20/2019
 * Time: 1:01 PM
 */

namespace app\StatsElement;

require_once ('StatsElementAbstract.php');

use app\StatsElementAbstract\StatsElementAbstract;

class StatsElement extends StatsElementAbstract
{
    public function __construct($element)
    {
        $this->setName($element->name);
        $this->setDescription($element->description);
        $this->setType($element->type);
        $this->setMin($element->min);
        $this->setMax($element->max);
    }
}