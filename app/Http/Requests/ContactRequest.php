<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:contacts,email',
            'subject' => 'required|string|max:255',
            'description' => 'required|string|max:1500',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'يرجى إدخال اسم كاملاً.',
            'email.required' => 'يرجى إدخال بريد إلكتروني.',
            'subject.required' => 'يرجى إدخال الموضوع بشكل صحيح.',
            'email.email' => 'يرجى إدخال بريد إلكتروني صالح.',
            'description.required' => 'يرجى إدخال نص الرسالة بشكل صحيح.',
        ];
    }
}
