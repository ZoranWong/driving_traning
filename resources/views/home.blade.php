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
                    <i class="fa fa-user-plus"></i>
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
        <div class="box box-primary">
            <div class="box-header ui-sortable-handle" style="cursor: move;">
                <i class="ion ion-clipboard"></i>

                <h3 class="box-title">待处理线索</h3>

                <div class="box-tools pull-right">
                    <ul class="pagination pagination-sm inline">

                        <li><a href="#">«</a></li>
                        @for($i = 0; $i < $waitCompletedCluePageCount; $i ++)
                            <li class="active"><a href="#" >1</a></li>
                        @endfor
                        <li><a href="#">»</a></li>
                    </ul>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
                <ul class="todo-list ui-sortable">
                    <li>
                        <!-- drag handle -->
                        <span class="handle ui-sortable-handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                        <!-- checkbox -->
                        <input type="checkbox" value="">
                        <!-- todo text -->
                        <span class="text">Design a nice theme</span>
                        <!-- Emphasis label -->
                        <small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                        <!-- General tools such as edit or delete-->
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-check-square-o"></i>
                        </div>
                    </li>
                    <li>
                      <span class="handle ui-sortable-handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                        <input type="checkbox" value="">
                        <span class="text">Make the theme responsive</span>
                        <small class="label label-info"><i class="fa fa-clock-o"></i> 4 hours</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-check-square-o"></i>
                        </div>
                    </li>
                    <li>
                      <span class="handle ui-sortable-handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                        <input type="checkbox" value="">
                        <span class="text">Let theme shine like a star</span>
                        <small class="label label-warning"><i class="fa fa-clock-o"></i> 1 day</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-check-square-o"></i>
                        </div>
                    </li>
                    <li>
                      <span class="handle ui-sortable-handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-check-square-o"></i>
                      </span>
                        <input type="checkbox" value="">
                        <span class="text">Let theme shine like a star</span>
                        <small class="label label-success"><i class="fa fa-clock-o"></i> 3 days</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-check-square-o"></i>
                        </div>
                    </li>
                    <li>
                      <span class="handle ui-sortable-handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                        <input type="checkbox" value="">
                        <span class="text">Check your messages and notifications</span>
                        <small class="label label-primary"><i class="fa fa-clock-o"></i> 1 week</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-check-square-o"></i>
                        </div>
                    </li>
                    <li>
                      <span class="handle ui-sortable-handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                        <input type="checkbox" value="">
                        <span class="text">Let theme shine like a star</span>
                        <small class="label label-default"><i class="fa fa-clock-o"></i> 1 month</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-check-square-o"></i>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix no-border">
                <button type="button" class="btn btn-default pull-right"><i class="fa fa-check-square-o"></i>全部处理</button>
            </div>
        </div>
    </div>
    <clue-editor></clue-editor>
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