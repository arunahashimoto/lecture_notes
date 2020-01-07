<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Item;
use App\user;

class NoteController extends Controller
{
    
    public function list() 
    {
        return view('list');
    }

    public function add(Request $request)
    {
        return view('item.add');
    }

    public function insert(Request $request)
    {
        $this->validate($request, Item::$rules);
        $item = new Item;
        $form = $request->all();
        unset($form['_token']);
        $item->fill($form)->save();
        return redirect('notes');
    }
}
