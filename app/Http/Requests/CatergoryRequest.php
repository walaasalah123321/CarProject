<?php

namespace App\Http\Requests;

use GuzzleHttp\Psr7\Message;
use Illuminate\Foundation\Http\FormRequest;

class CatergoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "Category_Name"=>"required|max:20|min:3|unique:categories,Category_Name,".$this->id,
        ];
    }
    public function messages(){
        return [
            "Category_Name"=>[
                "required"=>"Please Enter Category_Name",
                "unique"=>"This Category_Name is Added Before ",
                "max"=>"Category_Name Should be Minium than 20 character",
                "min"=>"Category_Name Should be Maximum than 2 character",
            ]
        ];
    }
}
