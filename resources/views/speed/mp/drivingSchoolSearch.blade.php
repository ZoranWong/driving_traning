<html>
<head>
    <title>驾校查询结果</title>
    <meta name="keywords" content="学车,考驾照,驾校,报名">
    <meta http-equiv="charset" content="utf-8">
    <meta http-equiv="content-type" content="text/html">
    <meta http-equiv="Accept-Language" content="zh_CN">
    <meta name="csrf-token" content="{!! csrf_token() !!}" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <style>
        *{
            color: #484848;
            font-size: 12px;
        }
        body{
            background-color: #f3f3f3;
        }
        .col-form-label{
            text-align: left;
            text-align: -moz-left;
            text-align: -webkit-left;
            padding-left: 0px !important;
        }
        .user-from{
            background-color: #ffffff;
            margin: 12px 0;
            padding: 8px;
            border-top: #71767a5e 1px solid;
            border-bottom: #71767a5e 1px solid;
        }
        .top-border{
            border-top: #71767a5e 1px solid;
        }
        .form-group{
            right: 0;
            padding-top: 12px;
        }
        .modal-dialog{
            top: 192px;
            width: 80%;
            margin: auto;
        }
    </style>
</head>
<body>
    <div>
        <div style="width: 233px;margin: 64px auto;">
            <img src="{{URL::asset('/slicing/icon-car.png')}}" width="48px" height="48px"><span style="font-size: 16px;padding-left: 4px;">符合你要求的驾校有{{ $count }}家</span>
        </div>
        <div >
            <span style="font-size: 14px; color: #a0a0a0;padding-left: 28px;">请填写下列信息，用于接收驾校优惠信息：</span>
        </div>
        <div class="user-from">
            <form>
                {{ csrf_field() }}
                <div class="form-group row col-11 ml-3">
                    <label for="user_name" class="col-4 col-form-label">姓名</label>
                    <div class="col-8">
                        <input type="text" class="form-control-plaintext" id="user_name" value="">
                    </div>
                </div>
                <div class="form-group row col-11 ml-3 top-border">
                    <label for="user_mobile" class="col-4 col-form-label">手机号码</label>
                    <div class="col-8">
                        <input type="number" class="form-control-plaintext" id="user_mobile" placeholder="请输入有效的手机号码">
                    </div>
                </div>
            </form>
        </div>
        <div>
            <span style="font-size: 12px; color: #a0a0a0;padding-left: 24px;">您将获得一下优惠：会员专属驾校优惠，最高</span>
            <span style="font-size: 12px; color: #a0421f;padding-left: 2px;">20%</span>
            <br>
            <span style="font-size: 12px; color: #a0a0a0;padding-left: 24px;">联系我们：</span> <a href="tel:150551499">1505514999</a>
        </div>
        <div style="display: flex; display: -moz-flex; display: -webkit-flex;margin: 8px;">
            <button type="button" class="btn btn-primary btn-lg m-auto save-btn">提交信息</button>
        </div>
    </div>

    <div class="modal fade" id="saveSuccess" tabindex="-1" role="dialog" aria-labelledby="saveSuccessLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div style="display: -webkit-flex;display: flex;display: -moz-flex;width: 96px;margin: auto;">
                        <img width="32px" height="32px" src="{{URL::asset('/slicing/icon-right.png')}}">
                        <h5 class="modal-title" style="margin-top: 3px;margin-left: 4px;" id="exampleModalLabel">预约成功</h5>
                    </div>

                    <div style="width: 168px;margin: 8px auto;">
                        <span>私人学车顾问稍后会与您联系！请保持手机畅通，谢谢！</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script>
    $(window).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.save-btn').click(function () {
            let data = {};
            data['channel'] = 'BAIDU';
            data['customer_name']= $('#user_name').val();
            data['customer_mobile'] = $('#user_mobile').val();
            data['_token'] = $('input[name="_token"]').val();
            console.log(data);
            console.log(JSON.stringify(data));
            if(data['customer_name'] && data['customer_mobile']){
               $.ajax({
                   //请求类型，这里为POST
                   type: 'POST',
                   //你要请求的api的URL
                   url: "/clue" ,
                   //是否使用缓存
                   cache:false,
                   //数据类型，这里我用的是json
                   dataType: "json",
                   //必要的时候需要用JSON.stringify() 将JSON对象转换成字符串
                   data: data, //data: {key:value},
                   //请求成功的回调函数
                   success: function(data){
                       //函数参数 "data" 为请求成功服务端返回的数据
                   }
               });
            }
        });
    });
</script>
</html>