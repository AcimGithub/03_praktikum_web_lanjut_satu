@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Hallo </h1>
@stop

@section('content')
    <ul>
        @foreach ($ages as $data)
        <li>
            {{$data->ages}}
        </li>
        @endforeach
    </ul>
@stop

@section('footer')
    <h1>Tengs bro!! </h1>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>alert("Selamat Datang!!")</script>
@stop