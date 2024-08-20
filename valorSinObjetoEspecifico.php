<?php
function obtenerHoraPredeterminada() {
    return 7;
}

function establecerHoraPredeterminada(int $hora) {
    global $horaPredeterminada;
    $horaPredeterminada = $hora;
}

$horaPredeterminada = obtenerHoraPredeterminada();

establecerHoraPredeterminada(8);

echo "La nueva hora de entrada es " . $horaPredeterminada;

