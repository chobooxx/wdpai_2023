<?php

class Book {
    public $name;
    public $author;
    public $isbn;

    public function __construct($name, $author) {
        $this->name = $name;
        $this->author = $author;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function setAuthor($author) {
        $this->author = $author;
    }
}