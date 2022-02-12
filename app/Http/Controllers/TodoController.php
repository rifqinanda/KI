<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Repositories\TodoRepository;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        $data = [
            'todos' => $todos
        ];
        return view('todos.index', $data);
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        TodoRepository::createTodo($request);

        return redirect('/');
    }

    public function edit(Todo $todo)
    {
        return view('todos.edit', compact('todo'));
    }

    public function update(Request $request, $id)
    {
        TodoRepository::editTodo($request, $id);

        return redirect('/');
    }

    public function delete(Todo $todo)
    {
        $todo->delete();

        return redirect('/');
    }
}