<?php
/**
 * Tests for ContractDeployer
 */

use PHPUnit\Framework\TestCase;
use Contractdeployer\Contractdeployer;

class ContractdeployerTest extends TestCase {
    private Contractdeployer $instance;

    protected function setUp(): void {
        $this->instance = new Contractdeployer(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Contractdeployer::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
