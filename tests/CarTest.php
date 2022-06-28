<?php

use PHPUnit\Framework\TestCase;

class CarTest extends TestCase
{
    protected $car;

    protected function setUp(): void
    {
        $this->car = new Car;
    }

    public function testDescriptionIsNotEmpty()
    {
        
        $this->assertNotEmpty($this->car->getDescription());                    
    }
    
    public function testPlateisAnInteger()
    {
        $car = new CarChild;
        $this->assertIsInt($car->getPlate());
    } 
    
    public function testVINIsAString()
    {
        $car = new CarChild;

        $reflector = new ReflectionClass(Car::class);

        $method = $reflector->getMethod('getVIN');
        $method->setAccessible(true);

        $reslt = $method->invoke($car);

        $this->assertIsString($reslt);
    }

    public function testPrefixedTokenStartsWithPrefix()
    {
        $car = new CarChild;

        $reflector = new ReflectionClass(Car::class);

        $method = $reflector->getMethod('getPrefixedToken');
        $method->setAccessible(true);

        $result = $method->invokeArgs($car, ['example']);

        $this->assertStringStartsWith('example', $result);
    }
}
