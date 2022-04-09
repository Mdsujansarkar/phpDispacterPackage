<?php
declare(strict_types=1);

namespace App\Tests;

use App\Task\NullTask;
use App\Runner;
use PHPUnit\Framework\TestCase;


class RunnerTest extends TestCase
{
    protected function runner( array $tasks = []): Runner
    {
        return Runner::prepare($tasks);
    }
    /**
     * @test
     */
    public function it_will_be_runner()
    {
        $this->assertInstanceOf(
            expected:Runner::class,
            actual:$this->runner(),
        );
    }

    public function it_will_run_with_empty_runner() 
    {
        $runner = $this->runner();
        $this->assertIsArray(
            actual: $runner->tasks(),
        );
        $this->assertEmpty(
            actual: $runner->tasks(),
        );
    }
    /**
     * @test
     */
    public function it_can_add_new_task() {
        $runner =$this->runner();
        $task = $this->getMockForAbstractClass(NullTask::class);
    }
}