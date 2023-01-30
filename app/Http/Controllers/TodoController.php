<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function View(){
        $todolists = Todo::latest()->get();
        return view('todo.index', compact('todolists'));
    }
}
