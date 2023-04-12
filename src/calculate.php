<?php

namespace Main;

class Calculate {

    public int $number;

    public function __construct($number) {
        $this->number = $number;
    }

    public function getNumber(): int {
        return $this->number;
    }

    
    public function plus(): int {

        return 1000 + $this->number;
    }
    
    // public function minus(int $number): int {
        
    //     return 1000 - $number;
    // }

    // public function getString(string $string): string {
    //     return $string;
    // }
}