<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieRequest extends FormRequest
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
            "title" => [
                "required",
                "string",
                "min:2",
                "max:100",
                "unique:movies,title",
            ],
            "release_year" => [
                "required",
                "integer",
                "min:1900",
                "max:2026"
            ],
            "length_hours" => [
                "required",
                "numeric",
                "min:1",
                "max:6"
            ],
            "rating" => [
                "required",
                "numeric",
                "min:1",
                "max:10"
            ],
            "director" => [
                "required",
                "string",
                "min:3",
                "max:50"
            ],
            "writer" => [
                "required",
                "string",
                "min:3",
                "max:50"
            ],
            "genre" => [
                "required",
                "string",
                "min:3",
                "max:50"
            ],
            "is_watched" => [
                "required",
                "boolean",
            ]
        ];
    }
}
