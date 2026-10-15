<?php
class Aerolinea { 
    private array $aviones = [];
    public function __construct(private string $idAerolinea, private string $nombre) {}
    public function agregarAvion(Avion $a): void { $this->aviones[] = $a; }
    public function aviones(): array { return $this->aviones; }
}
class Avion {
    private array $vuelos = [];
    public function __construct(private string $codigoAvion, private string $modelo) {}
    public function agregarVuelo(Vuelo $v): void {
        $this->vuelos[] = $v;
        $v->asignarAvion($this);      
    }
    public function vuelos(): array { return $this->vuelos; }
}
class Vuelo {
    private ?Avion $avion = null;
    public function __construct(
        private int $numeroVuelo,
        private Aeropuerto $origen,
        private Aeropuerto $destino
    ) {}
    public function asignarAvion(Avion $a): void { $this->avion = $a; }
    public function avion(): ?Avion { return $this->avion; }
    public function origen(): Aeropuerto { return $this->origen; }
    public function destino(): Aeropuerto { return $this->destino; }
}
class Aeropuerto {
    public function __construct(private string $codigoAeropuerto, private string $nombre) {}
    public function codigo(): string { return $this->codigoAeropuerto; }
}