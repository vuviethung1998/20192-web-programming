<?php
    class Counter {
        private static $my_count = 0;
        const VERSION = 2;
        
        function __construct() {
            self::$my_count ++;
        }
        function __destruct() {
            self::$my_count --;
        }
        static function getCount(){
            return self::$my_count;
        }
    }
    
    $c1 = new Counter;
    print($c1->getCount() . "<br>\n");
    
    $c2 = new Counter;
    print($c2->getCount() . "<br>\n");
    
    $c2 = null;
    
    print($c1->getCount() . "<br>\n");
    print("Version used: " . Counter::VERSION . "<br>\n");

?>
