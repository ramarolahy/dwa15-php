<?php

class Cipher {

    /**
	* Properties
	*/
	private $method; # What cipher method to use (e.g. vowels, shift)
    private $methods = ['vowels', 'shift']; # Array of available methods
    private $alphabet; # Array of letters a-z
    private $vowels; # Array of vowels


    /**
	* Magic method that's invoked whenever an object of this class is instantiated
	*/
	public function __construct($method = 'vowels') {

        # Set alphabet and vowels class properties
        $this->alphabet = str_split('abcdefghijklmnopqrstuvwxyz');
        $this->vowels = str_split('aeiou');

        # Confirm the cipher method exists
        if(!in_array($method, $this->methods)) {
            throw new Exception("Cipher method `".$method."` not found", 1);
        }

        # Set method class property
        $this->method = $method;

	}


    /**
	*
	*/
    public function encode(String $input) {
        return $this->process($input, 'encode');
    }


    /**
	*
	*/
    public function decode(String $input) {
        return $this->process($input, 'decode');
    }


    /**
	*
	*/
    private function process(String $input, $encodeOrDecode) {

        $results = '';

        foreach(str_split($input) as $character) {

            $character = strtolower($character);

            # Only encode letters; skip over spaces, symbols, etc.
            if(ctype_alpha($character)) {
                $method = $this->method.$encodeOrDecode;
                $character = $this->$method(strtolower($character));
            }

            $results .= $character;

        }

        return $results;

    }


    /**
	* Each letter is replaced with its adjacent letter in the alphabet;
    * e.g. a becomes b, x becomes y, z becomes a, etc.
	*/
    private function shiftEncode(String $letter) {

        $position = array_search($letter, $this->alphabet);

        $position += 1;

        if($position == 26) $position = 0;

        return $this->alphabet[$position];

    }


    /**
	*
	*/
    private function shiftDecode(String $letter) {

        $position = array_search($letter, $this->alphabet);

        $position -= 1;

        if($position == -1) $position = 25;

        return $this->alphabet[$position];

    }


    /**
    *
    * vowels are replaced with their numerical equivalent where a=0, i=1, o=2, etc.
	*/
    private function vowelsEncode(String $letter) {

        if(in_array($letter, $this->vowels)) {
            return array_search($letter, $this->vowels);
        }
        else {
            return $letter;
        }

    }


    /**
	*
	*/
    private function vowelsDecode(String $letter) {

        if(!in_array($letter, $this->alphabet)) {
            return $this->vowels[$letter];
        }
        else {
            return $letter;
        }
    }

} # end of class
