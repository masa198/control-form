@extends('layout.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
    <div class="confirm__content">
      <div class="confirm__heading">
        <h2>内容確認</h2>
      </div>
      <form class="form" action="/contacts" method="post">
        @csrf
          <table class="confirm-table__inner">
            <tr class="confirm-table__row">
              <th class="confirm-table__header">お名前</th>
              <td class="confirm-table__text">
                <input type="text" name="name" value="{{ $contact['name'] }}" readonly />
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">性別</th>
              <td class="confirm-table__text">
               <input type="radio" id="gender-male" name="gender" value="male"checked readonly />
               <label for="gender-male">男性</label>
               <input type="radio" id="gender-female" name="gender" value="female readonly /">
               <label for="gender-female">女性</label>
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">メールアドレス</th>
              <td class="confirm-table__text">
                <input type="text" name="email" value="{{ $contact['email'] }}" readonly />
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">郵便番号</th>
              <td class="confirm-table__text">
                <input type="text" name="post" value="{{ $contact['post'] }}" readonly />
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">住所</th>
              <td class="confirm-table__text">
                <input type="text" name="address" value="{{ $contact['address'] }}" readonly />
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">建物名</th>
              <td class="confirm-table__text">
                <input type="text" name="build" value="{{ $contact['build'] }}" readonly />
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">ご意見</th>
              <td class="confirm-table__text">
                <input type="text" name="option" value="{{ $contact['option'] }}" readonly />
              </td>
            </tr>
          </table>
        <div class="form__button">
          <button class="form__button-submit" type="submit">送信</button>
        </div>
        <a class="form__button-link" href="javascript:history.back()">修正する</a>
      </form>
    </div>
@endsection