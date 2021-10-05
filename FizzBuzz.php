<?php

namespace FizzBuzz;

class FizzBuzz
{
    public function fizzBuzz(int $number)
    {
        $result = '';
        if ($number % 3 === 0) {
            $result .= 'fizz';
        }
        if ($number % 5 === 0) {
            $result .= 'buzz';
        }
        return $result === '' ? $number : $result;
    }
}
