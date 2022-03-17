<?php
declare(strict_types=1);
namespace App;

class Runner {
    private function __construct(
        protected array $task,
        protected array $payload,
    ){}
    public static function prepare(array $tasks=[], array $payload=[]):Runner
    {
        return new Runner(
            task: $tasks,
            payload:$payload
        );
    }
    public function task()
    {
        $this->task;
    }
    public function add()
    {
        
    }
}