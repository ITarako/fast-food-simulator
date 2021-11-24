<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\RecipeCategory\RecipeCategoryCreateRequest;
use App\Http\Requests\Admin\RecipeCategory\RecipeCategoryUpdateRequest;
use App\Models\RecipeCategory;

/**
 * Class RecipeCategoryController
 * @package App\Http\Controllers
 */
class RecipeCategoryController extends Controller
{
    public function index()
    {
        $categories = RecipeCategory::orderBy('updated_at', 'desc')->paginate();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(RecipeCategoryCreateRequest $request)
    {
        $data = $request->validated();
        $category = new RecipeCategory();
        $category->create($data);

        return redirect(route('categories.index'));
    }

    public function show(RecipeCategory $category)
    {
        return view('categories.show', ['category' => $category]);
    }

    public function edit(RecipeCategory $category)
    {
        return view('categories.edit', ['category' => $category]);
    }

    public function update(RecipeCategoryUpdateRequest $request, RecipeCategory $category)
    {
        $data = $request->formData($request);
        $category->update($data);

        return redirect(route('categories.index'));
    }

    public function destroy(RecipeCategory $category)
    {
        $category->delete();

        return redirect(route('categories.index'));
    }
}
