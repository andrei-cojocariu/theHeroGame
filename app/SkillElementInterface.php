<?php
/**
 * Created by PhpStorm.
 * User: Andrei C
 * Date: 8/20/2019
 * Time: 7:51 PM
 */

namespace app\SkillElementInterface;


interface SkillElementInterface
{
    function setName($name);

    function getName();

    function setDescription($description);

    function getDescription();

    function setAffects($affects);

    function getAffects();

    function setType($type = 'point');

    function getType();

    function setChance($chance = 0);

    function getChance();

    function setHow($how);

    function getHow();

    function setWhen($when);

    function getWhen();
}