<?php
declare(strict_types=1);

namespace App\Contracts;

interface DispatcherContact {

    public static function make(array $listenare = []): static;
    public function add(string $name, array $listenare): void;
}