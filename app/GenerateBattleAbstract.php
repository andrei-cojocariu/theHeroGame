<?php
/**
 * Created by PhpStorm.
 * User: Andrei C
 * Date: 8/21/2019
 * Time: 9:38 AM
 */

namespace app\GenerateBattleAbstract;

require_once("GenerateBattleInterface.php");

use app\GenerateBattleInterface\GenerateBattleInterface;

abstract class GenerateBattleAbstract implements GenerateBattleInterface
{
    protected $player1;
    protected $player2;
    protected $battle;

    public function getPlayer1()
    {
        return $this->player1;
    }

    public function getPlayer2()
    {
        return $this->player2;
    }

    protected function setFirstStriker($hero, $beast)
    {
        if ($hero->getGeneratedSpeed() > $beast->getGeneratedSpeed()) {
            $this->player1 = $hero;
            $this->player2 = $beast;
        } elseif ($hero->getGeneratedSpeed() < $beast->getGeneratedSpeed()) {
            $this->player1 = $beast;
            $this->player2 = $hero;
        } elseif ($hero->getGeneratedSpeed() == $beast->getGeneratedSpeed()) {
            if ($hero->getGeneratedLuck() > $beast->getGeneratedLuck()) {
                $this->player1 = $hero;
                $this->player2 = $beast;
            } elseif ($hero->getGeneratedLuck() < $beast->getGeneratedLuck()) {
                $this->player1 = $beast;
                $this->player2 = $hero;
            } else {
                // for bought equal we will spin a coin
                // odds for beast, evan for hero
                $rand = rand(1, 10);
                if ($rand % 2 == 0) {
                    $this->player1 = $hero;
                    $this->player2 = $beast;
                } else {
                    $this->player1 = $beast;
                    $this->player2 = $hero;
                }
            }
        }

    }

    public function getBattle()
    {
        return $this->battle;
    }

    private function getStats($player)
    {
        $return['health'] = $player->getGeneratedHealth();
        $return['strength'] = $player->getGeneratedStrength();
        $return['defence'] = $player->getGeneratedDefence();

        return $return;
    }

    protected function doBattle($player1, $player2)
    {
        $round = 1;

        $player1Stats = $this->getStats($player1);
        $player2Stats = $this->getStats($player2);

        while ($player1Stats['health'] > 0 && $player2Stats['health'] > 0) {
            if ($round % 2 != 0) {
                $this->battle[$round]["damage"] = $player1Stats['strength'] - $player2Stats['defence'];
                $player2Stats['health'] -= $this->battle[$round]["damage"];

            } else {
                $this->battle[$round]["damage"] = $player2Stats['strength'] - $player1Stats['defence'];
                $player1Stats['health'] -= $this->battle[$round]["damage"];
            }

            $this->battle[$round][$player1->getName()]['health'] = $player1Stats['health'];
            $this->battle[$round][$player2->getName()]['health'] = $player2Stats['health'];

            $round++;
        };
    }

}