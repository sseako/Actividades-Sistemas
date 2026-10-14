<?php

namespace App\Models;

abstract class Estudiante
{

    public function __construct(
        private string $carnet,
        private string $nombre,

    ) {
    }
}


