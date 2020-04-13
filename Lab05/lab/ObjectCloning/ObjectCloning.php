<?php
    class ObjectTracker {
        private static $nextSerial = 0;
        private $id, $name;
        
        function __construct() {
            $this->name = $name;
            $this->id = ++self::$nextSerial;
        }
        
        function __clone() {
            $this->name = "Clone of $this->name";
            $this->id = ++self::$nextSerial;
        }
        
        function getId() {
            return ($this->id);
        }
        
        function getName() {
            return ($this->name);
        }
        
        function setName() {
            $this->name = $name;
        }
    }
    
    $ot1 = new ObjectTracker("My object");
    $ot2 = clone $ot1;
    $ot2->setName("My other object");
    
    print($ot1->getId() . " " . $ot1->getName() . "<br>");
    print($ot2->getId() . " " . $ot2->getName() . "<br>");


    
?>