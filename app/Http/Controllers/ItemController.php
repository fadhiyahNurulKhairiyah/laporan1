<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        return Item::with('category')->get();
    }

    public function store(Request $request)
    {
        return Item::create($request->all());
    }

    public function show(string $id)
    {
        return Item::findOrFail($id);
    }

    public function update(Request $request, string $id)
    {
        $item = Item::findOrFail($id);
        $item->update($request->all());

        return $item;
    }

    public function destroy(string $id)
    {
        return Item::destroy($id);
    }
}