<?php

include_once("model/Model.php");

class Controller {
    public $model;
    public function __construct() {
        
        
        
        $this->model = new Model();
    }

    public function invoke() {
        if (!isset($_GET['book'])) {
            include 'view/booklist.php';
            $books = $this->model->getBookList();
            
        } else {
            include 'view/viewbook.php';


            $book = $this->model->getBook($_GET['book']);
            
        }
    }
}