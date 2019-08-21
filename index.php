<?php
/**
 * Created by PhpStorm.
 * User: Andrei C
 * Date: 8/13/2019
 * Time: 7:19 PM
 */

require_once('vendor\autoload.php');
require_once('app\Character.php');
require_once('app\GenerateBattle.php');

use app\Character\Character;
use app\GenerateBattle\GenerateBattle;

$orderus = new Character('characters/orderus.json');
$beast = new Character('characters/beast.json');

?>

<html>
<h1>Characters</h1>
<table>
    <tr>
        <td valign="top" align="left">
            <h2><?php echo $orderus->getName(); ?></h2>
            <h3>Stats:</h3>
            <ul>
                <li><?php echo $orderus->getStats()->getHealth()->getName(); ?>:</li>
                <ul>
                    <li>
                        Description: <?php echo $orderus->getStats()->getHealth()->getDescription(); ?>
                    </li>
                    <li>
                        Min: <?php echo $orderus->getStats()->getHealth()->getMin(); ?> -
                        Max: <?php echo $orderus->getStats()->getHealth()->getMax(); ?>
                    </li>
                </ul>
                <li><?php echo $orderus->getStats()->getStrength()->getName(); ?>:</li>
                <ul>
                    <li>
                        Description: <?php echo $orderus->getStats()->getStrength()->getDescription(); ?>
                    </li>
                    <li>
                        Min: <?php echo $orderus->getStats()->getStrength()->getMin(); ?> -
                        Max: <?php echo $orderus->getStats()->getStrength()->getMax(); ?>
                    </li>
                </ul>
                <li><?php echo $orderus->getStats()->getDefence()->getName(); ?>:</li>
                <ul>
                    <li>
                        Description: <?php echo $orderus->getStats()->getDefence()->getDescription(); ?>
                    </li>
                    <li>
                        Min: <?php echo $orderus->getStats()->getDefence()->getMin(); ?> -
                        Max: <?php echo $orderus->getStats()->getDefence()->getMax(); ?>
                    </li>
                </ul>
                <li><?php echo $orderus->getStats()->getSpeed()->getName(); ?>:</li>
                <ul>
                    <li>
                        Description: <?php echo $orderus->getStats()->getSpeed()->getDescription(); ?>
                    </li>
                    <li>
                        Min: <?php echo $orderus->getStats()->getSpeed()->getMin(); ?> -
                        Max: <?php echo $orderus->getStats()->getSpeed()->getMax(); ?>
                    </li>
                </ul>
                <li><?php echo $orderus->getStats()->getLuck()->getName(); ?>:</li>
                <ul>
                    <li>
                        Description: <?php echo $orderus->getStats()->getLuck()->getDescription(); ?>
                    </li>
                    <li>
                        Min: <?php echo $orderus->getStats()->getLuck()->getMin(); ?> -
                        Max: <?php echo $orderus->getStats()->getLuck()->getMax(); ?>
                    </li>
                </ul>
            </ul>
            <h3>Skills:</h3>

            <ul>
                <?php
                $skills = $orderus->getSkills();
                if (empty((array)$skills)) {
                    echo "No Special Skills";
                } else {
                    foreach ($skills as $key => $skill) { ?>
                        <li><h4><?php echo $skill->getName(); ?>:</h4></li>
                        <ul>
                            <li><?php echo $skill->getDescription(); ?></li>
                            <li><?php echo $skill->getAffects(); ?></li>
                            <li><?php echo $skill->getType(); ?></li>
                            <li><?php echo $skill->getChance(); ?></li>
                            <li><?php echo $skill->getHow(); ?></li>
                            <li><?php echo $skill->getWhen(); ?></li>
                        </ul>
                        <?php
                    }
                }
                ?>
            </ul>

        </td>
        <td valign="top" align="left">
            <h2><?php echo $beast->getName(); ?></h2>
            <h3>Stats:</h3>
            <ul>
                <li><?php echo $beast->getStats()->getHealth()->getName(); ?>:</li>
                <ul>
                    <li>
                        Description: <?php echo $beast->getStats()->getHealth()->getDescription(); ?>
                    </li>
                    <li>
                        Min: <?php echo $beast->getStats()->getHealth()->getMin(); ?> -
                        Max: <?php echo $beast->getStats()->getHealth()->getMax(); ?>
                    </li>
                </ul>
                <li><?php echo $beast->getStats()->getStrength()->getName(); ?>:</li>
                <ul>
                    <li>
                        Description: <?php echo $beast->getStats()->getStrength()->getDescription(); ?>
                    </li>
                    <li>
                        Min: <?php echo $beast->getStats()->getStrength()->getMin(); ?> -
                        Max: <?php echo $beast->getStats()->getStrength()->getMax(); ?>
                    </li>
                </ul>
                <li><?php echo $beast->getStats()->getDefence()->getName(); ?>:</li>
                <ul>
                    <li>
                        Description: <?php echo $beast->getStats()->getDefence()->getDescription(); ?>
                    </li>
                    <li>
                        Min: <?php echo $beast->getStats()->getDefence()->getMin(); ?> -
                        Max: <?php echo $beast->getStats()->getDefence()->getMax(); ?>
                    </li>
                </ul>
                <li><?php echo $beast->getStats()->getSpeed()->getName(); ?>:</li>
                <ul>
                    <li>
                        Description: <?php echo $beast->getStats()->getSpeed()->getDescription(); ?>
                    </li>
                    <li>
                        Min: <?php echo $beast->getStats()->getSpeed()->getMin(); ?> -
                        Max: <?php echo $beast->getStats()->getSpeed()->getMax(); ?>
                    </li>
                </ul>
                <li><?php echo $beast->getStats()->getLuck()->getName(); ?>:</li>
                <ul>
                    <li>
                        Description: <?php echo $beast->getStats()->getLuck()->getDescription(); ?>
                    </li>
                    <li>
                        Min: <?php echo $beast->getStats()->getLuck()->getMin(); ?> -
                        Max: <?php echo $beast->getStats()->getLuck()->getMax(); ?>
                    </li>
                </ul>
            </ul>
            <h3>Skills:</h3>
            <ul>
                <?php
                $skills = $beast->getSkills();
                if (empty((array)$skills)) {
                    echo "No Special Skills";
                } else {
                    foreach ($skills as $key => $skill) { ?>
                        <li><h4><?php echo $skill->getName(); ?>:</h4></li>
                        <ul>
                            <li><?php echo $skill->getDescription(); ?></li>
                            <li><?php echo $skill->getAffects(); ?></li>
                            <li><?php echo $skill->getType(); ?></li>
                            <li><?php echo $skill->getChance(); ?></li>
                            <li><?php echo $skill->getHow(); ?></li>
                            <li><?php echo $skill->getWhen(); ?></li>
                        </ul>
                        <?php
                    }
                }
                ?>
            </ul>
        </td>
        <td valign="top" align="left">
            <h2>Battle:</h2>
            <table width="100%">
                <tr>
                    <td width="50%" align="left" valign="top">
                        <h2>
                            <?php
                            $orderus->generateBattleStats($orderus->getStats());
                            echo $orderus->getName();
                            ?>
                        </h2>
                        <h3>Battle stats:</h3>
                        <ul>
                            <li>Health: <?php echo $orderus->getGeneratedHealth(); ?></li>
                            <li>Strength: <?php echo $orderus->getGeneratedStrength(); ?></li>
                            <li>Defence: <?php echo $orderus->getGeneratedDefence(); ?></li>
                            <li>Speed: <?php echo $orderus->getGeneratedSpeed(); ?></li>
                            <li>Luck: <?php echo $orderus->getGeneratedLuck(); ?></li>
                        </ul>
                    </td>
                    <td width="50%" align="left" valign="top">
                        <h2>
                            <?php
                            $beast->generateBattleStats($orderus->getStats());
                            echo $beast->getName();
                            ?>
                        </h2>
                        <h3>Battle stats:</h3>
                        <ul>
                            <li>Health: <?php echo $beast->getGeneratedHealth(); ?></li>
                            <li>Strength: <?php echo $beast->getGeneratedStrength(); ?></li>
                            <li>Defence: <?php echo $beast->getGeneratedDefence(); ?></li>
                            <li>Speed: <?php echo $beast->getGeneratedSpeed(); ?></li>
                            <li>Luck: <?php echo $beast->getGeneratedLuck(); ?></li>
                        </ul>
                    </td>
                </tr>
            </table>
            <h2>Battle Stage:</h2>
            <?php
            $battle = new GenerateBattle ($orderus, $beast);
            $rounds = $battle->getBattle();

            $i = 1;
            foreach ($rounds as $round) {
                ?>

                <h3>Round <?php echo $i; ?>:</h3>
                <table>
                    <tr>
                        <td>
                            <h4><?php echo $battle->getPlayer1()->getName(); ?></h4>
                            <ul>
                                <li>Health: <?php echo $round[$battle->getPlayer1()->getName()]['health']; ?></li>
                                <li>Strength: <?php echo $battle->getPlayer1()->getGeneratedStrength(); ?></li>
                                <li>Defence: <?php echo $battle->getPlayer1()->getGeneratedDefence(); ?></li>
                                <li>Speed: <?php echo $battle->getPlayer1()->getGeneratedSpeed(); ?></li>
                                <li>Luck: <?php echo $battle->getPlayer1()->getGeneratedLuck(); ?></li>
                            </ul>
                            <h5>Skills Ussed:</h5>
                            <ul>
                                <li>None</li>
                            </ul>
                        </td>
                        <td valign="top" align="center">
                            <?php
                                if ($i%2 != 0) {
                                    echo "> Attacks: ".$round["damage"]." damage >";
                                } else {
                                    echo "< Attacks: ".$round["damage"]." damage <";
                                }
                            ?>
                        </td>
                        <td>
                            <h4><?php echo $battle->getPlayer2()->getName(); ?></h4>
                            <ul>
                                <li>Health: <?php echo $round[$battle->getPlayer2()->getName()]['health'];; ?></li>
                                <li>Strength: <?php echo $battle->getPlayer2()->getGeneratedStrength(); ?></li>
                                <li>Defence: <?php echo $battle->getPlayer2()->getGeneratedDefence(); ?></li>
                                <li>Speed: <?php echo $battle->getPlayer2()->getGeneratedSpeed(); ?></li>
                                <li>Luck: <?php echo $battle->getPlayer2()->getGeneratedLuck(); ?></li>
                            </ul>
                            <h5>Skills Ussed:</h5>
                            <ul>
                                <li>None available</li>
                            </ul>
                        </td>
                    </tr>
                </table>
                <?php
                $i++;
            }
            ?>
        </td>
    </tr>
    </tr>
</table>
</html>
