<?php
    $selecao = $_POST['num1'];
    $selecao2 = $_POST['num2'];
    $selecao3 = $_POST['num3'];


    echo 'O maior valor entre os três números é:'.max($selecao,$selecao2,$selecao3);
    echo '<br>';
    echo 'O manor valor entre os três números é:'.min($selecao,$selecao2,$selecao3);

?>