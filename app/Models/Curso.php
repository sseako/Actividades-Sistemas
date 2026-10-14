<?php

namespace App\Models;

abstract class Curso
{

    public function __construct(
        private string $codigo,
        private string $nombre,

    ) {

    }
}


