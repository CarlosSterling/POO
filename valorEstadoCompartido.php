<?php

class HorarioPredeterminado{

    public static int $horaPredeterminada = 7;

    public static function establecerHoraDeEntrada(int $horaEntrada){
        self::$horaPredeterminada = $horaEntrada;
    }

    public static function obtenerHoraDeEntrada():int{
        return self::$horaPredeterminada;
    }
}

    HorarioPredeterminado::establecerHoraDeEntrada(8);

    echo "La nueva hora de entreda es ". HorarioPredeterminado::obtenerHoraDeEntrada();


