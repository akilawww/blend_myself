<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MaterrialsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:100',
            'quantity' => 'required|string|max:100',
            'degree' => 'required|string|max:100',
            'recipe_id' => 'required',
        ];
    }
}
