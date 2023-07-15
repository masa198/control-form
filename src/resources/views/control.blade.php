@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/index-.css') }}" />
@endsection

@section('content')
  <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>管理システム</h2>
      </div>
      <form class="form">
        <div class="form__group-first">
          <div class="form__group-title">
            <span class="form__label--item">お名前</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="name" placeholder=" " />
            </div>
          </div>
        </div>
                <div class="form__group-first">
          <div class="form__group-title">
            <span class="form__label--item">性別</span>
            <span class="form__label--required">※</span>
            <td class="confirm-table__text">
                <input type="radio" id="gender-all" name="gender" value="all"checked />
               <label for="gender-male">全て</label>
               <input type="radio" id="gender-male" name="gender" value="male"/>
               <label for="gender-male">男性</label>
               <input type="radio" id="gender-female" name="gender" value="female"/>
               <label for="gender-female">女性</label>
            </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">登録日</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="entry1" placeholder=" " />
              <p>〜</p>
              <input type="text" name="entry2" placeholder=" " />
            </div>
          </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" placeholder=" " />
            </div>
          </div>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">検索</button>
        </div>
        <div class="reset__link">
         <a href="{{ route('control') }}">リセット</a>
      </form>
  </div>

  <div class="result-table">
    <table class="result-table__inner">
       <tr class="result-table__row">
         <th class="result-table__header">
           <span class="result-table__header-span">ID</span>
           <span class="result-table__header-span">お名前</span>
           <span class="result-table__header-span">性別</span>
           <span class="result-table__header-span">メールアドレス</span>
           <span class="result-table__header-span">ご意見</span>
         </th>
         <td class="result-table__item">
           <div class="opinion">
             @if (strlen($contact['opinion']) > 25)
               <span class="opinion-text">{{ substr($contact['opinion'], 0, 25) }}...</span>
               <span class="opinion-full">{{ $contact['opinion'] }}</span>
             @else
               <span class="opinion-text">{{ $contact['opinion'] }}</span>
             @endif
           </div>
         </td>
       </tr>
      @foreach ($contacts as $contact)
      <tr class="result-table__row">
        <td class="result-table__item">
          <form class="update-form" action="/result/update" method="post">
            @method('PATCH') @csrf
            <div class="update-form__item">
              <input class="update-form__item-input" type="text" name="id" value="{{ $result['id'] }}"
              />
              <input class="update-form__item-input" type="text" name="name" value="{{ $result['name'] }}"
              />
              <input class="update-form__item-input" type="text" name="gender" value="{{ $result['gender'] }}"
              />
              <input class="update-form__item-input" type="text" name="option" value="{{ $result['option'] }}"
              />

              <input type="hidden" name="id" value="{{ $result['id'] }}" />
            </div>
          </form>
        </td>
        <td class="result-table__item">
          <form class="delete-form" action="/result/delete" method="post">
            @method('DELETE')
            @csrf
            <div class="delete-form__button">
                      <input type="hidden" name="id" value="{{ $contact['id'] }}">
              <button class="delete-form__button-submit" type="submit">
                削除
              </button>
            </div>
          </form>
        </td>
      </tr>
    </table>
  </div>
</div>
@endsection