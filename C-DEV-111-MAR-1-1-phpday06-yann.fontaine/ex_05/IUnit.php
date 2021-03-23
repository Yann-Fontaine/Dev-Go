<?php
interface IUnit{

    function equip($weapo);

    function attack($target);

    function receiveDamage($hurt);

    function moveCloseTo($place);

    function recoverAP();

}