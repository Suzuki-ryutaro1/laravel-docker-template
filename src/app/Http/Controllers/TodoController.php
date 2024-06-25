<?php

namespace App\Http\Controllers;

use App\Todo;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        // 追加
        $todo = new Todo();
        $todoList = $todo->all();
        dd($todoList);

        return view('todo.index');
    }
}
