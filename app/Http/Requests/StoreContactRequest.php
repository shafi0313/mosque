<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
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
            'subject'    => ['required', 'string', 'min:1', 'max:191'],
            'first_name' => ['required', 'string', 'min:1', 'max:60'],
            'last_name'  => ['required', 'string', 'min:1', 'max:60'],
            'email'      => ['required', 'email', 'min:1', 'max:80'],
            'phone'      => ['required', 'string', 'min:1', 'max:80'],
            'info'       => ['required', 'string', 'min:1', 'max:80'],
            'message'    => ['required', 'string', 'min:1'],
        ];
    }
}
