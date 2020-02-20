@extends('layouts.app')
@section('title', '解密内容')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8 col-lg-8">
      <div class="card">
        <div class="card-header">
          解密文本
        </div>
        <div class="card-body text-center">
          <div class="container" id="text">{{ $text }}</div>
          <button class="btn btn-primary" data-clipboard-target="#text" id="copy" style="margin-top: 15px;">点击复制</button>
        </div>
      </div>
    </div>
  </div>
</div>

@stop

@section('scripts')
  <script type="text/javascript"  src="{{ asset('js/clipboard.min.js') }}"></script>
  <script>
    var clipboard = new ClipboardJS('#copy');
    clipboard.on('success', function(e) {
        alert('复制成功')
    });
  </script>
@stop
