<?php
include_once("AMonster.php");
include_once("ASpaceMarine.php");
include_once("AWeapon.php");
    class SpaceArena{
        
    private $monsTeam=array();
    private $mariTeam=array();
    private $monshpbuffer;
    private $mariapbuffer;
    private $marihpbuffer;
    private $monsapbuffer;

    function enlistMonsters($array){
        if (gettype($array)=="array"){
            foreach ($array as $monster){
                if (get_parent_class($monster)!="AMonster"){
                    throw new Exception("Stop trying to cheat!");
                }
                else{
                    array_push($monsTeam, $monster);   
                }
            }
            array_unique($monsTeam);
        }
    }

    function enlistSpaceMarines($array){
        if (gettype($array)=="array"){
            foreach ($array as $marine){
                if (get_parent_class($marine)!="ASpaceMarine"){
                    throw new Exception("Stop trying to cheat!");
                }
                else{
                    array_push($mariTeam, $marine); 
                     
                }
            }
            array_unique($mariTeam);
        }   
    }

    function fight(){
        if (count($monsTeam)==0){
            echo "No monster available to fight.\n";
            exit();
        }
        elseif (count($mariTeam)==0){
            echo "Those cowards ran away.\n";
        }
        else{
            while (count($monsTeam)>0 || count($mariTeam)>0):
                echo $mariTeam[0]->name." has entered the arena.\n";
                echo $monsTeam[0]->name." has entered the arena.\n";
                while ($monsTeam[0]->dead!=true || $mariTeam[0]->dead!=true):
                    $this->monshpbuffer=$monsTeam[0]->hp;
                    $mariTeam[0]->attack($monsTeam[0]);
                    if ($this->monshpbuffer==$monsTeam[0]->hp){
                        $this->mariapbuffer=$mariTeam[0]->ap;
                        $mariTeam[0]->moveCloseTo($monsTeam[0]);
                        if ($this->mariapbuffer==$mariTeam[0]->ap){
                            $mariTeam[0]->recoverAP();
                        }
                    }
                    $this->marihpbuffer=$mariTeam[0]->hp;
                    $monsTeam[0]->attack($mariTeam[0]);
                    if ($this->marihpbuffer==$mariTeam[0]->hp){
                        $this->monsapbuffer=$monsTeam[0]->ap;
                        $monsTeam[0]->moveCloseTo($mariTeam[0]);
                        if ($this->monsapbuffer==$monsTeam[0]->ap){
                            $monsTeam[0]->recoverAP();
                        }
                    }
                endwhile;
                if($monsTeam[0]->dead==true){
                    array_shift($monsTeam);
                    $mariTeam[0]->recoverAP();
                }
                else{
                    array_shift($mariTeam);
                    $monsTeam[0]->recoverAP();
                }
            endwhile;
            if (count($monsTeam)==0){
                echo "The spaceMarines are victorious.\n";
            }
            else{
                echo "The monsters are victorious.\n";
            }
        }
    }


}