<div class="titulo">Data</div>

<?php
class Data {
    public $dia = 1;
    public $mes = 1;
    public $ano = 1970;

    public function apresentar() {
        return "{$this->dia}/{$this->mes}/{$this->ano}";
    }
}

$aniversario = new Data;
$aniversario->dia = 17;
$aniversario->mes = 10;
$aniversario->ano = 2003;
echo $aniversario->apresentar();