<?php
class Gecko{
    
    public $friends=array();
    public Skill $skills;

    function __construct(array $friend=null, Skill $skill){
        $this->friends=$friend;
        $this->skills=$skill;
    }

}