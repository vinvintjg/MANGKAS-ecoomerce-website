<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MembershipRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'membership_name' => ['string', 'max:25'],
            'membership_type' => ['not_in:-1'],
            'membership_phone' => ['numeric', 'max:1000000000000'],
            'membership_email' => ['email']
        ];
    }

    public function messages(): array
    {
        return [
            'membership_name.string' => 'The name must be a string.',
            'membership_name.max' => 'The membership name field must not be greater than 25 characters.',
            'membership_phone.max' => 'The phone field must not be greater than 12 number.',
            'membership_type.not_in' => 'Please Choose The membership type',
            'membership_email.email' => 'Please enter a valid email address.',
        ];
    }
}
