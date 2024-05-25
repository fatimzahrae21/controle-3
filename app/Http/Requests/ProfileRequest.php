<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            //
            'name' => 'required|min:3',
            'email'=> 'required|email',
            'password'=> 'required|min:9|max:50|confirmed',
            'bio' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
       
        ];
    }
}
