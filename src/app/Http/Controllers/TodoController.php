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

        return view('todo.index', ['todoList' => $todoList]);
    }

    public function create()
    {
        // TODO: 第1引数を指定
        return view('todo.create'); // 追記
    }

    public function store(Request $request) // 追記
    {
        $inputs = $request->all(); // 変更
        $todo = new Todo(); 
        $todo->fill($inputs); // 変更
        $todo->save();

        return redirect()->route('todo.index'); // 追記
    }
}
