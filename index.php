<html>
<head></head>
<body>
  <h1>Calculator</h1>
  <?php
    $a = (int) $_POST['a'];
    $b = (int) $_POST['b'];
    $operation = isset($_POST['operation']) ? $_POST['operation'] : 'undefined';
  ?>
  <form method="POST">
    <div>
       <label>A</label>
       <input type="text" name="a" placeholder="Input a here">                                                                                                        
    </div>
    <div>
        <label>B</label>
        <input type="text" name="b" placeholder="Input b here">
    </div>
    <div>
        <label>Operation</label>
        <select name="operation">
            <option value="Sum">Sum</option>
            <option value="Sub">Subtraction</option>
            <option value="Mul">Multiply</option>
            <option value="Div">Divide</option>
        </select>
    </div>
    <br>
    <div>
        <button type="submit">Calculate</button>
    </div>
  </form>
   <p><h2>
      <?php       
         $result = null;

        if (!is_numeric($a) || !is_numeric($b)) {
           echo 'Invalid arguments';
           exit;
        }

        if ($operation === 'Sum') {
            $result = $a + $b;
        }

        if ($operation === 'Sub') {
            $result = $a - $b;
        }

        if ($operation === 'Div') {
            $result = $a / $b;
        }

        if ($operation === 'Mul') {
            $result = $a * $b;
        }

        if ($result === null) {
            echo 'Unexpected operation';
            exit;
        }
       
        echo 'Result:', $result;
    ?>  
  </p></h2>
</body>
</html>
