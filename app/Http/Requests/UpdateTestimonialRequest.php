<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTestimonialRequest extends FormRequest
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
            "Name"=>"required|min:3|string",
            "Position"=>"required|string",
            "image"=>"sometimes|mimes:png,jpg,jpeg|max:2048",
            "Content"=>"required|max:2000"
         ];
    }
    public function messages()
    {
       return 
        [
            "Name"=>[
                "required"=>"Please Enter Testimonial Name ",
                "min"=>"Testimonial Name Should Be Maximum than 3 characters ",
                "string"=>"Testimonial Name Should Be String Letter",
            ],
            "Position"=>[
                "required"=>"Please Enter Testimonial Position ",
                "string"=>"Testimonial Position Should Be String Letter",
            ],
            "image"=>[
                "mimes"=>" Testimonial Image Should be From Type of JPG ,PNG,JPEG ",
                "max"=>"Testimonial Image Should Be Minimum than 2048 GB ",
            ],
            "Content"=>[
                "required"=>"Please Enter Testimonial Opinion ",
                "max"=>"Testimonial Opinion Should Be Minimum than 2000 characters ",
            ],

        ];
    }
}
