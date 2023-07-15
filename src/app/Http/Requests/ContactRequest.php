<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\ContactRequest;


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
            'name' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'in:1,2'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'post' => ['required', 'string', 'size:8'],
            'address' => ['required', 'string', 'max:255'],
            'build' => ['string', 'max:255'],
            'option' => ['required', 'max:120'],
        ];
    }

      public function messages()
      {
          return [
              'name.required' => '名前を入力してください',
              'name.string' => '名前を文字列で入力してください',
              'name.max' => '名前を255文字以下で入力してください',
              'gender.required' => '性別を選択してください',
              'gender.in' => '男性または女性を選択してください',
              'email.required' => 'メールアドレスを入力してください',
              'email.string' => 'メールアドレスを文字列で入力してください',
              'email.email' => '有効なメールアドレス形式を入力してください',
              'email.max' => 'メールアドレスを255文字以下で入力してください',
              'post.required' => '郵便番号を入力してください',
              'post.string' => '郵便番号を数字で入力してください',
              'post.size' => '郵便番号を8桁で入力してください',
              'address.required' => '住所を入力してください',
              'address.string' => '住所を文字列で入力してください',
              'address.max' => '住所を255文字以下で入力してください',
              'build.max' => '建物名を255文字以下で入力してください',
              'option.required' => 'ご意見を入力してください',
          ];
      }
}
