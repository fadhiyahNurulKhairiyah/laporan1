<?php

namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'name' => trim(strip_tags($this->name)),
        ]);
    }

    public function rules(): array
    {
        return [
            'name' => 'sometimes|string|max:255',
        ];
    }
}