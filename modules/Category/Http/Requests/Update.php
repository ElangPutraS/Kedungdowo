<?php

namespace Modules\Category\Http\Requests;

class Update extends Store
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|max:191|unique:categories,title,' . $this->category->id,
            'parent_id' => 'sometimes|not_in:' . $this->category->id,
        ];
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
