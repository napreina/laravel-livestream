<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link type="text/css" rel="stylesheet" href="/main/static.yizhibo.com/pc_live/static/com_css/comcss_9c0dd5a.css" />
    <link type="text/css" rel="stylesheet" href="/main/static.yizhibo.com/pc_live/pkg/live.html_aio_0637bf0.css" />
    <script type="text/javascript" src="/js/jquery.min.js"></script>
</head>
<body  style="background-color: rgba(208, 207, 207, 0.8);">
    <div class="layui-layer layui-layer-page  layer-anim" type="page"  style="width: 523px; height: 428px; margin-left: 30%; margin-top: 10%;"> 
        <div class="register" style="background-color: rgba(234, 234, 234, 0.8);">
            <a href="javascript:window.history.back();"><div class="close_btn"></div></a>
            <div class="left">
                <div class="tab_wp" >
                    <h3 class="tab tab_lg on J_layerlogin"> 登录</h3>
                    <h3 class="tab tab_reg  J_layerreg" style="width:80px"><a href="/publisher/register">注册 </a></h3>                
                </div> 
                <form id="J_register" data-title="注册" method="post" action="/publisher/doregister">
                    <div class="input area_code">
                        <input type="text" class="areacode" name="area_code" value="+86 中国" readonly="readonly">
                        <input type="text" maxlength="11" placeholder="输入手机号" name="phone" id="phone">
                    </div>                
                    <!-- <div class="half_input">
                        <input type="text" class="checkcode" placeholder="请输入右侧字母" name="captcha" id="J_captcha">
                        <img src="https://checksum.yizhibo.com/checkCode?k=83ULJ8Pkv0JU3wq9be4D7VT5iueVm7NMAVIRfxFA5EiYKkMgevVLQgmDinmtbluUhYBxE3BzS_c." alt="" class="J_img_fresh" title="点击刷新">
                    </div> -->
                    <!-- <div class="half_input">
                        <input type="text" class="checkcode" placeholder="输入验证码" name="checkcode" id="J_checkcode">
                        <a class="checkNum_btn">获取验证码</a>
                    </div> -->
                    <input type="password" class="pwd" placeholder="输入密码(6-20位数字或英文)" id="password" name="password" value="">
                    <input class="register_btn" id="send_btn" type="button" value="登录">               
                </form>
            </div>
            <div class="v_line"><span></span><i>或</i><span></span></div>
            <div class="right">
                <h3>其他登录方式</h3>
                <div class="other_sign" id="J_oath_login">
                    <a href="/member/thirdlogin/login?type=1&amp;redirect_url=/templates/html/301/301.html?urll=http%3A%2F%2Flocalhost%3A8001%2Fchannel%23" class="weibo" lwidth="600" lheight="350">微博登录</a>
                    <a href="/member/thirdlogin/login?type=2&amp;redirect_url=/templates/html/301/301.html?urll=http%3A%2F%2Flocalhost%3A8001%2Fchannel%23" class="qq" lwidth="700" lheight="390">QQ登录</a>
                    <a href="/member/thirdlogin/login?type=3&amp;redirect_url=http%3A%2F%2Flocalhost%3A8001%2Fchannel%23" class="weixin" lwidth="600" lheight="410">微信登录</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#send_btn').click(function(){        
        phone_num = $('#phone').val();
        password = $('#password').val();
       if(phone_num ==""){
           alert('请输入电话号码。');
           return false;
       }
       if(password==""){
           alert('请输入您的密码。');
           return false;
       }
          $.post('/publisher/dologin',
            {   
                phone : phone_num, password: password
            },
            function(res){
                alert(res);
                $('#phone').val("");
                $('#password').val("");
                data = JSON.parse(res);
                alert(data.content);
                if(data.status =='success'){
                    window.location.href="/publisher/channel"; 
                }
            });
        });
    </script>
</body>
</html>