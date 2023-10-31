<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        // dd($this->user);
        return [
            'name'                  => 'required|string|max:255',
            'surname'               => 'required|string|max:255',
            'email'                 => 'required|email|max:255|unique:users,email,'.$this->user?->id,
            'country_id'            => 'nullable|exists:countries,id',
        ];
    }
}
