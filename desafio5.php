

<!-- 5) Escreva um programa que inverta os caracteres de um string.


IMPORTANTE:

a) Essa string pode ser informada através de qualquer entrada de sua preferência ou pode ser previamente definida no código;

b) Evite usar funções prontas, como, por exemplo, reverse; -->



<?php

    $palavra = "teste";

    $inverso = " ";
    $i = 0;
    for ($k=strlen($palavra); $k >= 0; $k--) { 
        // echo($palavra[$k]);
        $inverso .= $palavra[$k];
        $i++;
    }
    echo($inverso);
?>