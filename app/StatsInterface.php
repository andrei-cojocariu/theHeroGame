<?php
/**
 * Created by PhpStorm.
 * User: Andrei C
 * Date: 8/20/2019
 * Time: 12:13 PM
 */

namespace app\StatsInterface;

require_once('StatsElement.php');

interface StatsInterface
{
    function setHealth($health);

    function getHealth();

    function setStrength($strength);

    function getStrength();

    function setDefence($defence);

    function getDefence();

    function setSpeed($speed);

    function getSpeed();

    function setLuck($luck);

    function getLuck();
}