<?php
/**
 * Tests for OracleShift
 */

use PHPUnit\Framework\TestCase;
use Oracleshift\Oracleshift;

class OracleshiftTest extends TestCase {
    private Oracleshift $instance;

    protected function setUp(): void {
        $this->instance = new Oracleshift(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Oracleshift::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
