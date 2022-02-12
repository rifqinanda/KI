<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\TodoResource;
use App\Repositories\TodoRepository;
use App\Models\Todo;
use Illuminate\Http\Request;
use Validator;
use Response;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Todo::all();
        return response()->json([TodoResource::collection($data), 'Todos fetched.']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Todo $todo)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:255',
        ]);
        
        if($validator->fails()){
            return response()->json($validator->errors());       
        }

        $todo = TodoRepository::createTodo($request);

        return response()->json([
            'status' => 'ok',
            'message' => 'Todo was created!'
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $todos = Todo::find($id);
        if (is_null($todos)) {
            return response()->json('Data not found', 404); 
        }
        return response()->json([new TodoResource($todos)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $todos = TodoRepository::editTodo($request, $id);
        
        return response()->json([
            'status' => 'ok',
            'message' => 'Todo was updated!'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Todo $todo)
    {
        $todo->delete();

        return response()->json([
            'status' => 'ok',
            'message' => 'Todo was deleted!'
        ], 200);
    }
}
