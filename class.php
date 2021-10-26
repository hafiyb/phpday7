<?php

class person{
    public $name;
    public $dob;
    public $hobby;

    function set_name($name){
        $this->name2 = $name;
    }
    function set_dob($dob){
        $this->dob = floor((time() - strtotime($dob)) / (60*60*24*365));;
    }
    function set_hobby($hobby){
        $this->hobby = $hobby;
    }

    function get_name(){
        return $this->name2;
    }
    function get_dob(){
        
        return $this->dob;
    }
    function get_hobby(){
        return $this->hobby;
    }
}



?>