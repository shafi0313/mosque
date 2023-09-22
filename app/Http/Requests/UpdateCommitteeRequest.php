<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCommitteeRequest extends FormRequest
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
            'name'         => ['required', 'string', 'min:1', 'max:191'],
            'designation'  => ['required', 'string', 'min:1', 'max:191'],
            'phone'        => ['required', 'string', 'min:1', 'max:191'],
            'email'        => ['required', 'string', 'min:1', 'max:191'],
            'type'         => ['required', 'string', 'min:1', 'max:50'],
            'joining_date' => ['required', 'date'],
            'status'       => ['nullable', 'boolean'],
            'is_present'   => ['nullable', 'boolean'],
            'address'      => ['required', 'string', 'min:1', 'max:255'],
            'text'         => ['nullable', 'string', 'min:1'],
            'image'        => ['nullable', 'image','mimes:jpeg,png,jpg', 'max:1024'],
        ];
    }
}
