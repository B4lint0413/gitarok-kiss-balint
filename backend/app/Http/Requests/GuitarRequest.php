<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuitarRequest extends FormRequest
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
            "model" => ["required", "string", "max:20"],
            "manufacturer" => ["required", "string", "in:Fender,Gibson,Ibanez,ESP,Cort"],
            "strings" => ["required", "integer", "between:6,8"],
            "body" => ["required", "string", "in:Super stratocaster,Stratocaster,Telecaster,Les Paul,Snakebyte,Flying V"],
            "color" => ["required", "string", "max:20"]
        ];
    }
}
