<?php

/**
 * Class vehicle
 */

class vehicle
{
    public function __construct($vehicleNo, $wheels, $axle, $type, $duty) {

        $this->vehicleNo = $vehicleNo;
        $this->wheels = $wheels;
        $this->axle = $axle;
        $this->type = $type;
        $this->duty = $duty;
        $this->tax = 0;
    }

    public function taxFreeVehicle($state, $vehicleNo, $duty) {

        if ($this->getState($vehicleNo) == $state) {
            echo "Vehicle is from same state.No tax.Thank you!! \n";
            exit;
        }

        if ($this->governmentDuty($duty)) {
            echo "Vehicle is on government duty.No tax.Thank you!! \n";
            exit;
        }
    }

    public function getState() {
        $vehicle = array_reverse(explode('-', $this->vehicleNo));
        return array_pop($vehicle);
    }

    public function governmentDuty($type) {
        return $type ? true : false;
    }
}
?>