@extends('layout.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>お問い合わせ</h2>
      </div>
      <form class="form" action="/contacts/confirm" method="post">
          @csrf
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お名前</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="name" placeholder="例）山田" value="{{ old('name') }}" />
              <input type="text" name="name" placeholder="例）太郎" value="{{ old('name') }}" />
            </div>
            <div class="form__error">
                @error('name')
                {{ $message }}
                @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">性別</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="radio" id="gender-male" name="gender" value="male"checked />
              <label for="gender-male">男性</label>
              <input type="radio" id="gender-female" name="gender" value="female /">
              <label for="gender-female">女性</label>
            </div>
            <div class="form__error">
                @error('gender')
                {{ $message }}
                @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" placeholder="test@example.com" value="{{ old('email') }}" />
            </div>
            <div class="form__error">
                @error('email')
                {{ $message }}
                @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">郵便番号</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <div class="form__input--side">
                <div class=.form__input--side p>
                  <p>〒</p>
                </div>
                <input type="text" name="post" placeholder="例）123-456" value="{{ old('post') }}" />
              </div>
            </div>
            <div class="form__error">
                @error('post')
                {{ $message }}
                @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">住所</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="address" placeholder="例）123-456" value="{{ old('post') }}" />
            </div>
            <div class="form__error">
                @error('address')
                {{ $message }}
                @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">建物名</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="build" placeholder="千駄ヶ谷マンション101" />
            </div>
            <div class="form__error">
                @error('build')
                {{ $message }}
                @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">ご意見</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--textarea">
              <textarea name="option" placeholder=" "></textarea>
            </div>
            <div class="form__error">
                @error('option')
                {{ $message }}
                @enderror
            </div>
          </div>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">確認</button>
        </div>
      </form>
    </div>
@endsection