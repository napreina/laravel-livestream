<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <title></title>
    <meta name="Description" content="潘潘💋,XX潘潘,好久不见，甚是想念。直播进行中，还不快来？"/>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />    
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" /> 
    <link type="text/css" rel="stylesheet" href="/main/static.yizhibo.com/pc_live/static/com_css/comcss_9c0dd5a.css" />
    <link type="text/css" rel="stylesheet" href="/main/static.yizhibo.com/pc_live/pkg/live.html_aio_0637bf0.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.css">
    <link type="text/css" rel="stylesheet" href="/css/carousel.css" />
    <script src="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.min.js"></script>  
    <script type="text/javascript" src="/js/player.js" ></script>
    <style>
       #J_msglist::-webkit-scrollbar {
            width: 6px;
            background-color: #F5F5F5;
        } 
        #J_msglist::-webkit-scrollbar-thumb {
            background-color: #56585b;
        }
        
        .gift_his::-webkit-scrollbar {
            width: 6px;
            background-color: #F5F5F5;
        } 
        .gift_his::-webkit-scrollbar-thumb {
            background-color: #56585b;
        }
        .row::-webkit-scrollbar {
            height: 6px;
            background-color: #F5F5F5;
        } 
        .row::-webkit-scrollbar-thumb {
            background-color: #56585b;
        }
    </style>
</head>
<body class="room ">    
   <div class="left_bar" id="J_left_bar" style="display: block;">
   <div class="avatar J_layerlogin">
        <a href="/profile/index"><img src="//static.yizhibo.com/pc_live/static/img/no_pic.png" id="J_my_avatar"></a>
   </div>
   <div class="top">      
        <a href="/publisher/login" class="J_layerlogin">
            <div>
                <font style="vertical-align: inherit;">登录 </font>
                <span><font style="vertical-align: inherit;">登录</font></span>
            </div>
        </a>
        <a href="/publisher/register" class="J_layerreg">
            <div>
                <font style="vertical-align: inherit;">注册 </font>
                <span><font style="vertical-align: inherit;">注册</font></span>
            </div>
        </a>
        <a href="/">
            <div>
                <font style="vertical-align: inherit;">首页 </font>
                <span><font style="vertical-align: inherit;">首页</font></span>
            </div>
        </a>
        <a  class="J_my_noble J_p_from">
            <div>
                <font style="vertical-align: inherit;">添加 </font>
                <span ><font style="vertical-align: inherit;">添加</font></span>
            </div>
        </a>  
        <a  class=" J_p_from" id="live_one">
            <div>
                <font style="vertical-align: inherit;">one</font>
                <span ><font style="vertical-align: inherit;">one</font></span>
            </div>
        </a>  
    </div>
    <div class="bot iconfont">
        <div id="J_report">
            <div>
                <font style="vertical-align: inherit;"> </font>
                <span><font style="vertical-align: inherit;">举报</font></span>
            </div>
        </div>
        <div class="download">
        <div>
            <font style="vertical-align: inherit;"> </font>
            <span><font style="vertical-align: inherit;">下载 </font><br><font style="vertical-align: inherit;">APP</font></span>
        </div>
        <div class="s_download_box">
            <div class="content">
                <div class="download_ecode"><img src="//www.yizhibo.com/www/index/qrpng" alt=""></div>
                <a href="javascript:common.downLoadByType(0);" title="Download a live IOS version" class="download_apple">
                    <img src="//www.yizhibo.com/static/img/apple.png" alt="">
                </a>
                <a href="javascript:common.downLoadByType(1);" title="Download a live Android version" class="download_android">
                    <img src="//www.yizhibo.com/static/img/android.png" alt="">
                </a>
            </div>
        </div>
    </div>
