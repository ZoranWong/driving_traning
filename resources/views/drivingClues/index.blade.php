@extends('adminlte::page')

@section('title', '37学车')
@push('css')
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
@endpush
@section('content_header')
    <h1>学员线索</h1>
@stop
@section('content')
    <clue-table :channels = "{{ $channels }}"></clue-table>
@stop
@push('js')
    <script src="{{asset('js/app.js')}}"></script>
    {{--<script src="https://unpkg.com/element-ui/lib/index.js"></script>--}}
@endpush
@section('js')
    <script>

    </script>
@stop