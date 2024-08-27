<?php

class Wolverine extends Personaje {
    public function __construct($vida) {
        parent::__construct('Wolverine', $vida, 10, 120, 20);
    }
}