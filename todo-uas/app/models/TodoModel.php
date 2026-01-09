<?php

class TodoModel {

    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getTodosByUser($user) {
        return mysqli_query($this->conn,
            "SELECT * FROM todos WHERE user='$user' ORDER BY id DESC"
        );
    }

    public function addTodo($user, $title) {
        return mysqli_query($this->conn,
            "INSERT INTO todos (user, title) VALUES ('$user', '$title')"
        );
    }

    public function updateStatus($id, $status) {
        return mysqli_query($this->conn,
            "UPDATE todos SET status='$status' WHERE id='$id'"
        );
    }

    public function deleteTodo($id) {
        return mysqli_query($this->conn,
            "DELETE FROM todos WHERE id='$id'"
        );
    }
}
