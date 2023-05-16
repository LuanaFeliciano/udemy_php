<div class="titulo">Desafio For</div>

<!-- 
Usar o for...
#
##
###
####
#####
1) Pode usar incremento $i++
2) Não pode usar incremento $i++
-->

<?php
for($i=0;$i<5;$i++){
    $asteriscos .= '#';
    echo $asteriscos . "<br>";
}

for(
    $impressao2 = '#';
    $impressao2 !== '######'; 
    $impressao2 .= '#'
) {
    echo "$impressao2 <br>";
}