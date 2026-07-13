<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class MobilRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
        'name' => ['required', 'min:5', 'max:10', 'string'],
        'tipe' => ['required', 'min:5', 'max:10', 'string'],
        'warna' => ['required', 'in:merah,silver,hitam'],
        'bahan_bakar' => ['required', 'integer', 'min:1', 'max:150'],
        'jenis' => ['required', 'in:suv,electric,hybrid'],
    ];
    }
}
