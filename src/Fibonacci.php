<?php
namespace Sfp;

class Fibonacci {
    public function execute() {
        $fibTuple = file("assets/fibonacci.csv", FILE_IGNORE_NEW_LINES); 

        // return empty array if file does not exist
        if ($fibTuple == false) {
            return [];
        }

        $v = 0;
        $v2 = 1;
        while ($v != $fibTuple[0] && $v < $fibTuple[0]) {
            $temp = $v2;
            $v2 = $v + $v2;
            $v = $temp;
        }

        // return empty array if first number is not a fibonnaci number
        if ($v > $fibTuple[0]) {
            return [];
        }

        $fibList = array();
        $i = 0;
        while ($i < 10) {
            $fibList[$i] = $v;
            $temp = $v2;
            $v2 = $v + $v2;
            $v = $temp;
            $i++;
        }

        // return empty array if second number is not in the first 10 iterations of the first number
        if (!in_array($fibTuple[1], $fibList)) {
            return [];
        }

        return $fibList;
    }
}

$MyFib = new Fibonacci();
print join(",",$MyFib->execute());
?>
