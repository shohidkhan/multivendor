<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PasswordChangeRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array {
        return [
            //
            'password' => 'required|min:6',
            'old_password' => 'required',
            'confirm_password' => 'required|same:password',
        ];
    }
    public function messages(): array {
        return [
            //
            'password.required' => 'New password is required',
            'old_password.required' => ' Old password is required',
            'confirm_password.required' => 'Confirm password is required',
            'confirm_password.same' => 'Confirm password does not matched',
            'password.min' => 'New Password must be at least 6 characters',
        ];
    }
}
