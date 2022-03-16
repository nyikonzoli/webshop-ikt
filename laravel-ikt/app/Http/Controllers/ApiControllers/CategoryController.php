<?php

namespace App\Http\Controllers\ApiControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Resources\CategoryResource;
use App\Http\Requests\CategoryStoreRequest;

class CategoryController extends Controller
{
    public function indexAll()
    {
        $categories = Category::all();
        $retval = [];
        foreach ($categories as $category) {
            $retval[] = new CategoryResource($category);
        }
        return $retval;
    }

    public function indexParents()
    {
        $categories = Category::all();
        $retval = [];
        foreach ($categories as $category) {
            if (is_null($category->parentId)) {
                $retval[] = new CategoryResource($category);
            }
        }
        return $retval;
    }

    public function indexChildren()
    {
        $categories = Category::all();
        $retval = [];
        foreach ($categories as $category) {
            if (!is_null($category->parentId)) {
                $retval[] = new CategoryResource($category);
            }
        }
        return $retval;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CategoryStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryStoreRequest $request)
    {
        $validated = $request->validated();
        $category = Category::create($validated);
        return new CategoryResource($category);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::findOrFail($id);
        return new CategoryResource($category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  CategoryStoreRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryStoreRequest $request, $id)
    {

        $validated = $request->validated();
        
        $category = Category::findOrFail($id);
        $category->update($validated);
        return new CategoryResource($category);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        Category::destroy($category->getKey());
    }
}
