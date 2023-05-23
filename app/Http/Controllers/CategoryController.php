<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function store(CategoryRequest $request){
        Category::create([
            'title' => $request->title,
        ]);
        return redirect()->back();
    }
    public function destroy($id){
        $category = Category::find($id);
        if($category){
            $category->delete();
            return redirect()->back();
        } else {
            return redirect()->back()->withErrors([
                'category' => 'Такой категории нет'
            ]);
        }
    }
}
