<?php

namespace App\Http\Requests\Rating;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRatingRequest extends FormRequest
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
            "rating" => [
                "required",
                "numeric",
                "min:1",
                "max:10",
            ],
            "rating_title" => [
                "required",
                "string",
                "min:3",
                "max:50",
            ],
            "rating_comment" => [
                "required",
                "string",
                "min:3",
            ],
            "has_spoilers" => [
                "required",
                "boolean",
            ]
        ];
    }
}
