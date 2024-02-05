<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCarRequest extends FormRequest
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
           "Title"=>"required|min:3|string|unique:cars,Title,".$this->id,
           "Image"=>"sometimes|mimes:png,jpg,jpeg|max:2048",
           "Content"=>"required|max:2000",
           "Passengers"=>"required|integer",
           "Doors"=>"required|integer",
           "Luggages"=>"required|integer",
           "Price"=>"required",
           "Cat_id"=>"required",
        ];
    }
    public function messages()
    {
       return 
        [
            "Title"=>[
                "required"=>"Please Enter   Car Name ",
                "min"=>" Car Name Should Be Maximum than 3 characters ",
                "string"=>" Car Name Should Be String Letter",
                "unique"=>"This Car is Added Before ",


            ],
            "Price"=>[
                "required"=>"Please Enter Car Price ",
            ],
            "image"=>[
                "mimes"=>"  Car Image Should be From Type of JPG ,PNG,JPEG ",
                "max"=>" Car Image Should Be Minimum than 2048 GB ",
            ],
            "Content"=>[
                "required"=>"Please Enter Car Description",
                "max"=>"Car Description Should Be Minimum than 2000 characters ",
            ],
            "Doors"=>[
                "required"=>"Please Enter Number of Doors in Car",
                "integer"=>"Number of Doors Should Be Integer Number ",
            ],
            "Passengers"=>[
                "required"=>"Please Enter  Number of Passengers in Car",
                "integer"=>"Number of Passengers Should Be Integer Number ",
            ],
            "Luggages"=>[
                "required"=>"Please Enter Number of Luggage in Car",
                "integer"=>"Number of Luggages Should Be Integer Number",
            ],
            "Cat_id"=>[
                "required"=>"Please Choose Category Name",
            ],

        ];
    }
}
