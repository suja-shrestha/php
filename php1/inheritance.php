<?php
class Inheritance {
    protected $name;
    protected $age;

    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
}

class Tour extends Inheritance {
    private $canGoToTour;

    function displayCanGoToTour() {
        if ($this->age > 20) {
            $this->canGoToTour = "True"; // Assign to the class property
        } else {
            $this->canGoToTour = "False"; // Handle the case when age is not greater than 20
        }
        echo $this->canGoToTour; // Access the class property
    }
}

$obj = new Tour("xyz", "25");
$obj->displayCanGoToTour(); // Call the method
?>
