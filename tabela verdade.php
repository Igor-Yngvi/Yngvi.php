<?php
    echo '
    <div>
    <p id="tv">Tabela verdade "OR"</p>
    <table style="width: 90%">
            <tr>
                <td>A</td>
                <td>B</td>
                <td>A => B</td>
            </tr>
            <tr>
                <td>V</td>
                <td>V</td>
                <td>V</td>
            </tr>
            <tr>
                <td>V</td>
                <td>F</td>
                <td>V</td>
            </tr>
            <tr>
                <td>F</td>
                <td>V</td>
                <td>V</td>
            </tr>
            <tr>
                <td>F</td>
                <td>F</td>
                <td>F</td>
            </tr>
         </table>
    <p id="tv"> Tabela verdade "And" </p>
    <table style="width: 90%">
        <tr>
            <td>A</td>
            <td>B</td>
            <td>A => B</td>
        </tr>
        <tr>
            <td>V</td>
            <td>V</td>
            <td>V</td>
        </tr>
        <tr>
            <td>V</td>
            <td>F</td>
            <td>F</td>
        </tr>
        <tr>
            <td>F</td>
            <td>V</td>
            <td>F</td>
        </tr>
        <tr>
            <td>F</td>
            <td>F</td>
            <td>F</td>
        </tr>
    </table>
    <p id="tv"> Tabela verdade "NOT" </p>
    <table style="width: 90%">
        <tr>
            <td>A</td>
            <td>~A</td>
        </tr>
        <tr>
            <td>V</td>
            <td>F</td>
        </tr>
        <tr>
            <td>F</td>
            <td>V</td>
        </tr>
    </table>
    <p id="tv"> Tabela verdade "XOR" </p>
    <table style="width: 90%">
    <tr>
        <td>A</td>
        <td>B</td>
        <td>A => B</td>
    </tr>
    <tr>
        <td>V</td>
        <td>V</td>
        <td>F</td>
    </tr>
    <tr>
        <td>V</td>
        <td>F</td>
        <td>V</td>
    </tr>
    <tr>
        <td>F</td>
        <td>V</td>
        <td>V</td>
    </tr>
    <tr>
        <td>F</td>
        <td>F</td>
        <td>F</td>
    </tr>
</table>
 </div>'  ;

?>

<style>
	body{
    	margin: 0;
    	background-color: white;
        color: black;
        font-size: 20px;
        text-align: center;
        border: solid 10px purple;
        background-image: linear-gradient(white, #808080);

    }
    div{
        padding-top: 10%;
        padding-left: 10%;
    }
    table{
        margin: 10px;
        
    }
    table, th, td{
        text-align: center;
        text-decoration: bolder;
        border:1px solid black;
        background-image: linear-gradient(white, #9d9a9a);

    }
    td:hover{
       transform: scale(1.1);
       background-image: linear-gradient(white, #808080);
       border: 1px solid gray;
       user-select: none;
    }
    td:active{
        background-image: linear-gradient(purple, #ffbfff);
        color: white;
    }
    #tv{
        padding-right: 50%;
    }

    p{
        color: purple;
    }

    p:hover {
        opacity: 0.5;
    }
</style>