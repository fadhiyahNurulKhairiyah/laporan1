<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
<<<<<<< HEAD
    public function index() {
        return response()->json(['status' => 'success', 'data' => Item::all()]);
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name'        => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'stock'       => 'required|integer',
            'price'       => 'required|numeric',
        ]);
        $item = Item::create($validated);
        return response()->json(['status' => 'success', 'data' => $item], 201);
    }

    public function show(Item $item) {
        return response()->json(['status' => 'success', 'data' => $item]);
    }

    public function update(Request $request, Item $item) {
        $item->update($request->all());
        return response()->json(['status' => 'success', 'data' => $item]);
    }

    public function destroy(Item $item) {
        $item->delete();
        return response()->json(['status' => 'success', 'data' => null], 200);
=======
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
>>>>>>> origin/main
    }
}