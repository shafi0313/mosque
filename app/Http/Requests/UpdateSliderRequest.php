<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSliderRequest extends FormRequest
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
            'title'     => 'required|string|max:255',
            'sub_title' => 'nullable|string|max:1000',
            'image'     => 'required|image|mimes:jpeg,png,jpg|max:1024',
            'icon'      => 'nullable|image|mimes:png|max:512',
        ];
    }
}
