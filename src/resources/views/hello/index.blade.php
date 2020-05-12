@extends('layouts.helloapp')
@section('titlt', 'Index')
@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <p>本文</p>
  <p>Controller value <br>'message' = {{$message}}</p>
  <p>ViewComposer value <br>'view_message' = {{$view_message}}</p>
  {{-- <ul>
    @each('components.item', $data, 'item')
  </ul> --}}
  @component('components.message')
    @slot('msg_title')
    caution
    @endslot
    @slot('msg_content')
    メッセージ
    @endslot  
  @endcomponent
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection