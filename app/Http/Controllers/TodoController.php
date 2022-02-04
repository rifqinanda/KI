<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use DB;

class TodoController extends Controller
{
    public function index()
    {
        // $todos = Todo::all();

        $todos = DB::table('todos')->get();
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
        DB::table('todos')->insert([
            'name' => $request->name
        ]);

        return redirect('/');
    }

    public function edit($id)
    {
        $todo = DB::table('todos')->where('id', $id)->first();
        return view('todos.edit', compact('todo'));
    }

    public function update(Request $request, $id)
    {
        DB::table('todos')->where('id', $id)->update([
            'name' => $request->name,
            'is_done' => $request->is_done
        ]);

        return redirect('/');
    }

    public function delete($id)
    {
        DB::table('todos')->where('id', $id)->delete();

        return redirect('/');
    }
}