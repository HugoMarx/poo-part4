<?php

class Car{

    private bool $hasParkBrake = true;

    public function setParkBrake(bool $brakeIsSet){
        $this->hasParkBrake = $brakeIsSet;
        if ($this->hasParkBrake == false){
            return 'Park brake unset <br>'.PHP_EOL;
        } else {
            return 'Park brake set <br>'.PHP_EOL;
        }
    }

    public function start(){

        if ($this->hasParkBrake === true){
            throw new Exception();
        }
        return 'Moving forward <br>';
    }
}