<?php

namespace App\Http\Controllers;

use App\Models\RecipeCategory;
use Illuminate\Http\Request;

class RecipeCategoryController extends Controller
{
    public function index()
    {
        $categories = RecipeCategory::paginate();
        return view('categories.index2', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RecipeCategory  $recipeCategory
     * @return \Illuminate\Http\Response
     */
    public function show(RecipeCategory $recipeCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RecipeCategory  $recipeCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(RecipeCategory $recipeCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RecipeCategory  $recipeCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RecipeCategory $recipeCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RecipeCategory  $recipeCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(RecipeCategory $recipeCategory)
    {
        //
    }
}
