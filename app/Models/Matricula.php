<?php

namespace App\Models;

use DateTime;

abstract class Matricula
{

    public function __construct(
        public Estudiante $estudiante,
        public Grupo $grupo,
        public DateTime $fecha,
        public float $notaFinal,

    ) {
    }
}


