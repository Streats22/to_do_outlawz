<?php

namespace App\Http\Controllers;

use App\Models\Items;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TodoController extends Controller
{
    public function index()
    {
        $items = Items::all();
        $isDone = Items::Where('is_done', true)->get()->count();
        $compltedItems = Items::Where('is_done', true)->get();
        return view('to-do', compact('items', 'isDone' ));
    }

    public function create(Request $request)
    {
        Log::debug('Request: ', $request->all());

        $data = $request->all();


        $item = Items::create(
            [
                'name' => $data['name'],
                'description' => $data['description'],
                'tags' => $data['tags'] ?? [],
                ''
            ]
        );
        $item->save();
        return redirect()->route('todo.index');
    }
    public function clear()
    {
        Items::truncate();
        return redirect()->route('todo.index');
    }

}
