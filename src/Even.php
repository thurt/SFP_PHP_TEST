<?php
namespace Sfp;

class Even {
    public function execute() {
        $fnums = fopen("assets/numbers.csv", "r");

        // return -1 if file does not exist
        if ($fnums == false) {
            return -1;
        }

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
}

$MyEven = new Even();
print $MyEven->execute();
?>
