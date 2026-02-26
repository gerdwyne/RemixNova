<?php
/**
 * Tests for RemixNova
 */

use PHPUnit\Framework\TestCase;
use Remixnova\Remixnova;

class RemixnovaTest extends TestCase {
    private Remixnova $instance;

    protected function setUp(): void {
        $this->instance = new Remixnova(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Remixnova::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
