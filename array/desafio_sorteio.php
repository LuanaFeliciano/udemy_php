<div class="titulo">Desafio Sorteio</div>

<?php
$nomes = ["Elza", "Rapunzel", "Branca de neve", "Cinderela"];
$index_rand = array_rand($nomes);
echo "<div center><h1>{$nomes[$index_rand]}</h1></div>"

?>

<style>
    [center] {
        display: flex;
        justify-content: center;
    }
</style>