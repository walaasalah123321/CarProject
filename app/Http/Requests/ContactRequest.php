<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
        return 
            [
                "FirstName"=>"required|string",
                "LastName"=>"required|string",
                "Message"=>"required|string|min:4",
                "Email"=>"required|regex:/^([a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,})$/"
            ]
        ;
    }
    public function messages()
    {
        return 
        [
            "FirstName"=>[
                "required"=>"Please Enter Your First Name",
                "string"=>"Please Enter Correct Name"
            ],
            "LastName"=>[
                "required"=>"Please Enter Your Last Name",
                "string"=>"Please Enter Correct Name"
            ],
            "Message"=>[
                "required"=>"Please Enter Your  Message",
                "string"=>"Please Enter Correct Message",
                "min"=>"Short Message"
            ],
            "Email"=>[
                "required"=>"Please Enter Your  Email",
                "regex"=>"Please Enter Correct Email",
            ],
        ];
    }
}
