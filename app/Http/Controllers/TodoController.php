<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::latest()->paginate(2);
        return view('todos.index', compact('todos'));
    }

    public function show(Todo $id)
    {
        return view('todos.show', compact('id'));
    }

    public  function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);
        Todo::create([
            'title' => $request->title,
            'description' => $request->description
        ]);
        return redirect()->route('todos.index');
    }
}
