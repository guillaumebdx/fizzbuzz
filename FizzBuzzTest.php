<?php
/**
 * Created by PhpStorm.
 * User: aurelwcs
 * Date: 18/10/18
 * Time: 09:35
 */

namespace FizzBuzz;

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{

    public function testFizzBuzz()
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals('fizz', $fizzBuzz->fizzBuzz(3));
        $this->assertEquals('buzz', $fizzBuzz->fizzBuzz(5));
        $this->assertEquals('fizzbuzz', $fizzBuzz->fizzBuzz(15));
        $this->assertEquals(11, $fizzBuzz->fizzBuzz(11));
        $this->assertEquals(13, $fizzBuzz->fizzBuzz(13));
    }
}
