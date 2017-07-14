<?php

/**
 * Class tollPlaza
 */

class tollPlaza
{
    public function __construct($state) {
        $this->tax = 20;
        $this->state = $state;
    }

    public function getTax($wheels, $axle, $type) {
        switch ($wheels) {
            case 2 :
                return 20;
                break;

            case 3 :
                return 50;
                break;

            case 4 :
                return $type ? 100 : 200;
                break;

            case 6 :
                return 500 + ($axle * 100);
                break;
        }
    }

    public function calculateTax($vehicle) {
        $vehicle->taxFreeVehicle( $this->state, $vehicle->vehicleNo, $vehicle->duty);
        $tax = $this->getTax($vehicle->wheels, $vehicle->axle, $vehicle->type);
        echo "Tax for your vehicle is = " . $tax . "\n";
        exit;
    }
}

?>