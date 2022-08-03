<div class="top">
    <p>Vamos ver se essas pessoas já podem votar</p>
</div>
<?php
    //definindo o nome do cidadão
    $nome = rand(1, 10);

    switch($nome){
        case 1:
            $nome = "Isabelli da Silva";
            break;
        case 2:
            $nome = "José de Antunes Carlos";
            break;
        case 3:
            $nome = "Pedro Soares da Silva";
            break;
        case 4:
            $nome = "Rita de Carvalho Diniz";
            break;
        case 5:
            $nome = "Gabriel da Silva de Jesus";
            break;
        case 6:
            $nome = "Liana da Cruz Silva";
            break;
        case 7:
            $nome = "Nicolas de Oliveira";
            break;
        case 8:
            $nome = "Nicolas Torquato ";
            break;
        case 9:
            $nome = "Igor Henrique da Silva";
            break;
        default:
            $nome = "Thales Gabriel";
    }
    //fim da definição do nome

    //definindo a idade
    $idade = rand(1, 80);


    //fim da definição de idade

    //Definindo alfabetização
    $alfa = rand(1, 2);

    if($alfa == 1)
        $alfa = "Sim";
    else
        $alfa = "Não";
    //fim da definição de alfabetização

    if(($idade < 16) || ($alfa == "Não"))
        $vota = "Não";
    else
        $vota = "Sim";

    //definindo a obrigatoriedade
    if($vota == "Não")
        $ob = "Não";
    else if (($idade >= 18) || ($idade <=70))
        $ob = "Sim";
    //fim da definição de obrigatoriedade

    //definição se quer ou não votar 
    $q = rand(1, 2);

    if ($q == 1)
        $q = "Sim";
    else
        $q = "Não";
    //fim da definição de obrigatoriedade

    //mostrar na tela as informações
    echo
    "<div class='name'>
        <p>$nome</p>
        <img src='img/perfil.png'>
        <p>Idade do cidadão: $idade</p>
        <p>É alfabetizado: $alfa</p>
        <p>Pode votar: $vota</p>
        <p>É obrigatorio: $ob </p>
        <p>Quer votar: $q</p>
        <button><a href='index.php'>Próximo</a></button>
    </div>";
?>
<style>
    *{
        font: inherit;
        vertical-align: baseline;
    }
    body{
        background-image: linear-gradient(#ffffff , #898989);
    }
    div {
        margin: auto;
        width: 850px;
        text-align: center;
        background-color: white;
    }
    .top{
        border: 8px solid black;
        padding: 20px;
        font-size: 20px;
        text-transform: uppercase;
        margin-top: 30px;
    }
    .name{
        border: 8px solid black;
        margin-top: 10px;
        padding: 20px;
        font-size: 20px;
        height: 600px;
        margin-top: 10px;
    }
    img{
        border: 5px solid black;
    }
    a{
        text-decoration: none;
        color: black;
    }
    button:hover{
        transform: scale(1.1);
    }
</style>