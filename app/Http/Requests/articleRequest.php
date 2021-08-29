<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class articleRequest extends FormRequest
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
            'libele'=>'required|min:3',
            'art_description'=>'required|min:10',
            'prix'=>'required',
        
            'categorie'=>'required|min:1|max:4'
        ];
    }
}
