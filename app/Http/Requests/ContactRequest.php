<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required|min:5|max:50',
            'message' => 'required|min:10|max:100',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Имя',
            'email' => 'Email',
            'subject' => 'Тема сообщения',
            'message' => 'Сообщение',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "Поле {$this->attributes()['name']} является обязательным",
            'email.required' => "Поле {$this->attributes()['email']} является обязательным",
            'subject.required' => "Поле {$this->attributes()['subject']} является обязательным",
            'message.required' => "Поле {$this->attributes()['message']} является обязательным"
        ];
    }
}
