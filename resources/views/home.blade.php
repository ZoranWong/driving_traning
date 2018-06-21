@extends('adminlte::page')

@section('title', '37学车')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>{{ $clueCount }}</h3>

                    <p>总线索</p>
                </div>
                <div class="icon">
                    <i class="fa ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">
                    更多 <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>{{ $newClueCount }}</h3>

                    <p>新增线索</p>
                </div>
                <div class="icon">
                    <i class="fa fa-address-book"></i>
                </div>
                <a href="#" class="small-box-footer">
                    更多 <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>{{ $completedClueCount }}</h3>

                    <p>已成交线索</p>
                </div>
                <div class="icon">
                    <i class="fa fa-thumbs-up"></i>
                </div>
                <a href="#" class="small-box-footer">
                    更多 <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>{{ $waitCompletedClueCount }}</h3>

                    <p>待处理线索</p>
                </div>
                <div class="icon">
                    <i class="fa fa-thumbs-down"></i>
                </div>
                <a href="#" class="small-box-footer">
                    更多 <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="row">

    </div>
    {{--<clue-editor></clue-editor>--}}
@stop
@push('js')
    <script src="{{asset('js/app.js')}}"></script>
@endpush
@section('js')
    <script>
        $(function () {
            
        });
    </script>
@stop