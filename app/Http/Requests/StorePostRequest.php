<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest{
    public function authorize(): bool{
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
            'nome' => 'required', 
            
        ];
    }

    public function messages(){
        return[
            'nome.required'=>'Título é obrigatório'
        ];     
    }

    /*public function store(StorePostRequest $request): RedirectResponse{
    $validated = $request->validated();
    $validated = $request->safe()->only(['name']);
    }*/
}
