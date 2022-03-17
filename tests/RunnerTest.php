<?php
declare(strict_types=1);

namespace App\Tests;
use PHPUnit\Framework\TestCase;


class RunnerTest extends TestCase
{
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
}