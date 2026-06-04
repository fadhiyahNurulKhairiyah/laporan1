<?php

namespace App\Services;

use App\Models\Item;

class ItemService
{
    public function all()
    {
        return Item::with('category')->get();
    }

    public function find($id)
    {
        return Item::with('category')->findOrFail($id);
    }

    public function create(array $data)
    {
        return Item::create($data);
    }

    public function update($id, array $data)
    {
        $item = Item::findOrFail($id);
        $item->update($data);
        return $item;
    }

    public function delete($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();
    }
}