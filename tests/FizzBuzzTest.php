<?php

require __DIR__.'/../src/FizzBuzz.php';

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public function testANumberDivisibleByThreeReturnFizz()
    {
        $fizzBuzz = new FizzBuzz();
        
        $this->assertEquals('Fizz', $fizzBuzz->isFizz(3 * rand()));
    }

    public function testANumberDivisibleByFiveReturnBuzz()
    {
        $fizzBuzz = new FizzBuzz();

        $this->assertEquals('Buzz', $fizzBuzz->isBuzz(5 * rand()));
    }

    public function testANumberDivisibleByFiveAndThreeReturnFizzBuzz()
    {
        $fizzBuzz = new FizzBuzz();
        $number = 15 * rand();

        $this->assertEquals('FizzBuzz', $fizzBuzz->isFizz($number).$fizzBuzz->isBuzz($number));
    }

    public function testNumberNotDivisibleByThreeAndFive()
    {
        $fizzBuzz = new FizzBuzz();
        $number = 8;

        $this->assertFalse($fizzBuzz->isFizz($number));
        $this->assertFalse($fizzBuzz->isBuzz($number));
    }

    public function testArrayMatching()
    {
        $fizzBuzz = new FizzBuzz();

        $this->assertEquals([
            1 => 1,
            2 => 2,
            3 => 'Fizz',
            4 => 4,
            5 => 'Buzz',
            6 => 'Fizz',
            7 => 7,
            8 => 8,
            9 => 'Fizz',
            10 => 'Buzz',
            11 => 11,
            12 => 'Fizz',
            13 => 13,
            14 => 14,
            15 => 'FizzBuzz',
        ], $fizzBuzz->calc(15));
    }
}
