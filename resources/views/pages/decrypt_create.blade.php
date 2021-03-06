@extends('layouts.app')
@section('title', '解密内容')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8 col-lg-8">
      <div class="card">
        <div class="card-header">
          文字解密
        </div>
        <div class="card-body">
          <form action="{{ route('wordDecode') }}" method="POST" accept-charset="UTF-8">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <label for="text">密文：</label>
              <textarea class="form-control" name="text" id="text" rows="5"></textarea>
            </div>
            <div class="form-group text-center">
              <button type="submit" class="btn btn-primary">解密</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@stop
