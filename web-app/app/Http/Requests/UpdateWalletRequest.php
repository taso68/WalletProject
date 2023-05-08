<?php
declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class UpdateWalletRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'id' => 'required|string',
            'name' => 'string|max:255',
            'amount' => 'numeric',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            response()->json([
                'message' => "The given data is invalid",
                'errors' => $validator->errors()
            ],404)
        );
    }


}
