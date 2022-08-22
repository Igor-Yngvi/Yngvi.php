<div><?php
    //Gera numero aleatorio
    $numero = rand(1, 32);
    //Estrutura condicional
    //if/else
    if($numero%2 == 0)
        echo "Número $numero é par";
    else if ($numero%2 == 1)
        echo "Número $numero é impar";
    else
        echo "E ai...";
    echo '<br>';
    //operador ternario
    echo ($numero%2) == 0 ? "Par" : "Impar";
?></div>
<div><?php
echo "O número que foi gerado é $numero";
?></div>
<style>
    div{
        width: 200px;
        border: 2px solid red;  
        padding:25px;
        margin: 25px;
    }
</style>