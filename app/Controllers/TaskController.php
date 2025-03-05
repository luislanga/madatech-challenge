<?php

namespace App\Controllers;

class Task extends BaseController
{
    public function index()
    {
        return view('task');
    }

    public function product($type)
    {
        echo '<h2>this is product type ' . $type . '</h2>';
    }
}
