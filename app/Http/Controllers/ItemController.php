<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Api\BaseController;
use App\Http\Request\StoreItemRequest;
use App\Http\Request\UpdateItemRequest;
use App\Models\Item;

class ItemController extends BaseController
{
    public function index()
    {
        $items = Item::with('category')->get();

        return $this->success(
            $items,
            'Data item berhasil diambil'
        );
    }

    public function store(StoreItemRequest $request)
    {
        $item = Item::create($request->validated());

        return $this->success(
            $item,
            'Item berhasil dibuat',
            201
        );
    }

    public function show($id)
    {
        $item = Item::with('category')->find($id);

        if (!$item) {
            return $this->error(
                'Item tidak ditemukan',
                404
            );
        }

        return $this->success(
            $item,
            'Detail item berhasil diambil'
        );
    }

    public function update(UpdateItemRequest $request, $id)
    {
        $item = Item::find($id);

        if (!$item) {
            return $this->error(
                'Item tidak ditemukan',
                404
            );
        }

        $item->update($request->validated());

        return $this->success(
            $item,
            'Item berhasil diperbarui'
        );
    }

    public function destroy($id)
    {
        $item = Item::find($id);

        if (!$item) {
            return $this->error(
                'Item tidak ditemukan',
                404
            );
        }

        $item->delete();

        return $this->success(
            null,
            'Item berhasil dihapus'
        );
    }
}