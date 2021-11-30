<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TodoController extends Controller
{
    public function create()
    {
        return Inertia::render('todos/Create');
    }

    public function store(Request $request)
    {
        $todo = Todo::create($request->all());

        return Redirect::route('home');
    }

    public function update(Request $request, $id)
    {
        $todo = Todo::findOrFail($id);
        $todo->update($request->all());

        return Redirect::route('home');
    }

    public function destroy($id)
    {
        $todo = Todo::findOrFail($id);
        $todo->delete();

        return Redirect::route('home');
    }
}
