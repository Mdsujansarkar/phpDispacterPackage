<?php 

declare(strict_types=1);

namespace App\Task;
// use App\Contracts\TaskContact;
use App\Contracts\TaskContact;

abstract class NullTask implements TaskContact
{
    public function handle(array $payload): array
    {
        return $payload;
    }
}