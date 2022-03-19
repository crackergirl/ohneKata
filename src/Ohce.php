<?php

namespace Deg540\PHPTestingBoilerplate;

class Ohce
{
    public function execute(string $word): string
    {
        $reverseWord = strrev($word);

        if($reverseWord === $word){
            return $word.",Bonita palabra";
        }

        if($word === "Stop!"){
            return "Adiós";
        }
        return $reverseWord ;
    }


}