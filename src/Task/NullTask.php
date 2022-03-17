<?php 

declare(strict_types=1);

namespace App;
use App\TaskContact;

abstract class NullTask implements TaskContact
{
    public function handle(array $payload): array
    {
        return $payload;
    }
}