<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreWeeklyEventRequest extends FormRequest
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
            'title'   => ['required', 'string', 'min:1', 'max:255'],
            'content' => ['required', 'string', 'min:1'],
            'image'   => ['required', 'image', 'mimes:jpeg,png,jpg,svg,webp', 'max:512'],
            // 'status'  => ['required', 'boolean']
        ];
    }
}
