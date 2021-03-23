<?php
interface IUnit{

    function equip($gun);

    function attack($target);

    function receiveDamage($hurt);

    function moveCloseTo($place);

    function recoverAP();

}