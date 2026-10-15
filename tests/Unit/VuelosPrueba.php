<?php

test('un vuelo sale de un aeropuerto y llega a otro', function () {
    $sjo = new Aeropuerto('SJO', 'Juan Santamaría');
    $lir = new Aeropuerto('LIR', 'Daniel Oduber');

    $vuelo = new Vuelo(101, $sjo, $lir);

    expect($vuelo->origen())->toBe($sjo)
        ->and($vuelo->destino())->toBe($lir)
        ->and($vuelo->origen()->codigo())->toBe('SJO');
});

test('el avion y el vuelo se conocen entre si', function () {
    $avion = new Avion('TI-001', 'Boeing 737');
    $vuelo = new Vuelo(101, new Aeropuerto('SJO', 'Juan Santamaría'), new Aeropuerto('LIR', 'Daniel Oduber'));

    $avion->agregarVuelo($vuelo);

    expect($avion->vuelos())->toContain($vuelo)
        ->and($vuelo->avion())->toBe($avion);
});

test('una aerolinea maneja aviones', function () {
    $aerolinea = new Aerolinea('A-01', 'Aerolínea CR');
    $avion = new Avion('TI-001', 'Boeing 737');

    $aerolinea->agregarAvion($avion);

    expect($aerolinea->aviones())->toContain($avion);
});