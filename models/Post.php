<?php

class Post {
    private $conn;
    private $table = 'posts';

    //Post Properties
    public $id;
    public $category_id;
    public $title;
    public $body;
    public $author;
    public $created_at;

    //Cunstructor with db
    public function __construct($db)
    {
       $this->conn = $db;
    }

    //Get Posts
    public function read()
    {
       $query = 'SELECT * FROM' . $this->table . '';
       $stmt = $this->conn->prepare($query);

       $stmt->execute();
       return $stmt;

    }
}