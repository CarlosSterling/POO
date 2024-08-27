<?php

class Deadpool extends Personaje {
    public function __construct($vida) {
        parent::__construct('Deadpool', $vida, 10, 100, 25);
    }
}