<?php

namespace App\Controllers;

use App\Models\TaskModel;

class TaskController extends BaseController
{

    public function index()
    {
        $model = new TaskModel();
        $tasks = $model->findAll();
        return view('tasks/index', ['title' => 'Lista de Tarefas', 'tasks' => $tasks]);
    }

    public function create()
    {
        return view('tasks/create', ['title' => 'Lista de Tarefas']);
    }

    public function createNewTask()
    {
        $model = new TaskModel();
        $model->save($_POST);
        return redirect()->to('/');
    }

    public function edit($id)
    {
        $model = new TaskModel();
        $task = $model->find($id);
        return view('tasks/edit',  ['task' => $task]);
    }

    public function editTask($id)
    {
        $model = new TaskModel();
        $task = $model->find($id);

        if (!$task) {
            return redirect()->to('/')->with('error', 'Task not found');
        }

        $model->update($id, $_POST);
        return redirect()->to('/')->with('success', 'Task updated successfully');
    }

    public function delete($id)
    {
        $model = new TaskModel();
        $model->delete($id);
        return redirect()->to('/');
    }
}
