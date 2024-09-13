<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateKidRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'grade_id' => 'required|exists:grades,id',
            'phone' => 'required|string|max:20',
            'birth_date' => 'nullable|date',
            'points' => 'required|integer',
            'address' => 'nullable|string',
            'notes' => 'nullable|string',
        ];
    }
    public function  attributes(): array
    {
        return [
            'name' => __('keywords.name'),
            'grade_id' => __('keywords.grade'),
            'phone' => __('keywords.phone'),
            'birth_date' => __('keywords.birth_date'),
            'points' => __('keywords.points'),
            'address' => __('keywords.address'),
            'notes' => __('keywords.notes'),
        ];
    }
}