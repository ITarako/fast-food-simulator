<?php

namespace App\Http\Requests\Admin\RecipeCategory;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class RecipeCategoryCreateRequest
 * @package App\Http\Requests\Admin\RecipeCategory
 */
class RecipeCategoryCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255|unique:recipe_categories,name',
        ];
    }
}
