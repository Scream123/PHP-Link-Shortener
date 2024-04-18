<?php

namespace App\Http\Requests;

use App\Rules\ValidateUrl;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Symfony\Component\HttpFoundation\Response;

class GenerateShortLinkRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'url' => ['required', new ValidateUrl],
        ];
    }

    public function failedValidation(Validator $validator): Response
    {
        throw new HttpResponseException(response()->json(
            [
                'success' => false,
                'message' => 'Validation errors',
                'errors' => $validator->errors(),
            ],
            Response::HTTP_UNPROCESSABLE_ENTITY
        ));
    }
}
