<?php 
    $array = [];

    for($i = 0; $i <= 30; $i++) {
        array_push($array, $i);
    }

    // print_r($array);

    function arrayMaiorQue7($arr) {
        $arrayRetorno = [];

        for ($j=0; $j < count($arr); $j++) {
            if ($arr[$j] > 7) {
                array_push($arrayRetorno, $arr[$j]);
            }
        }

        return $arrayRetorno;
    }

    echo "<pre>";
        print_r(arrayMaiorQue7($array));
    echo "</pre>";
?>