<?php

declare(strict_types=1);

namespace App;

interface TaskContact{
    public function handle(array $payload):array;
}