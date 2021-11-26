<?php

namespace App\Http\Requests\Admin\Unit;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

/**
 * Class UnitRequest
 * @package App\Http\Requests\Admin\Unit
 */
class UnitRequest extends FormRequest
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
        $unit = $this->route('unit');
        return [
            'name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('units')->ignore($unit),
            ],
        ];
    }
}
