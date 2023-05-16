<div class="titulo">Desafio Palindromo</div>

<?php
        
function palindromo($palavra)
{
    $minusculas = explode(" ", strtolower($palavra));
    $novaPalavra="";

    foreach($minusculas as $m)
    {
        trim($m); 
        $novaPalavra .= $m; 
    }
    
    if($novaPalavra == strrev($novaPalavra))
    {
        return "É palindromo";
    }
    else {
        return "Nao é";echo"<br>";
    }

}

echo palindromo("Ma riaAlmeida");

?>
