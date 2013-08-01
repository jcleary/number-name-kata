<?php

class NumberNames {

    private $numberdigits = array(
        0 => 'zero',
        1 => 'one',
        2 => 'two',
        3 => 'three',
        4 => 'four',
        5 => 'five',
        6 => 'six',
        7 => 'seven',
        8 => 'eight',
        9 => 'nine',
    );

    private $numberMultiplesOfTen = array(
        10 => 'ten',
        20 => 'twenty',
        30 => 'thirty',
        40 => 'forty',
        50 => 'fifty',
        60 => 'sixty',
        70 => 'seventy',
        80 => 'eighty',
        90 => 'ninety',
    );

    private $problemnumbers = array(
        10  =>  'ten',
        11  =>  'eleven',
        12  =>  'twelve',
        13  =>  'thirteen',
        100  =>  'onehundred'
    );

    function translate($number) {
        switch(TRUE) {
            case $number < 10:
                return ucwords($this->numberdigits[$number]);
                break;
            case 0 == ($number % 10) && $number < 100:
                return ucwords($this->numberMultiplesOfTen[$number]);
                break;
            case $number > 9 && $number < 14:
                return ucwords($this->problemnumbers[$number]);
                break;
            case $number >= 14 && $number <= 19:
                return ucwords($this->numberdigits[$number%10].'teen');
                break;
            case $number > 20:
                $remainder = $number%10;
                $factoroften = $number - $remainder;
                return ucwords($this->numberMultiplesOfTen[$factoroften] . $this->numberdigits[$remainder]);
                break;
        }


    }
}