<?php
/**
 * Created by PhpStorm.
 * User: Andrei C
 * Date: 8/21/2019
 * Time: 9:39 AM
 */

namespace app\GenerateBattle;

require_once ("GenerateBattleAbstract.php");

use app\GenerateBattleAbstract\GenerateBattleAbstract;

class GenerateBattle extends GenerateBattleAbstract
{

    public function __construct($hero, $beast)
    {
        $this->setFirstStriker($hero, $beast);
        $this->doBattle($this->player1, $this->player2);
    }

}