<?php
// File: info.php

// Detailed Information about BMW F90 M5 Specifications and Features

class BMWF90M5 {
    public $name = 'BMW F90 M5';
    public $productionYears = '2017 - present';
    public $bodyStyle = '4-door sedan';
    public $engine = '4.4L V8 twin-turbocharged';
    public $horsepower = '600 hp';
    public $torque = '750 Nm';
    public $transmission = '8-speed automatic';
    public $drivetrain = 'AWD (All-Wheel Drive)';
    public $acceleration = '0-100 km/h in 3.3 seconds';
    public $topSpeed = '250 km/h (electronically limited)';
    public $features = [
        'Adaptive LED headlights',
        'M Servotronic steering',
        'Dynamic Stability Control (DSC)',
        'M Compound brakes',
        'M dynamic mode',
        'High-performance head-up display',
        'Optional executive package',
        'Premium Harman Kardon sound system',
    ];

    public function getSpecifications() {
        return [
            'Name' => $this->name,
            'Production Years' => $this->productionYears,
            'Body Style' => $this->bodyStyle,
            'Engine' => $this->engine,
            'Horsepower' => $this->horsepower,
            'Torque' => $this->torque,
            'Transmission' => $this->transmission,
            'Drivetrain' => $this->drivetrain,
            'Acceleration' => $this->acceleration,
            'Top Speed' => $this->topSpeed,
            'Features' => implode(', ', $this->features),
        ];
    }
}

// Create an instance of BMWF90M5
$m5 = new BMWF90M5();

// Display specifications
print_r($m5->getSpecifications());
?>