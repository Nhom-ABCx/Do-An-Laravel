{{-- cai nay la duong dan den' file Layouts/Layout.blade.php --}}
@extends('User.layouts.Layout')

@section('title', 'Page Title')

@section('headThisPage')
    đoạn include Link chỉ dành cho trang tránh gây lỗi CSS
@endsection

@section('banner')
    cho nay la banner
@endsection

@section('body')
    Trang nay la trang BODY
@endsection

@section('scriptThisPage')
    Đoạn script chỉ xài cho trang
@endsection