</div>
</div>
   <div class="live_box" id="J_live_box" style="  opacity: 1;  width: 1480px;    height: 800px;    margin-top: -428px;    margin-left: -747px;">
        <div class="w330">
            <div class="anchorinfo clearfix pr" id="J_anchorinfo">
                <div class="avatar J_u_card" data-memberid="215380273">
                    <a href="/main/member/personel/user_info5d3b.html?memberid=215380273&amp;jumpbrowser=1" target="_blank" weibo_openid="6395135882">
                        <img src="/upload/{{ $my_channel->publisher->first()->avartar2 }}" alt="{{ $my_channel->publisher->first()->name }}">
                    </a>
                    <div class="authentication"></div>
               </div>
                <div class="info">
                    <div class="nickname level_right">
                        <a href="/main/member/personel/user_info5d3b.html?memberid=215380273&amp;jumpbrowser=1" target="_blank" weibo_openid="6395135882">
                            <font style="vertical-align: inherit;"> {{ $my_channel->publisher->first()->name }} </font>
                        </a>
                        <div class="level_{{ $my_channel->publisher->first()->rating }} level"> </div>
                    </div>
                    <div class="id">
                        <font style="vertical-align: inherit;">金币:  </font>
                        <span class="J_goldcoin"><font style="vertical-align: inherit;">990,000</font></span>
                    </div>
                </div>
                <div id="follow_330" class="follow_zi J_follow x_guide" mid="215380273" data-fancount="10.4万" data-group="10.4万"></div>
                <dl class="his">
                    <dd><font style="vertical-align: inherit;">最新回放: </font></dd>
                </dl>
            </div>
            <div class="anchor_state hide" id="J_anchor_status" style="">
                <div class="title"><a href="/member/personel/user_info?memberid=215380273&amp;jumpbrowser=1" target="_blank" class="btn_anchor_more" id="J_anchor_more"><font style="vertical-align: inherit;">More </font></a><span><font style="vertical-align: inherit;">anchor updates</font></span></div>
                <div class="img">
                    <div class="history on" style="display: block;">
                        <div class="s_live"></div>
                        <a href="0qNKVagawK9ZKbAx02ec.html?p_from=pRoom.AnchorReplay">
                        <div class="mark"></div>
                        <img src="/main/alcdn.img.xiaoka.tv/20190531/3a1/ff7/215380273/3a1ff7b3f60c972e6e7f9c5976462eb5.jpg%401e_1c_0o_0l_60h_60w_95q_1pr.png" alt="I haven't seen you for a long time, I miss you very much.  Live broadcast, not coming yet?"></a>
                        <div class="starttime"><font style="vertical-align: inherit;">3 hours ago</font></div>
                    </div>
                </div>
            </div>
            <div class="anchor_true_love_group clearfix" id="anchor_true_love_group"></div>
                <div class="resize" id="J_resize" style="height: auto; min-height: 0px; bottom: 445px;">
                <ul class="tit J_tog_1" data-tog="#J_tog_1">
                    <li class="x_first on x_noble" style="align:center">
                        <font style="vertical-align: inherit;">Gift_History</font>
                    </li>                   
                </ul>
                <div id="J_tog_1">                  
                    <ul class="rank_1 J_scroll" id="J_normal_rank" tabindex="2" style="overflow: auto; outline: none;">  
                    </ul>
                    <ul class="rank_1 J_scroll rank_2" id="J_rank_2" tabindex="3" style="overflow: hidden; outline: none; display: none;"></ul>
                        <div id="ascrail2000" class="nicescroll-rails nicescroll-rails-vr" style="width: 5px; z-index: 1010; cursor: default; position: absolute; top: -210.438px; left: -65.5px; height: 8px; display: none; opacity: 0;"><div class="nicescroll-cursors" style="position: relative; top: 0px; float: right; width: 3px; height: 0px; background-color: rgb(148, 144, 156); border: 1px solid rgb(148, 144, 156); background-clip: padding-box; border-radius: 5px;"></div></div><div id="ascrail2000-hr" class="nicescroll-rails nicescroll-rails-hr" style="height: 5px; z-index: 1010; top: -207.438px; left: -60.5px; position: absolute; cursor: default; display: none; opacity: 0;"><div class="nicescroll-cursors" style="position: absolute; top: 0px; height: 3px; width: 0px; background-color: rgb(148, 144, 156); border: 1px solid rgb(148, 144, 156); background-clip: padding-box; border-radius: 5px; left: 0px;"></div></div><div id="ascrail2001" class="nicescroll-rails nicescroll-rails-vr" style="width: 5px; z-index: 1010; cursor: default; position: absolute; top: 0px; left: 323px; height: 8px; display: none; opacity: 0;"><div class="nicescroll-cursors" style="position: relative; top: 0px; float: right; width: 3px; height: 0px; background-color: rgb(148, 144, 156); border: 1px solid rgb(148, 144, 156); background-clip: padding-box; border-radius: 5px;"></div></div><div id="ascrail2001-hr" class="nicescroll-rails nicescroll-rails-hr" style="height: 5px; z-index: 1010; top: 3px; left: 0px; position: absolute; cursor: default; display: none; opacity: 0;"><div class="nicescroll-cursors" style="position: absolute; top: 0px; height: 3px; width: 0px; background-color: rgb(148, 144, 156); border: 1px solid rgb(148, 144, 156); background-clip: padding-box; border-radius: 5px; left: 0px;"></div></div><div id="ascrail2002" class="nicescroll-rails nicescroll-rails-vr" style="width: 5px; z-index: 1010; cursor: default; position: absolute; top: 0px; left: 323px; height: 210px; display: none; opacity: 0;"><div class="nicescroll-cursors" style="position: relative; top: 0px; float: right; width: 3px; height: 37px; background-color: rgb(148, 144, 156); border: 1px solid rgb(148, 144, 156); background-clip: padding-box; border-radius: 5px;"></div></div><div id="ascrail2002-hr" class="nicescroll-rails nicescroll-rails-hr" style="height: 5px; z-index: 1010; top: 205px; left: 0px; position: absolute; cursor: default; display: none; width: 323px; opacity: 0;"><div class="nicescroll-cursors" style="position: absolute; top: 0px; height: 3px; width: 328px; background-color: rgb(148, 144, 156); border: 1px solid rgb(148, 144, 156); background-clip: padding-box; border-radius: 5px;"></div></div><div id="ascrail2003" class="nicescroll-rails nicescroll-rails-vr" style="width: 5px; z-index: 1010; cursor: default; position: absolute; top: -210.438px; left: -65.5px; height: 8px; display: none;"><div class="nicescroll-cursors" style="position: relative; top: 0px; float: right; width: 3px; height: 0px; background-color: rgb(148, 144, 156); border: 1px solid rgb(148, 144, 156); background-clip: padding-box; border-radius: 5px;"></div></div><div id="ascrail2003-hr" class="nicescroll-rails nicescroll-rails-hr" style="height: 5px; z-index: 1010; top: -207.438px; left: -60.5px; position: absolute; cursor: default; display: none;"><div class="nicescroll-cursors" style="position: absolute; top: 0px; height: 3px; width: 0px; background-color: rgb(148, 144, 156); border: 1px solid rgb(148, 144, 156); background-clip: padding-box; border-radius: 5px;"></div></div></div>
                            <!-- <div class="drag iconfont" id="J_drag_b"></div> -->
                        </div>
                    <div class="gift_his J_scroll" tabindex="4" style="top: 200px; height: auto; overflow: auto; outline: none;">
                    <ul id="J_gift_his"></ul>
            </div>
            <div id="ascrail2004" class="nicescroll-rails nicescroll-rails-vr" style="width: 5px; z-index: auto; cursor: default; position: absolute; top: 382px; left: 324px; height: 478px; display: none; opacity: 0;"><div class="nicescroll-cursors" style="position: relative; top: 0px; float: right; width: 3px; height: 0px; background-color: rgb(148, 144, 156); border: 1px solid rgb(148, 144, 156); background-clip: padding-box; border-radius: 5px;"></div></div><div id="ascrail2004-hr" class="nicescroll-rails nicescroll-rails-hr" style="height: 5px; z-index: auto; top: 855px; left: 1px; position: absolute; cursor: default; display: none; opacity: 0;"><div class="nicescroll-cursors" style="position: absolute; top: 0px; height: 3px; width: 0px; background-color: rgb(148, 144, 156); border: 1px solid rgb(148, 144, 156); background-clip: padding-box; border-radius: 5px; left: 0px;"></div></div></div><!-- .w330 -->
        <div class="w400" id="J_w400" style="overflow: hidden;left: 330px;">
            <div class="content flash" id="J_flash" style="margin-left: 0px; background-color: black; display:inline-block" width="100% ">
            <div id = "video_container">    
                <div>
                    <iframe src="//iframe.dacast.com/b/131291/c/501587" width="800" height="500" style="margin-top: 69px"frameborder="0" scrolling="no" allow="autoplay" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>
                </div>
            </div>
                <div class="contain">  
                    <div class="row">
                        <div class="row__inner">
                        @if($channels)
                            @foreach($channels as $channel)
                            <div class="tile"  data-channel="{{ $channel->id }}">
                                <div class="tile__media">
                                    <img class="tile__img" src="/upload/{{ $channel->publisher->first()->avartar1 }}" alt=""  />
                                </div>
                                <div class="tile__details">
                                    <div class="tile__title">
                                        {{ $channel->name }}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="cover" id="J_cover">
                <div class="enter_effect" id="J_enter_effect"></div>
                <div class="topicon">
                    <span class="J_anchorid"><font style="vertical-align: inherit;">A live broadcast: 215380273</font></span>
                    <div class="date" id="J_anchorstartdate"><font style="vertical-align: inherit;">{{ \Carbon\Carbon::now('Asia/Hong_Kong')->format('Y-m-d') }}</font></div>
                </div>
                    <div class="topicon left_top" id="J_maxonline"><span class="J_maxonline"><font style="vertical-align: inherit;">14916 heat</font></span></div><!-- ///.goldcoin -->
                    <div class="giftlist" id="J_continue_gift_1">
                    <div class="gift userlevel_1 hide" id="gu_gid_uid"></div>
                    <div class="gift userlevel_2 hide" sid="gu_gid_uid"></div>
                    <div class="gift_normal" id="J_gift_normal">
                        <div class="effect hide"></div>
                        <div class="effect  hide"></div>
                        <div class="effect  hide"></div>
                        <div class="effect  hide"></div>
                    </div>
                </div><!-- .giftlist -->
                <div class="luxury hide" id="J_luxury"></div><!-- .luxury -->
                <div id="giftpendant" class="giftpendant"></div>
            </div>           
            <!-- .register_guide -->
        <div class="disable"></div>
        </div><!-- .w400 -->
        <div class="w360">
            <div id="J_welcome_1"></div>
            <div id="J_welcome_2"></div>
            <div id="system_message" class="system_message"></div>
            <div class="msglist " id="J_msglist" tabindex="5" style="overflow: auto; outline: none; bottom: 0px;">
                <div class="force-overflow"></div>
                <div class="msg_3">{{ \Carbon\Carbon::now('Asia/Hong_Kong')->format('H:m') }}</div>
                <div class="msg_1 J_u_card peerage " data-memberid="114424014">
                    <div class="avatar">
                        <img src="https://alcdn.img.xiaoka.tv/20190611/bfa/c77/114424014/bfac77f450ec3c9d67380a96b6f00fe4.jpg@1e_1c_0o_0l_140h_140w_100q_1pr.png">
                    </div>
                    <div class="info">
                        <div class="clearfix">
                            <span class="gui noble4 fl"></span>
                            <span class="level_28 x_level fl"></span>
                            <div class="group fl"><i class="i_1">11</i><i class="i_2">CHA</i></div>
                            <span class="nickname fl ">颜Sukii🍓</span>
                        </div>
                        <div class="content">@holiday__ 你家人多</div>
                    </div>
                </div>
                <div class="msg_1 J_u_card  " data-memberid="369931025">
                    <div class="avatar">
                        <img src="https://alcdn.img.xiaoka.tv/20181205/9e3/e88/369931025/9e3e88b04847d04ac613fca1937547e9.jpg@1e_1c_0o_0l_140h_140w_100q_1pr.png">
                    </div>
                    <div class="info">
                        <div class="clearfix">
                            <span class="level_9 x_level fl"></span>
                                <div class="group fl">
                                    <i class="i_1">1</i>
                                    <i class="i_2">Mingo</i>
                                </div>
                            <span class="nickname fl ">😂金子</span>
                        </div>
                        <div class="content">来了</div>
                    </div>
                </div>
                <div class="msg_2 msg_2_1">
                    <span class="nickname level_left"><span class="level_16 level J_u_card" data-memberid="36020118"> </span>南青🍃</span> 进入直播间
                </div>
                <div class="msg_2 msg_2_1">
                    <span class="nickname level_left"><span class="level_11 level J_u_card" data-memberid="363519927"> </span>holiday__</span> 进入直播间
                </div>
                <div class="msg_2 msg_2_1"> <span class="nickname level_left"><span class="level_7 level J_u_card" data-memberid="342891307"> </span>ʚ小猴子ɞ🐒</span> 进入直播间</div>
                <div class="msg_1 J_u_card  " data-memberid="369931025">
                    <div class="avatar">
                        <img src="https://alcdn.img.xiaoka.tv/20181205/9e3/e88/369931025/9e3e88b04847d04ac613fca1937547e9.jpg@1e_1c_0o_0l_140h_140w_100q_1pr.png">
                    </div>
                    <div class="info">
                        <div class="clearfix">
                            <span class="level_9 x_level fl"></span>
                            <div class="group fl">
                                <i class="i_1">1</i>
                                <i class="i_2">Mingo</i>
                            </div>
                            <span class="nickname fl ">😂金子</span>
                        </div>
                        <div class="content">帅的</div>
                    </div>
                </div>
                <div class="msg_2 msg_2_1">
                    <span class="nickname level_left"><span class="level_16 level J_u_card" data-memberid="36020118"> </span>南青🍃</span> 进入直播间
                </div>
                <div class="msg_2 msg_2_1">
                    <span class="nickname level_left"><span class="level_11 level J_u_card" data-memberid="363519927"> </span>holiday__</span> 进入直播间
                </div>
                <div class="msg_2 msg_2_1"> <span class="nickname level_left"><span class="level_7 level J_u_card" data-memberid="342891307"> </span>ʚ小猴子ɞ🐒</span> 进入直播间</div>
                <div class="msg_1 J_u_card  " data-memberid="369931025">
                    <div class="avatar">
                        <img src="https://alcdn.img.xiaoka.tv/20181205/9e3/e88/369931025/9e3e88b04847d04ac613fca1937547e9.jpg@1e_1c_0o_0l_140h_140w_100q_1pr.png">
                    </div>
                    <div class="info">
                        <div class="clearfix">
                            <span class="level_9 x_level fl"></span>
                            <div class="group fl">
                                <i class="i_1">1</i>
                                <i class="i_2">Mingo</i>
                            </div>
                            <span class="nickname fl ">😂金子</span>
                        </div>
                        <div class="content">帅的</div>
                    </div>
                </div>
                <div class="msg_2 msg_2_1">
                    <span class="nickname level_left"><span class="level_16 level J_u_card" data-memberid="36020118"> </span>南青🍃</span> 进入直播间
                </div>
                <div class="msg_2 msg_2_1">
                    <span class="nickname level_left"><span class="level_11 level J_u_card" data-memberid="363519927"> </span>holiday__</span> 进入直播间
                </div>
                <div class="msg_2 msg_2_1"> <span class="nickname level_left"><span class="level_7 level J_u_card" data-memberid="342891307"> </span>ʚ小猴子ɞ🐒</span> 进入直播间</div>
                <div class="msg_1 J_u_card  " data-memberid="369931025">
                    <div class="avatar">
                        <img src="https://alcdn.img.xiaoka.tv/20181205/9e3/e88/369931025/9e3e88b04847d04ac613fca1937547e9.jpg@1e_1c_0o_0l_140h_140w_100q_1pr.png">
                    </div>
                    <div class="info">
                        <div class="clearfix">
                            <span class="level_9 x_level fl"></span>
                            <div class="group fl">
                                <i class="i_1">1</i>
                                <i class="i_2">Mingo</i>
                            </div>
                            <span class="nickname fl ">😂金子</span>
                        </div>
                        <div class="content">帅的</div>
                    </div>
                </div>
            </div>
            <input type="text" value="{{ $my_channel->id }}" id="channel_id" style="display:none" >           
        <div id="ascrail2005" class="nicescroll-rails nicescroll-rails-vr" style="width: 5px; z-index: 1100; cursor: default; position: absolute; top: 6px; left: 354px; height: 584px; display: none; opacity: 0;"><div class="nicescroll-cursors" style="position: relative; top: 0px; float: right; width: 3px; height: 0px; background-color: rgb(148, 144, 156); border: 1px solid rgb(148, 144, 156); background-clip: padding-box; border-radius: 5px;"></div></div><div id="ascrail2005-hr" class="nicescroll-rails nicescroll-rails-hr" style="height: 5px; z-index: 1100; top: 585px; left: 1px; position: absolute; cursor: default; display: none; opacity: 0;"><div class="nicescroll-cursors" style="position: absolute; top: 0px; height: 3px; width: 0px; background-color: rgb(148, 144, 156); border: 1px solid rgb(148, 144, 156); background-clip: padding-box; border-radius: 5px; left: 0px;"></div></div></div><!-- .w360 -->
    </div>
    <div style="width: 1000px; height:540px;"></div>

