<?php       

    $a = (int) $_POST['a'];
    $b = (int) $_POST['b'];
    $operation = isset($_POST['operation']) ? $_POST['operation'] : 'undefined';
   
    if ($operation === 'Sum') {
        $result = $c->sum();
    }

    if ($operation === 'Sub') {
        $result = $c->sub();
    }

    if ($operation === 'Div') {
        $result = $c->div();
    }

    if ($operation === 'Mul') {
        $result = $c->mul();
    }

    if ($result === null) {
        echo 'Unexpected operation';
        exit;
    }
  
   
    echo '<h5 class="result">Result is ', $result, '</h5>';

