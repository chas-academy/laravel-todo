<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = Todo::all()->where('user_id', '=', Auth::user()->id);
        return view('todos.index', compact('todos', $todos));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required'
        ]);
        
        $data['user_id'] = Auth::user()->id;
        
        $todo = Todo::create($data);

        return redirect('/')->with('success', 'Todo was successfully added');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Todo $todo)
    {
        $todo_data = $request->all();
        
        if (!isset($todo_data['title'])) {
            $todo->completed = $todo_data['completed'];
        } else {
            $todo->title = $todo_data['title'];
        }

        $todo->save();

        return redirect('/')->with('success', 'Todo successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Todo $todo)
    {
        if ($todo->delete()) {
            return redirect('/')->with('success', 'Todo successfully deleted');
        }
    }
}
