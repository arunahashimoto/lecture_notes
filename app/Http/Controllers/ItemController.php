<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\User;

class ItemController extends Controller
{
    //
    public function index(Request $request)
    {
        $items = Item::all();
        return view('item.index', ['items' => $items]);
    }

    public function details($id)
    {
        $details = Item::find($id);
        return view('item.details', ['id' => $id], ['details' => $details]);
    }


}
