<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostFormRequest extends FormRequest
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
                'title'=>'required|max:30',
                'body'=>'required|max:20'
        ];
    }

    public function messages(){
        return [
            'title.required'=>'Put the title merrrrnnnn',
            'body.required'=>'put the body merrrrrn'
        ];
    }

}
