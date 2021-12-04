{{--  cai nay la duong dan den' file Layouts/Layout.blade.php --}}
@extends('layouts.Layout')

@section('title', 'Page Title')

@section("headThisPage")
    đoạn include Link chỉ dành cho trang tránh gây lỗi CSS
@endsection

@section('body')
    Trang nay la trang BODY
    <br>
    <a href="{{route('SanPham.index')}}">quay về nè</a>
    <img src='{{$sanPham->HinhAnh}}' alt="{{$sanPham->HinhAnh}}" width='100' height='100'>
    {{dd($sanPham)}}
@endsection

@section("scriptThisPage")
    Đoạn script chỉ xài cho trang
@endsection
