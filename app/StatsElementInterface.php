<?php
/**
 * Created by PhpStorm.
 * User: Andrei C
 * Date: 8/20/2019
 * Time: 12:59 PM
 */

namespace app\StatsElementInterface;

interface StatsElementInterface
{
    function setName($name);

    function getName();

    function setDescription($description);

    function getDescription();

    function setType($type);

    function getType();

    function setMin($min);

    function getMin();

    function setMax($max);

    function getMax();
}