<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
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
            'title' => 'required|max:255',
            'full_text'  => 'required',
            'category' => 'required',
            'image' => 'image|mimes:jpg,jpeg,png',
            'tags.*' => 'exists:tags,id',
        ]; 
    }
}
