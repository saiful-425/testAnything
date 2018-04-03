<?php namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class ListsController extends Controller
{
    public function index()
    {
        $items = Todo::all();
      return view('list', compact('items'));
    }

    public function create(Request $request, Todo $todo)
    {
        $todo->item = $request->datas;
        $todo->save();
        return "Done";
    }
}
