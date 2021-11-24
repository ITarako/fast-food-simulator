<?php

namespace App\Http\Requests\Admin\RecipeCategory;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

/**
 * Class RecipeCategoryUpdateRequest
 * @package App\Http\Requests\Admin\RecipeCategory
 */
class RecipeCategoryUpdateRequest extends FormRequest
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
            'name' => 'required|string|max:255',
        ];
    }

    /**
     * @param Request $request
     * @return array
     */
    public function formData(Request $request)
    {
        $validated = $this->validated();
        $validated['is_active'] = $request->boolean('is_active');

        return $validated;
    }
}
