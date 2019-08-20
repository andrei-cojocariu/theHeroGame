<?php
/**
 * Created by PhpStorm.
 * User: Andrei C
 * Date: 8/13/2019
 * Time: 7:20 PM
 */

namespace app\CharacterInterface;

require_once('Stats.php');
require_once('Skills.php');

interface CharacterInterface
{
    /**
     * Returns Character Name
     *
     * @return string
     */
    function getName();

    /**
     * Sets Character Name
     *
     * @param $name
     *
     * @return void
     */
    function setName($name);

    /**
     * Returns characters stats
     *
     * @return void
     */
    function getStats();

    /**
     * Set Characters stats
     *
     * @param $stats
     *
     * @return void
     */
    function setStats($stats);

    /**
     * Get Characters Skills
     *
     * @return object
     */
    function getSkills();

    /**
     * Set Characters skills
     *
     * @param $skills
     *
     * @return object
     */
    function setSkills($skills);
}