<script type="text/javascript" src="/js/jquery.min.js"></script>
<script>
var add_channel_id = '-1';
$(document).ready(function(){
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
  sendRequest_Comment();
  function sendRequest_Comment(){
      $.ajax({
            type: "GET",
            url: "/publisher/comment_get",
            success: 
            function(res){
                //alert(res);
                data = JSON.parse(res); 
                if(data.status == 'error'){
                    alert(data.content);
                    window.location.href = '/publisher/login';
                }
                var content = data.content;                
                for(i=0;i<content.length;i++){
                    var element ='<div class="msg_1 J_u_card  " data-memberid="369931025">' +
                        '<div class="avatar">' +
                            '<img src="https://alcdn.img.xiaoka.tv/20181205/9e3/e88/369931025/9e3e88b04847d04ac613fca1937547e9.jpg@1e_1c_0o_0l_140h_140w_100q_1pr.png">' +
                        '</div>' +
                        '<div class="info">' +
                            '<div class="clearfix">' +
                            '<span class="level_9 x_level fl"></span>' +
                                '<div class="group fl">' +
                                    '<i class="i_1">1</i>' +
                                    '<i class="i_2">Mingo</i>' +
                                '</div>' +
                                '<span class="nickname fl ">😂金子</span>' +
                            '</div>' +
                            '<div class="content">'+ content[i].message +'</div>' +
                        '</div>' +
                    '</div>';
                    $('#J_msglist').append(element); 
                    $('#J_msglist').animate({scrollTop: $('#J_msglist')[0].scrollHeight}, "slow");

                };
                    setTimeout(function(){
                        sendRequest_Comment();
                    }, 3000);
        }
      
    });
  };
  sendRequest_Gift();
  function sendRequest_Gift(){
      $.ajax({
            type: "GET",
            url: "/publisher/gift_get",
            success: 
            function(res){
                //alert(res);
                data = JSON.parse(res); 
                if(data.status == 'error'){
                    alert(data.content);
                    window.location.href = '/publisher/login';
                }
                var content = data.content;   
                for(i=0;i<content.length;i++){
                   //alert(content[i]);
                    var element ='<div class="msg_1 J_u_card  " data-memberid="369931025">' +
                    '<div class="avatar">' +
                        '<img src="'+ content[i].motion_file +'">' +
                    '</div>' +
                    '<div class="info">' +
                        '<div class="clearfix">' +
                           '<span class="level_9 x_level fl"></span>' +
                            '<div class="group fl">' +
                                '<i class="i_1">1</i>' +
                                '<i class="i_2">Mingo</i>' +
                            '</div>' +
                            '<span class="nickname fl ">😂金子</span>' +
                        '</div>' +
                        '<div class="content">'+ content[i].name +'</div>' +
                    '</div>' +
                '</div>';
                    $('#J_gift_his').append(element);
                    $('.gift_his').animate({scrollTop: $('.gift_his')[0].scrollHeight}, "slow");

                };
                    setTimeout(function(){
                        sendRequest_Gift();
                    }, 3000);
        }
      
    });
  };
  $('.tile').click(function(){
    $('.tile').css("border","");
    add_channel_id = $(this).attr('data-channel');
    $( this ).css("border", "2px solid red");    
  });
  $('.J_my_noble').click(function(){
    var channel_id = $('#channel_id').val();
    var status = add_channel_id;
    
    $.post('/publisher/set_change',
            {   
                channel_id : channel_id,
                status : status
            },
            function(res){
                console.log(res);
                data = JSON.parse(res);
                if(data.status == 'error'){
                    alert(data.content);
                }else{
                    $('#video_container').html('');
                    $('#video_container').html('<table style="margin-top: 234px;margin-bottom: 82px;"> <tr> <td><div style="float:left"> <iframe src="//iframe.dacast.com/'+ data.channel1 +'" width="400" height="250" frameborder="0" scrolling="no" allow="autoplay" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe></div>'
                    +        '</td> <td><div style="float:left"> <iframe src="//iframe.dacast.com/'+ data.channel2 +'" width="400" height="250" frameborder="0" scrolling="no" allow="autoplay" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe></div></td>   </tr></table>'
                    ); 
                }
                     
            });
      
   
  });

  $('#live_one').click(function(){
    var channel_id = $('#channel_id').val();
    var status = '1';    
    $.post('/publisher/set_change_org',
            {   
                channel_id : channel_id,
                status : status
            },
            function(res1){
                //alert(res);
                data1 = JSON.parse(res1); 
                $('#video_container').html('');
                $('#video_container').html('<div style="float:left"> <iframe src="//iframe.dacast.com/'+ data1.channel1 +'" width="800" height="500"  style="margin-top: 68px" frameborder="0" scrolling="no" allow="autoplay" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe></div>');       
            });
    
  })
});
</script>
</body>
</html>
