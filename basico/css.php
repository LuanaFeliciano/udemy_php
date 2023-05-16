<div class="titulo">Integração CSS</div>

<h1 center>
    <?php
        echo "Olá";
        echo " <small>Mundo</small>";
    ?>
</h1>

<div azul center>Outra forma </div>
<?= "<div azul center>Outra forma </div>" ;?>
<br>
<div center><button dobro><?= "Botão" ?></button></div>

<style>
    button {
        padding: 5px <?= 2*10;?>px;
        background-color: #4286f4;
        color: #EEE;
        border: none;
        font-weight: bold;
        border-radius: 8px;
    }

    [center] {
        display: flex;
        justify-content: center;
    }

    [azul]{
        color: #4286f4;
    }

    [dobro] {
        font-size: <?= 2*1;?>rem;
    }

</style>