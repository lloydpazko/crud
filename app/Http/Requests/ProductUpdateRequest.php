<?php

namespace App\Http\Requests;

use App\Models\ProdutCreate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['string', 'max:255'],
            'price' => ['string', 'max:255'],
            'quantity' => ['string', 'max:255'],
            'description' => ['string', 'max:255'],
        ];
    }
}
