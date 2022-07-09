<?php

while(1){
    $x = readline("Enter the password: ");

    if($x == "2002")
    {
        echo "Acesso Permitido\n";
        break;
    }
    else
    {
        echo "Senha Invalida\n";
    }
}


?>