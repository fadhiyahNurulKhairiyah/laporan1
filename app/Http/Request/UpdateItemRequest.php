protected function prepareForValidation()
{
    $this->merge([
        'name' => trim(strip_tags($this->name)),
    ]);
}

public function rules(): array
{
    return [
        'name' => 'required|string|max:255',
        'price' => 'required|numeric',
        'stock' => 'required|integer',
        'category_id' => 'required|exists:categories,id',
    ];
}