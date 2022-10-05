<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Resources\CategoryCollection;
use App\Http\Resources\CategoryResource;
class CategoryController extends Controller
{
    public function getAllCategory()
    {
        $category = new CategoryCollection(Category::all());

        $response = [
            'status' => 'Success',
            'data' => $category
        ];
        
        return response($response, 200);
    }

    public function getOneCategory(Category $id)
    {
        $category = new CategoryResource($id);

        $response = [
            'status' => 'Success',
            'data' =>   $category
        ];

        return response($response, 200);
    }

    public function createCategory(Request $request)
    {
        $validate = $request->validate([
            'Category_Name' => 'required|string|max:100',
        ]);

        $category = Category::create($validate);

        $response = [
            'status' => 'Success',
            'data' => $category
        ];
        
        return response($response, 200);
    }

    public function updateCategory(Request $request, $id)
    {
        $category = Category::find($id);
        $category->update($request->all());

        $response = [
            'status' => 'Success',
            'data' => $category
        ];

        return response($response, 200);
    }

    public function deleteCategory($id)
    {
        Category::destroy($id);

        $response = [
            'status' => 'Success',
        ];
        
        return response($response, 200);
    }

    public function searchCategory(Request $request)
    {   
        $category = new CategoryCollection(Category::all());

        $keyword = $request->query('keyword');
        if ($keyword) {
            $category = Category::where('Category_Name', 'like', '%' . $keyword . '%')->get();
        }

        $response = [
            'status' => 'Success',
            'data' => $category
        ];
        return response($response, 200);
    }
}