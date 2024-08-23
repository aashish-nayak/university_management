<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'teacher_id' => 'required|integer|exists:teachers,id',
            'class' => 'required|integer',
            'admission_date' => 'required|date',
            'yearly_fees' => 'required|numeric'
        ];
    }

    public function messages(): array
    {
        return [
            'teacher_id.required' => 'A Teacher field is required',
            'teacher_id.integer' => 'Teacher invalid',
            'teacher_id.exists' => 'Selected Teacher not exists',
        ];
    }
}
