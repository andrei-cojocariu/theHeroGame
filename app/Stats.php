<?php
/**
 * Created by PhpStorm.
 * User: Andrei C
 * Date: 8/20/2019
 * Time: 12:19 PM
 */

namespace app\Stats;

require_once("StatsAbstract.php");

use app\StatsAbstract\StatsAbstract;

class Stats extends StatsAbstract
{
    public function __construct($stats)
    {
        $this->setHealth($stats->health);
        $this->setStrength($stats->strength);
        $this->setDefence($stats->defence);
        $this->setSpeed($stats->speed);
        $this->setLuck($stats->luck);
    }
}