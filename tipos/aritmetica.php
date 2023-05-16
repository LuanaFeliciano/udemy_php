<div class="titulo">Operações Aritiméticas</div>

<?php
echo 1+1, '<br>';
var_dump(1+1);
echo '<br>';

echo 1+2.5, '<br>';
echo 2*5, '<br>';
echo 7/4, '<br>';
echo intdiv(7,4), '<br>'; //tira as casas decimais
echo round(7/4), '<br>'; //arredonda

echo 7%4, '<br>'; //ve o resto

echo 4**2; //exponenciação

// Precedência de operadores:
// () => ** => / * % => + -
echo '<p>Precedência</p>';
echo 2 + 3 * 4, '<br>';
echo (2 + 3) * 4, '<br>';
echo 2 + 3 * 4 ** 2, '<br>';
echo ((2 + 3) * 4) ** 2;