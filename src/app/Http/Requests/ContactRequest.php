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
            'first-name.required' => '名字を入力してください',
            'first-name.string' => '名字を文字列で入力してください',
            'first-name.max' => '名字を255文字以下で入力してください',
            'last-name.required' => '名前を入力してください',
            'last-name.string' => '名前を文字列で入力してください',
            'last-name.max' => '名前を255文字以下で入力してください',
        ];
    }
}
