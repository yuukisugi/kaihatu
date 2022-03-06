@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('contact.send') }}">
    @csrf

<div class="form-group row">
    <label class="col-md-2">メールアドレス</label>
    <div class="col-md-10">
    {{ $inputs['email'] }}
    <input
        name="email"
        value="{{ $inputs['email'] }}"
        type="hidden">
    </div>
</div>
<div class="form-group row">
    <label class="col-md-2">タイトル</label>
    <div class="col-md-10">
    {{ $inputs['title'] }}
    <input
        name="title"
        value="{{ $inputs['title'] }}"
        type="hidden">
    </div>
</div>
<div class="form-group row">
    <label class="col-md-2">お問い合わせ内容</label>
    <div class="col-md-10">
    {!! nl2br(e($inputs['body'])) !!}
    <input
        name="body"
        value="{{ $inputs['body'] }}"
        type="hidden">
    </div>
</div>
    <button type="submit" name="action" value="back">
        入力内容修正
    </button>
    <button type="submit" name="action" value="submit">
        送信する
    </button>
</form>
@endsection