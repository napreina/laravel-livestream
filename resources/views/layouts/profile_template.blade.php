<!DOCTYPE html >
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>@yield('title')</title>  

    <link rel="stylesheet" type="text/css" href="/css/comcss_9c0dd5a.css" />
    <link rel="stylesheet" href="/css/myindex-main.html_aio_6fccf61.css" />  
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    @yield('css')
</head>

<body class="pr">
<div class="header" id="J_header">
    <div class="nav">
        <a href="/" class="logo fl"></a>
        <div class="fr clearfix pr">
            <div class="search fl">
                <form action="#" onsubmit="return common.search();">
                    <input type="search" name="search" class="secrch_key" placeholder="请输入用户名，用户ID或标题">
                    <input type="submit" class="submit">
                </form>
            </div>
            <div class="download fl tr pr">
                <span class="nav_btn">下载</span>
                <div class="download_box pa nav_btn_load">
                    <div class="download_ecode fl">
                        <img src=" " alt="">
                    </div>
                    <div class="download_Edition fl">
                        <ul>
                            <li class="down_ed down_ios fl tc">
                                <a href="#" title="下载一直播IOS版" style="background: none" class="download_apple">下载&nbsp;&nbsp;IOS</a>
                            </li>
                            <li class="down_ed down_and fr tc">
                                <a href="#" title="下载一直播Android版" class="download_android">下载&nbsp;&nbsp;Android</a>
                            </li>
                            <li class="down_ed down_pc fl tc">
                                <a href="#" title="下载一直播PC助手">下载PC助手</a>
                            </li>
                            <li class="down_ed down_major fr tc">
                                <a href="https://pro.yizhibo.com?client&amp;jumpbrowser=1" target="_new" title="下载专业版">下载专业版</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- <div class="concern fl tr pr">
                <span class="nav_btn">关注</span>
                <div class="concern_box pa dn nav_btn_load upicon">
                    <div class="bg_box">
                        <h3>正在直播</h3>
                        <ul class="J_scroll"> </ul>
                        <div class="line"></div>
                        <h4>休息中</h4>
                        <ul class="rest J_scroll"> </ul>
                    </div>
                </div>
            </div>
            <div class="history fl tr pr" id="J_btn_watch_his">
                <span class="nav_btn">历史</span>
                <div class="history_box dn upicon" style="display: none; opacity: 1;">
                <ul class="J_scroll">
                    <li class="history_list pr fl">暂无观看记录</li>
                </ul>
            </div> -->
        </div>
        <div class="recharge_1 fl J_recharge" id=""><a href="/pay/index">充值</a></div>
        <div class="login fl db">
            <span class="sign_in tc_btn J_layerlogin"><a href="/auth/login">登录 </a></span>/<span class="sign_up tc_btn J_layerreg"> <a href="/auth/register">注册</a></span>
        </div>
        <div class="logincg fr pr dn" id="J_logincg"> </div>
    </div>
</div>
</div>
    <div class=" row wrap cf ">
        <div class=" col-sm-5 wrap_left fl ">
            <div class="person_shandow pr">
                <div>
                    <img src="/upload/{{ $user->avartar }}" alt="" class="blur person_shandow_my">
                </div>
                <div class="person_shandow_my_m pa"></div>
                <div class="person_info pa cf">
                    <div class="person_head">
                        <div class="person_header fl pr">
                            <img src="/upload/{{ $user->avartar }}" alt="">
                        </div>
                    </div>
                    <div class="tc">
                        <span class="level_right">
                            <div class="person_name">{{ $user->name }}</div>
                            <div class="level_1 level"></div>
                        </span>
                    </div>
                    <div class="person_intro tc fl"></div>
                </div>
            </div>
            <div class="person_concern">
                <div class="concern_num fl tc txt-cut">关注 <span>1</span></div>
                <div class="fan_num fr txt-cut tc">粉丝 <span>0</span></div>
            </div>
            <ul class="person_list cf">
                <li class="my_name">我的名字<span>   {{ $user->name }}</span></li>
                <li class="my_number">我的帐号<span>   {{ $user->id }}</span></li>
                <li class="my_resource">我的资源<span>   {{ $user->wallet->amount }}元</span></li>
                <li class="my_recharge">我的金币<span class="recharge_btn db fr">充值</span></li>
                <li class="my_avartar"><a href='/profile/upload_img'>我的图片</a></li>             
                <li class="my_safe"><a href='/profile/verify'>我的安全</a></li>
                <li class="my_cert"><a href ='/profile/identify'>我的证明</a></li>
            </ul>
            <div class="person_qrcord">
                <div class="qrcode"><img src="" alt=""></div>
                <a href="#" title="下载一直播IOS版" class="download_apple"></a>
                <a href="#" title="下载一直播Android版" class="download_android"></a>
            </div>
        </div>
       @yield('content')
    </div>
    <div class="footer" id="J_footer"></div>
<!-- <script src="/js/myindex_main.js"></script> -->
<!-- <script src="/js/com.js"></script> -->
<!-- <script type="text/javascript" src="/js/yxa.min.js"></script> -->

</body>
</html>
