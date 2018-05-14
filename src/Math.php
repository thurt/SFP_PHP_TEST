<?php
namespace Sfp;

class Math {
    public function execute() {
        $ftab = fopen("assets/tabular.csv", "r");
        
        if ($ftab == false) {
            return -1.0;
        }

        // column names
        $acols = fgetcsv($ftab);

        // rows
        $arows = array();


        // make each row an associative array and push into rows array
        while (!feof($ftab)) {
            $a = fgetcsv($ftab);
            array_push($arows, array($acols[0]=>$a[0],$acols[1]=>$a[1],$acols[2]=>$a[2]));
        }

        // sum the values
        $sum = 0;
        $count = 0;
        foreach($arows as $row) {
            if ($row["accept"] == "true") {
                $sum += $row["value"];
                $count++;
            } 
        }

        return $sum/$count;
    }


}

$MyMath = new Math();
print $MyMath->execute();
?>
