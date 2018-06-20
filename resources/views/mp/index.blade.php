<html>
    <head>
        <title>37学车</title>
        <meta name="keywords" content="学车,考驾照,驾校,报名">
        <meta http-equiv="charset" content="utf-8">
        <meta http-equiv="content-type" content="text/html">
        <meta http-equiv="Accept-Language" content="zh_CN">
        {{--<meta http-equiv="refresh" content="0">--}}
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <style>
            *{
                color: #484848;
                font-size: 12px;
            }
            body{
                background-color: #fbfbfb;
            }
            ul{
                list-style: none;
                margin-left: -1.8em;
            }
            ul li{
                padding-top: 3px;
                padding-bottom: 3px;
            }
            .title span{
                font-size: 13px;
            }
            #description{
                background-color: #fffefe;
            }
            .type, .get_time{
                padding-left: 1em;
            }
            .type span,.get_time span {
                padding: 4px 27px;
                border: #6ba4f9 1px solid;
                border-radius: 4px;
                line-height: 36px;
                color: #6ba4f9;
            }

            .type span.active, .get_time span.active{
                color: #ffffff;
                background-color: #6ba4f9;
            }
            #schoolList{
                margin-top: 12px;
            }
            #schoolListBox{
                margin-left: 1em;
                margin-right: 1em;
            }
            #schoolListUl{
                width: 100%;
            }
            /*#schoolListUl li{*/
                /*width: 50%;*/
            /*}*/
            #schoolList li .school-info-box{
                margin: 5px;
                background-color: #ffffff;
            }
            #schoolList li .school-info-box .school-image{
                width: 100%;
                height: auto;
                position: relative;
                overflow: hidden;
            }
            #schoolList li .school-info-box .school-image img{
                width: 100%;
                height: auto;

            }
            #schoolList li .school-info-box .school-image .school-title{
                background: #1b1e217a;
                position: absolute;
                width: 100%;
                text-align: center;
            }
            #schoolList li .school-info-box .school-image .school-title span{
                color: #ffffff;
            }
            #schoolList li .school-info-box .school-class-info div{
                margin-top: 6px;
                margin-bottom: 4px;
            }
            #schoolList li .school-info-box .price{
                margin-right: 12px;
            }
            #schoolList li .school-info-box .price span{
                color: #f33f70;
            }
            #schoolList li .school-info-box .school-class-info {
               display: flex;
            }
        </style>
    </head>
    <body>
        <div >
            <div id="carouselBanner" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{URL::asset('/slicing/banner.png')}}" alt="First slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselBanner" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselBanner" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div id = "description">
                <div class = "title" style=" padding-top: 8px; padding-left:1em;padding-bottom: 8px; border-bottom: #eaeaea 1px solid;">
                    <img src="{{URL::asset('/slicing/icon-1.png')}}" width="18px">
                    <span >加入合肥人的一站式学车平台，您将享受：</span>
                </div>
                <div>
                    <ul>
                        <li>1、全市50+训练场，家门口就可以练车；</li>
                        <li>2、驾校直招，最低2000元起；</li>
                        <li>3、拿证更快，交叉训练，最快45天拿证；</li>
                        <li>4、A、B、C全车型培训，想学啥都可以；</li>
                        <li>5、一对一服务，您的专属学车顾问全程一对一服务；</li>
                    </ul>
                </div>
            </div>
            <div id = "action">
                <div>
                    <div class = "title" style="padding-left:1em;padding-bottom: 4px;">
                        <img src="{{URL::asset('/slicing/icon-2.png')}}" width="18px">
                        <span >请您选择培训的车型：</span>
                    </div>
                    <div class="type">
                        <span>C1</span>
                        <span>C2</span>
                        <span>B1</span>
                        <span>B2</span>
                        <span>A1</span>
                        <span>A2</span>
                        <span>A3</span>
                        <span>C5</span>
                    </div>
                </div>
                <div>
                    <div class = "title" style="padding-left:1em;padding-bottom: 4px;">
                        <img src="{{URL::asset('/slicing/icon-3.png')}}" width="18px">
                        <span >请您选择预期拿证时间：</span>
                    </div>
                    <div class="get_time">
                        <span>45天</span>
                        <span>2-3个月</span>
                        <span>3-5个月</span>
                    </div>
                </div>
                <div style="display: flex; display: -moz-flex; display: -webkit-flex;margin: 8px;">
                    <button href="/search" type="button" class="search-btn btn btn-primary btn-lg m-auto">立即查找驾校</button>
                </div>
            </div>
            <div id = "schoolList">
                <div id = "listTitle" class="title" style="padding-bottom: 4px;margin: auto;width: 164px;">
                    <img src="{{URL::asset('/slicing/icon-wheel.png')}}" width="18px">
                    <span >--精选口碑领先驾校--</span>
                </div>
                <div id = "schoolListBox">
                    <ul id = "schoolListUl">
                        <li>
                            <div class="school-info-box">
                                <div class="school-image">
                                    <div class="school-title"><span>合肥新亚驾校</span></div>
                                    <img src="{{URL::asset('/slicing/xinya.jpg')}}">
                                </div>
                                <div class="school-class-info">
                                    <div class="price" ><span>¥2260</span> 元起</div>
                                    <div>
                                        <span>车型:</span>
                                        <span>A1,A2,A3,B1,B2,C1,C2</span>
                                     </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="school-info-box">
                                <div class="school-image">
                                    <div class="school-title"><span>合肥八一驾校</span></div>
                                    <img src="{{URL::asset('/slicing/bayi.jpg')}}">
                                </div>
                                <div class="school-class-info">
                                    <div class="price" >
                                        <span>¥2260</span> 元起
                                    </div>
                                    <div>
                                        <span>车型:A1,A2,A3,B1,B2,C1,C2</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="school-info-box">
                                <div class="school-image">
                                    <div class="school-title"><span>合肥新安驾校</span></div>
                                    <img src="{{URL::asset('/slicing/xinan.jpg')}}">
                                </div>
                                <div class="school-class-info">
                                    <div class="price" >
                                        <span>¥2360</span> 元起
                                    </div>
                                    <div>
                                        <span>车型:A1,A2,A3,B1,B2,C1,C2</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script>
        $(window).ready(function () {
            let width = $('#schoolList li .school-info-box .school-image').width();
            $('#schoolList li .school-info-box .school-image').height(width*2/3);
            $('.get_time span').click(function () {
                $('.get_time span.active').removeClass('active');
                $(this).toggleClass('active');
            });
            $('.type span').click(function () {
                $('.type span.active').removeClass('active');
                $(this).toggleClass('active');
            });
            $("#schoolList li").click(function () {
                console.log('search ');
                window.location.href = "/search";
            });

            $(".search-btn").click(function () {
                console.log('search ');
                window.location.href = "/search";
            });
        });
    </script>
</html>