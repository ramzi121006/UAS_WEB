<?php
require_once '../app/models/TodoModel.php';

class TodoController {

    private $model;

    public function __construct($db) {
        $this->model = new TodoModel($db);
    }

    public function index($user) {
        return $this->model->getTodosByUser($user);
    }

    public function store($user, $title) {
        return $this->model->addTodo($user, $title);
    }

    public function updateStatus($id, $status) {
        return $this->model->updateStatus($id, $status);
    }

    public function destroy($id) {
        return $this->model->deleteTodo($id);
    }
}
