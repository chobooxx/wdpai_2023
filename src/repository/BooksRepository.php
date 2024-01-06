<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/Book.php';

class DogsRepository extends Repository
{    
    public function getBooks(): array
    {
        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM books;
        ');
        $stmt->execute();
        $dogs = $stmt->fetchAll(PDO::FETCH_ASSOC);

         foreach ($books as $book) {
             $result[] = new Book(
                 $book['name'],
                 $book['author'],
             );
         }

        return $result;
    }
}