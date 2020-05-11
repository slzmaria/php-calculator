<?php       
    function sum(int $x, int $y) {
        return $x + $y;
    }

    function sub(int $x, int $y) {
        return $x - $y;
    }

    function div(int $x, int $y) {
        return $x / $y;
    }

    function mul(int $x, int $y) {
        return $x * $y;
    }
    
    $a = (int) $_POST['a'];
    $b = (int) $_POST['b'];
    $operation = isset($_POST['operation']) ? $_POST['operation'] : 'undefined';

    if ($operation === 'Sum') {
        $result = sum($a, $b);
    }

    if ($operation === 'Sub') {
        $result = sub($a, $b);
    }

    if ($operation === 'Div') {
        $result = div($a, $b);
    }

    if ($operation === 'Mul') {
        $result = mul($a, $b);
    }

    if ($result === null) {
        echo 'Unexpected operation';
        exit;
    }
   
    echo '<h5 class="result">Result is ', $result, '</h5>';

