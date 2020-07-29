<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateProductRequest extends FormRequest
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

        return [
            'name' => "required|min:3|max:255|unique:products,name,{$id},id",
            'description' => 'required|min:5|max:10000',
            'price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'image' => 'nullable|image',
        ];
    }

    public function messages()
    {
        return [
            'name.unique' => 'O campo Nome já existe.',
            'name.required' => 'O campo Nome é obrigatório.',
            'name.min' => 'O campo Nome precisa ter pelo menos 3 caracteres.',
            'name.max' => 'O campo Nome precisa ter no máximo 255 caracteres.',

            'price.required' => 'O campo Preço é obrigatório.',

            'description.required' => 'O campo Descrição é obrigatório.',
            'description.min' => 'O campo Descrição precisa ter pelo menos 5 caracteres.',
            'description.max' => 'O campo Descrição precisa ter no máximo 10000 caracteres.',

            'image.image' => 'O arquivo deve ser uma imagem.',
        ];

    }
}
