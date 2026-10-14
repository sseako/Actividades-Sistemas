<?php

namespace App\Models;

abstract class Grupo
{

    public function __construct(
        private string $numero,
        private int $cupo,
        public Curso $curso,
        public Docente $docente,

    )  {}
}


