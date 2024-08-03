<?php

namespace App\Http\Requests;

use App\Models\Admin;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateDetailsRequest extends FormRequest {
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
        $admin = Auth::guard('admin')->user();
        $adminDetails = Admin::where("email", $admin->email)->first();
        return [
            //name must be aplhabets
            'name' => "required|regex:/^[a-zA-Z\s]*$/|max:100",
            'email' => "required|email|unique:admins,email,$adminDetails->id",
            'mobile' => "required|digits:11|unique:admins,mobile,$adminDetails->id",
            'type' => "required",

        ];
    }
}
