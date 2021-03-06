<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryAddRequest extends FormRequest
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
            'name'=>'required|max:10|unique:categories',
            'file'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'Trường tên không được để trống',
            'name.unique'=>"Tên $this->name đã tồn tại",
            'name.max'=>"Tên không được dài quá 10 kí tự",
            'file.required'=>'Trường ảnh không được để rỗng'
        ]; // TODO: Change the autogenerated stub
    }
}
