<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategorieRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'designation'=>['required'],
            'img'=>['image','max:2000'],
            'prix'=>['required'],
            'region'=>['required'],
            'tagsA'=>['required'],
            'tagsG'=>['required'],
            'produit_id'=>['required','exists:produits,id']

         ];
     
    }
}
