<?php

namespace Modules\Page\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Modules\Category\Models\Category;

class Store extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $category = strtolower(Category::find($this->category_id)->title);

        $rules = [
            'category_id' => 'required',
            'title' => 'required|max:191|unique:pages,title',
            'description' => 'sometimes|max:8000',
            'short_desc' => 'sometimes|max:400',
            'published' => 'sometimes',
        ];

        if (strpos($category, 'galeri') !== false &&
            (! $this->uploads)) {
            $rules['foto'] = 'required';
        }

        if (strpos($category, 'slideshow') !== false &&
            (! $this->uploads)) {
            $rules['slideshow'] = 'required';
        }

        return $rules;
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
