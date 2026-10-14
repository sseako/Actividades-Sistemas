<?php

test('dos estudiantes se matriculan en un grupo', function () {
    $grupo = new Grupo(
        '01', 
        10,
        new Curso('IF6100 - Análisis y Diseño de Sistemas'),
        new Docente('1-1234-5678', ' Iván Alonso Chavarría Cubero'),
    );

    $ana = new Estudiante('C10234', 'Mia Wilson');
    $luis = new Estudiante('C10567', 'Kary Espinoza');

    $matAna = new Matricula($ana, $grupo, new DateTimeImmutable('2026-10-14'), 95.0);
    $matLuis = new Matricula($luis, $grupo, new DateTimeImmutable('2026-10-14'), 88.5);

    expect($matAna->grupo)->toBe($grupo)
        ->and($matLuis->grupo)->toBe($grupo)
        ->and($matAna->estudiante)->toBe($ana)
        ->and($matLuis->estudiante)->toBe($luis);
});