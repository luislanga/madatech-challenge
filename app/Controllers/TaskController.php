<?php

namespace App\Controllers;

use App\Models\TaskModel;

class TaskController extends BaseController
{
    // public function index()
    // {
    //     return view('tasks/index', ['title' => 'Lista de Tarefas']);
    // }

    public function index()
    {
        $model = new TaskModel();
        $tasks = $model->findAll();
        return view('tasks/index', ['title' => 'Lista de Tarefas', 'tasks' => $tasks]);
    }

    public function create()
    {
        if($this->request->getMethod() === 'post') {
            $model = new TaskModel();
            $model->save($_POST);
        }
        return view('tasks/create', ['title' => 'Lista de Tarefas']);
    }

    public function delete($id)
    {
        $model = new TaskModel();
        $model->delete($id);
        return redirect()->to('/');
    }

    public function createNewTask()
    {
        $model = new TaskModel();
        $model->save($_POST);
        return redirect()->to('/');
    }

    public function edit()
    {
        return view('tasks/edit');
    }
}
