<?php
namespace Sfp;
include_once("src/Rotate.php");

class Extend extends Rotate {
    public function extend() {
        $a = parent::execute(); 

        // return empty string if result array has no values
        if (!count($a)) {
            return "";
        }

        return $a[count($a)-1];
    }

}

$MyExtend = new Extend(3);
print PHP_EOL . $MyExtend->extend();
?>
