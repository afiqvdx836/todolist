<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    public function View(){
        $todolists = Todo::latest()->get();
        return view('todo.index', compact('todolists'));
    }

    public function create(){
        return view('todo.add');
    }

    public function Store(Request $request){
        Todo::insert([
            'title' => strtoupper($request->coupon_name),
            'description' => $request->description,
            'deadline' => $request->deadline,
            'user_id' => Auth::id(),
            'created_at'=> Carbon::now(),
           ]);
    
           $notification = array(
            'message' => 'Data Added Successfully',
            'alert-type' => 'success'
        );
    
        return redirect()->back()->with($notification);
    }
}
