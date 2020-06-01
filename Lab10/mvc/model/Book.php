<?php

class Book {
    public $author;
    public $description;
    
    public $title;
    
    
    public function __construct($title, $author, $description) {
        
        $this->description = $description;

        $this->title = $title;
        $this->author = $author;
    }
}