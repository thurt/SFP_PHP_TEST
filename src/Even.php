<?php
namespace Sfp;

class Even {
    public function execute() {
        $fnums = fopen("assets/numbers.csv", "r");

        if ($fnums != false) {
            $count = 0;

            while (!feof($fnums)) {
                $v = fgets($fnums);
                if ($v % 2 == 0) {
                    $count++;
                }
            }
            fclose($fnums);

            return $count;
        }

        return -1;
    }
}

$MyEven = new Even();
print $MyEven->execute();
?>
