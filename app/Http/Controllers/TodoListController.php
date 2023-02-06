<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ListItem;


class TodoListController extends Controller
{

    public function oznaci($id){
        $oznaka =  ListItem::find($id);
        $oznaka->is_complete=1;
        $oznaka->save();
        $items = $oznaka->get();
        return view('ispisi', compact('items'));
    }
    //
    public function saveItem(Request $request) {
        $newListItem = new ListItem;
        $newListItem->name = request('ime');
        $newListItem->is_complete = 0;
        $newListItem->save();
        $item = ListItem::find(2); // Retrieve a record by id
        $item->name = 'New item name';
        $item->save();
        $items = $newListItem->get();
        return view('ispisi', compact('items'));
        //return view('ispisi')->with('name', $item->name)->with('age','20');
//<p>My name is {{ $name }}, and I am {{ $age }} years old.</p>
    }
}
