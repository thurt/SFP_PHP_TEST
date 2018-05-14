<?php
namespace Sfp;

class Rotate {
    // default rotate value
    private $rotate = 1;

    function __construct($rotate) {
        // do not replace default rotate value unless provided value is an int that is gte 0
        if (is_int($rotate) && $rotate >= 0) {
            $this->rotate = $rotate;
        }
    }

    public function execute() {
        $contents = file_get_contents("assets/rotate.json");

        // return empty array if file does not exist
        if ($contents == false) {
            return [];
        }

        $a = json_decode($contents);

        // return empty array if file contents cannot be decoded
        if ($a == null) {
            return [];
        }

        $i = 0;
        while ($i < $this->rotate) {
            $v = array_shift($a);
            array_push($a, $v);
            $i++;
        }

        return $a;
    }
}

$MyRotate = new Rotate(3);
print join(",",$MyRotate->execute());
?>
