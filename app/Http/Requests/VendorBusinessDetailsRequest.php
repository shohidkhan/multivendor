<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VendorBusinessDetailsRequest extends FormRequest {
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
            'vendor_id' => 'required',
            'shop_name' => 'required|max:150',
            'shop_address' => 'required|max:150',
            'shop_city' => 'required|max:150',
            'shop_country' => 'required|max:150',
            'shop_email' => 'required|max:150',
            'shop_pincode' => 'required|numeric',
            'shop_number' => 'required',
            'shop_license_number' => 'required',
            'shop_mobile_number' => 'required|min:11|numeric',
            // "nid_front" => "required|image",
            // "nid_back" => "required|image|mimes:jpeg,png,jpg",
        ];
    }
}
