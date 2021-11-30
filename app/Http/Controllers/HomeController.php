<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Inertia\Inertia;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return Inertia::render('Home', [
            'todos' => $todos,
        ]);
    }
}
