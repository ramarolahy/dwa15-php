<?php

namespace DWA;

class Library
{


    /**
    * Properties
    */
    private $books;


    /**
    *
    */
    public function __construct($jsonPath)
    {
        $bookJson = file_get_contents($jsonPath);

        $this->books = json_decode($bookJson, true);
    }


    /**
    * Getter for $books property
    */
    public function getAll()
    {
        return $this->books;
    }


    /**
    *
    */
    public function getByTitle($title, $caseSensitive = false)
    {

        $filteredBooks = [];

        foreach ($this->books as $thisTitle => $book) {
            if ($caseSensitive) {
                $match = $thisTitle == $title;
            } else {
                $match = strtolower($thisTitle) == strtolower($title);
            }

            if ($match) {
                $filteredBooks[$thisTitle] = $book;
            }
        }

        return $filteredBooks;
    }
} # eoc
