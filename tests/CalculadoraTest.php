<?php
use PHPUnit\Framework\TestCase;
use App\Calculadora;

class CalculadoraTest extends TestCase
{
    private Calculadora $calc;

    protected function setUp(): void
    {
        $this->calc = new Calculadora();
    }

    public function testSuma(): void
    {
        $this->assertSame(5, $this->calc->suma(2, 3));
    }

    public function testResta(): void
    {
        $this->assertSame(-1, $this->calc->resta(2, 3));
    }

    public function testDivideix(): void
    {
        $this->assertEqualsWithDelta(2.5, $this->calc->divideix(5, 2), 0.001);
    }

    public function testDivideixPerZero(): void
    {
        $this->expectException(\DivisionByZeroError::class);
        $this->calc->divideix(5, 0);
    }
}