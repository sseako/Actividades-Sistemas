<?php
class Libro {
    private array $capitulos = [];
    public function __construct(private string $titulo) {}
    public function agregarCapitulo(int $numero, string $titulo): Capitulo {
        $c = new Capitulo($numero, $titulo);  
        $this->capitulos[] = $c;
        return $c;
    }
    public function capitulos(): array { return $this->capitulos; }
}
class Capitulo {
    private array $parrafos = [];
    public function __construct(private int $numero, private string $titulo) {}
    public function agregarParrafo(): Parrafo {
        $p = new Parrafo();            
        $this->parrafos[] = $p;
        return $p;
    }
    public function parrafos(): array { return $this->parrafos; }
}
class Parrafo {
    private array $oraciones = [];
    public function agregarOracion(): Oracion {
        $o = new Oracion();         
        $this->oraciones[] = $o;
        return $o;
    }
    public function oraciones(): array { return $this->oraciones; }
}
class Oracion {
    private array $palabras = [];
    public function agregarPalabra(Palabra $p): void { 
        $this->palabras[] = $p;
    }
    public function palabras(): array { return $this->palabras; }
}
class Palabra {
    public function __construct(private string $texto) {}
    public function texto(): string { return $this->texto; }
}