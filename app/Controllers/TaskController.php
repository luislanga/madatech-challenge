<?php

namespace App\Controllers;

class TaskController extends BaseController
{
    public function index()
    {
        return view('tasks/index');
    }

    public function create()
    {
        return view('tasks/create');
    }

    public function createNewTask()
    {
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';
    }

    public function edit()
    {
        return view('tasks/edit');
    }
}
