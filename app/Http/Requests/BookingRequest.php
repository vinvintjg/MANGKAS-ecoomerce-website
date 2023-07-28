<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingRequest extends FormRequest
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
            'agenda_id' => ['required'],
            'booking_name' => ['required'],
            'booking_phone' => ['required'],
            'booking_gender' => ['required', 'not_in:-1'],
            'booking_haircut' => ['required', 'not_in:-1'],
            'booking_note' => ['required'],
            'booking_payment_method' => ['required'],
            'booking_payment_photo' => ['required'],
            'booking_service' => ['required']
        ];
    }

    public function messages(): array
    {
        return [
            'membership_name.string' => 'The name must be a string.',
        ];
    }
}
