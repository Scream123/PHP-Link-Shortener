<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Http;

class ValidateUrl implements Rule
{
    public function passes($attribute, $value): bool
    {
        try {
            $response = Http::get($value);
        } catch (\Exception $e) {
            return false;
        }
        return $response->ok();
    }

    public function message(): string
    {
        return 'The :attribute must be a valid URL that returns a successful response.';
    }
}
