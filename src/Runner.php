<?php
declare(strict_types=1);

namespace App;
use App\Contracts\TaskContact;
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
    public function add(TaskContact $task): self
    {
        $this ->tasks[] = $task;
        return $this;
    }
    public function run(array $payload):array
    {
       
        foreach ($this->task() as $task) {

            if(method_exists($task, 'before')) {
                $payload = $task->before(
                    payload:$payload,
                );
            }

            $payload = $task->handle(
                payload: $payload,
            );

            if(method_exists($task, 'after')) {
                $payload = $task->after(
                    payload:$payload,
                );
            }
        }
        return $payload;
    }
}