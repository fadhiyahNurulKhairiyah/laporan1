<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
=======
use App\Models\Category;
>>>>>>> origin/main
use Illuminate\Http\Request;

class CategoryController extends Controller
{
<<<<<<< HEAD
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
=======
    public function index()
    {
        return Category::all();
    }

    public function store(Request $request)
    {
        return Category::create($request->all());
    }

    public function show(string $id)
    {
        return Category::findOrFail($id);
    }

    public function update(Request $request, string $id)
    {
        $category = Category::findOrFail($id);
        $category->update($request->all());

        return $category;
    }

    public function destroy(string $id)
    {
        Category::destroy($id);

        return response()->json([
            'message' => 'Deleted Successfully'
        ]);
    }
}
>>>>>>> origin/main
