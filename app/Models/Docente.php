<?php

namespace App\Models;

abstract class Docente
{

    public function __construct(
        private string $cedula,
        private string $nombre,

    ) {
    }
}


