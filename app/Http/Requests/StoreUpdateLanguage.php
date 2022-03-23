<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateLanguage extends FormRequest
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
        $id = $this->segment(2);

        $rules = [
            //'description' => 'nulable|min:3|max:160'
            //'description' => ['nulable', 'min:3', 'max:160']
            'description' => [

                'required',
                'min:3',
                'max:160',
                //"unique:languages,description,{$id},id"
               Rule::unique('languages')->ignore($id)
            ],
            'flag' => [
                'nullable',
                'image'
            ]
        ];

        if ($this->method() == 'PUT'){
            $rules['flag'] = ['nullable', 'image'] ;
        }

        return $rules;
    }
}
