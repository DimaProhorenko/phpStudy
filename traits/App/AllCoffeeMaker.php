<?php

namespace App;

use Helpers\CappuccinoTrait;
use Helpers\LatteTrait;

class AllCoffeeMaker extends CoffeeMaker
{
    use CappuccinoTrait;
    use LatteTrait {
        LatteTrait::boilWater insteadof CappuccinoTrait;
    }
}
