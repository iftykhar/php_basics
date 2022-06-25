<?php

class plane{
    public $boing = "boing 747"; //properties
    public $airbus = "airbus 191";

    public function traffic(){//methods
        $plane = $this-> boing;
        echo "this is a $plane aircraft";
    }
}

$test_case = new plane;

// var_dump($test_case);
echo $test_case->traffic();