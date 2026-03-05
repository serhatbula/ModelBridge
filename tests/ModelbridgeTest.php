<?php
/**
 * Tests for ModelBridge
 */

use PHPUnit\Framework\TestCase;
use Modelbridge\Modelbridge;

class ModelbridgeTest extends TestCase {
    private Modelbridge $instance;

    protected function setUp(): void {
        $this->instance = new Modelbridge(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Modelbridge::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
