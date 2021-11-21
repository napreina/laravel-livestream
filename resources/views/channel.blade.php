<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <title>潘潘💋-一直播</title>
    <meta name="Description" content="潘潘💋,XX潘潘,好久不见，甚是想念。直播进行中，还不快来？"/>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />    
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" /> 
    <link type="text/css" rel="stylesheet" href="/main/static.yizhibo.com/pc_live/static/com_css/comcss_9c0dd5a.css" />
    <link type="text/css" rel="stylesheet" href="/main/static.yizhibo.com/pc_live/pkg/live.html_aio_0637bf0.css" />
    <link rel="stylesheet" href="/css/jquery.modal.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.css">
    <script src="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="/js/jquery.modal.min.js"></script>

  
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
    </style>
</head>
<body class="room ">    
   <div class="left_bar" id="J_left_bar" style="display: block;"><div class="logo"><a href="{{url('/')}}"></a></div>
   <div class="avatar J_layerlogin">
        <a href="/profile/index"><img src="//static.yizhibo.com/pc_live/static/img/no_pic.png" id="J_my_avatar"></a>
   </div>
   <div class="top">
        <div class="recharge J_recharge J_p_from" >
            <div><a href="/pay/index"><font style="vertical-align: inherit;">充值</font></a></div>
        </div>
        <a href="/auth/login" class="J_layerlogin">
            <div>
                <font style="vertical-align: inherit;">登录 </font>
                <span><font style="vertical-align: inherit;">登录</font></span>
            </div>
        </a>
        <a href="/auth/register" class="J_layerreg">
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
        <a href="#" class="J_my_noble J_p_from">
            <div>
                <font style="vertical-align: inherit;">任务 </font>
                <span><font style="vertical-align: inherit;">任务</font></span>
            </div>
        </a>  
    </div>
    <div class="bot iconfont">
        <div id="J_report">
            <div>
                <font style="vertical-align: inherit;"> </font>
                <span><a href="#ex1" rel="modal:open"><font style="vertical-align: inherit;">举报</font></a></span>
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
                        @if($channel)
                            <img src="/upload/default.png" alt="">
                        @else
                            <img src="/upload/default.png" alt="">
                        @endif
                    </a>
                    <div class="authentication"></div>
               </div>
                <div class="info">
                    <div class="nickname level_right">
                        <a href="/main/member/personel/user_info5d3b.html?memberid=215380273&amp;jumpbrowser=1" target="_blank" weibo_openid="6395135882">
                            <font style="vertical-align: inherit;"> {{ $channel->publisher->first()->name }} </font>
                        </a>
                        <div class="level_{{ $channel->publisher->first()->rating }} level"> </div>
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
                    <div id="J_gift_his"></div>
                    </div>
                    <div id="ascrail2004" class="nicescroll-rails nicescroll-rails-vr" style="width: 5px; z-index: auto; cursor: default; position: absolute; top: 382px; left: 324px; height: 478px; display: none; opacity: 0;">
                        <div class="nicescroll-cursors" style="position: relative; top: 0px; float: right; width: 3px; height: 0px; background-color: rgb(148, 144, 156); border: 1px solid rgb(148, 144, 156); background-clip: padding-box; border-radius: 5px;">
                        </div>
                    </div>
                    <div id="ascrail2004-hr" class="nicescroll-rails nicescroll-rails-hr" style="height: 5px; z-index: auto; top: 855px; left: 1px; position: absolute; cursor: default; display: none; opacity: 0;">
                        <div class="nicescroll-cursors" style="position: absolute; top: 0px; height: 3px; width: 0px; background-color: rgb(148, 144, 156); border: 1px solid rgb(148, 144, 156); background-clip: padding-box; border-radius: 5px; left: 0px;">
                        </div>
                    </div>
            </div><!-- .w330 -->
        <div class="w400" id="J_w400"  style="overflow: hidden;left: 330px;">
            <div class="content flash" id="J_flash" style="margin-left: 0px;">
              <iframe src="https://dist.bambuser.net/player/?resourceUri=https%3A%2F%2Fcdn.bambuser.net%2Fgroups%2F80820%2Fbroadcasts%3Fby_authors%3D%26title_contains%3D%26has_any_tags%3D%26has_all_tags%3D%26da_id%3D71001d38-983c-50b9-656c-ed7358aa3a55%26da_timestamp%3D1562427410%26da_signature_method%3DHMAC-SHA256%26da_ttl%3D0%26da_static%3D1%26da_signature%3D3f93bc5229b7cb860c617657a41d46bd25d55eba61dcdff443cadf1d60dc1e7b" style="border: none;width: 100%;height: 100%" allowfullscreen></iframe>
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
            <div id="giftpendant" class="giftpendant"></div></div>
            <div class="anchorinfo anchorinfo_top" style="display: none;"><div class="avatar J_u_card" data-memberid="215380273"><a href="/member/personel/user_info?memberid=215380273&amp;jumpbrowser=1" target="_blank" weibo_openid=""><img src="https://alcdn.img.xiaoka.tv/20190520/644/2cd/215380273/6442cd4c663663715387e6457b89f4d4.jpg@1e_1c_0o_0l_96h_96w_100q_1pr.png" alt=""></a> <div class="authentication"></div> </div> <div class="info"> <div class="nickname level_right"><a href="/member/personel/user_info?memberid=215380273&amp;jumpbrowser=1" target="_blank" weibo_openid=""><font style="vertical-align: inherit;">Pan Panzhen</font></a> <div class="level_17 level"> </div> </div>  <div class="id"><font style="vertical-align: inherit;">Gold Coins: </font><span class="J_goldcoin"><font style="vertical-align: inherit;">990,000</font></span></div> <!-- <br/><span>认证:undefined</span><span>观众: <em class="J_maxonline">1</em></span><span class="J_goldcoin">金币:0</span> --> </div>  <div class="follow J_follow" mid="215380273" data-fancount="10.4万"></div>  </div>
            <!-- <div class="contrl" id="J_contrl" style="width: 100%; background-color: rgba(0, 0, 0, 0.6);">
            <div class="mark">
                <div class="process"></div>
                <div class="time"><span><font style="vertical-align: inherit;">00:00</font></span></div>
                <div class="vol">
                    <div class="mark">
                        <div class="pro">
                            <div class="cur"><button></button>
                        </div>
                    </div>
                </div>
            </div>
            <button class="play pause"></button></div>
                <a class="change" href="/main/live/h5api/change_one04b1.html?p_from=pRoom.Change"><font style="vertical-align: inherit;">Change one</font></a>
                <div class="lock" id="J_lock"></div><div class="praise" id="J_praise"></div>
            </div> -->
            <!-- .register_guide -->
        <div class="disable"></div></div><!-- .w400 -->
        <div class="w360">
            <div id="J_welcome_1"></div>
            <div id="J_welcome_2"></div>
            <div id="system_message" class="system_message"></div>
            <div class="msglist " id="J_msglist" tabindex="5" style="overflow: auto; outline: none;">
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
            <div class="msgform" id="J_msgform">
                <div class="danmu on" id="J_send_danmu">
                    <div class="tip" style="display: none;"></div>
                </div>
                <input type="text" class="text" maxlength="30" id="comment" placeholder="快和主播聊聊天吧~">
                <input type="button" class="send" value="发送" id="comment_send">
                <input type="text" value="{{ $channel->id }}" id="channel_id" style="display:none" >
                <!-- <form action="#"></form> -->
            </div>
            <div class="gift" id="J_giftaction">
                <div class="gift_btn">
                    <div class="move_box"></div> 
                    <div class="tab_box">
                        <p data-value="1" class="tab tabon"><font style="vertical-align: inherit;">礼物</font></p>
                        <p data-value="2" class="tab"><font style="vertical-align: inherit;">道具卡</font></p>
                    </div>
                </div>
                <div class="gift_window">
                    <div class="window">
                        <div class="btn left"></div>
                        <div class="giftlist">
                            <div class="gift_move" style="left: -420px;">
                                <div class="mark">
                                     <div>
                                        <span src="/images/1.png"  data-giftid="1" data-goldcoin="10" data-name="涩会粽" data-number="66,520,888,1314" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="" data-isforbbiden="0">
                                            <img class="img" src="/images/1.png" alt="" data-giftid="1" data-goldcoin="10" data-name="涩会粽" data-number="66,520,888,1314" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips=""> 
                                            <div class="isbursts"></div>
                                        </span> 
                                        <span src="/images/2.png"  data-giftid="2" data-goldcoin="33440" data-name="陪你看星星" data-number="6,12,16" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="" data-isforbbiden="0">
                                            <img class="img" src="/images/2.png" alt="" data-giftid="2" data-goldcoin="33440" data-name="陪你看星星" data-number="6,12,16" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="">
                                            <div class="isbursts"></div>
                                        </span>
                                        <span src="/images/3.png" class="" data-giftid="223173" data-goldcoin="10" data-name="撩一下" data-number="66,520,1314" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="" data-isforbbiden="0">
                                            <img class="img" src="/images/3.png" alt="" data-giftid="3" data-goldcoin="10" data-name="撩一下" data-number="66,520,1314" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="">
                                        </span>
                                        <span src="/images/4.png" class="" data-giftid="222470" data-goldcoin="13140" data-name="钻戒" data-number="12,36,52" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="" data-isforbbiden="0">
                                            <img class="img" src="/images/4.png" alt="" data-giftid="4" data-goldcoin="13140" data-name="钻戒" data-number="12,36,52" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="">
                                            <div class="isbursts"></div>
                                        </span> 
                                        <span src="/images/5.png" class="" data-giftid="223628" data-goldcoin="9900" data-name="烈焰战车" data-number="12,36,52" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="" data-isforbbiden="0">
                                            <img class="img" src="/images/5.png" alt="" data-giftid="5" data-goldcoin="9900" data-name="烈焰战车" data-number="12,36,52" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="">
                                        </span>
                                        <span src="/images/6" class="" data-giftid="223629" data-goldcoin="19900" data-name="音速超跑" data-number="12,36,52" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="" data-isforbbiden="0">
                                            <img class="img" src="/images/6.png" alt="" data-giftid="6" data-goldcoin="19900" data-name="音速超跑" data-number="12,36,52" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="">
                                        </span>
                                        <span src="/images/7.png" class="" data-giftid="223630" data-goldcoin="59900" data-name="限量布加迪" data-number="6,12,16" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="" data-isforbbiden="0">
                                            <img class="img" src="/images/7.png" alt="" data-giftid="7" data-goldcoin="59900" data-name="限量布加迪" data-number="6,12,16" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="">
                                        </span>
                                        <span src="/images/8.png" class="" data-giftid="223631" data-goldcoin="99900" data-name="午夜魅影" data-number="6,12,16" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="" data-isforbbiden="0">
                                            <img class="img" src="/images/8.png" alt="" data-giftid="8" data-goldcoin="99900" data-name="午夜魅影" data-number="6,12,16" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="">
                                        </span>
                                        <span src="/images/9.png" class="" data-giftid="222490" data-goldcoin="2000" data-name="放烟花咯" data-number="12,36,52" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="" data-isforbbiden="0">
                                            <img class="img" src="/images/9.png" alt="" data-giftid="9" data-goldcoin="2000" data-name="放烟花咯" data-number="12,36,52" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="">
                                            <div class="isbursts"></div>
                                        </span>
                                        <span src="/images/10.png" class="" data-giftid="222851" data-goldcoin="100000" data-name="一起看烟花" data-number="6,12,16" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="" data-isforbbiden="0">
                                            <img class="img" src="/images/10.png" alt="" data-giftid="10" data-goldcoin="100000" data-name="一起看烟花" data-number="6,12,16" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="">
                                            <div class="isbursts"></div>
                                        </span>
                                        <span src="/images/11.png" class="" data-giftid="222564" data-goldcoin="999900" data-name="太空漫游" data-number="3,6,9" data-isbursts="1" data-type="14" data-childtype="1" data-forbbidentips="" data-isforbbiden="0">
                                            <img class="img" src="/images/11.png" alt="" data-giftid="11" data-goldcoin="999900" data-name="太空漫游" data-number="3,6,9" data-isbursts="1" data-type="14" data-childtype="1" data-forbbidentips=""> 
                                        </span>
                                        <span src="/images/12.png" class="" data-giftid="1525" data-goldcoin="300000" data-name="青龙守护" data-number="3,6,9" data-isbursts="1" data-type="13" data-childtype="1" data-forbbidentips="" data-isforbbiden="0">
                                            <img class="img" src="/images/12.png" alt="" data-giftid="12" data-goldcoin="300000" data-name="青龙守护" data-number="3,6,9" data-isbursts="1" data-type="13" data-childtype="1" data-forbbidentips=""> 
                                        </span>
                                        <span src="/images/13.png" class="" data-giftid="222486" data-goldcoin="3000" data-name="生日蛋糕" data-number="12,36,52" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="" data-isforbbiden="0">
                                            <img class="img" src="/images/13.png" alt="" data-giftid="13" data-goldcoin="3000" data-name="生日蛋糕" data-number="12,36,52" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="">
                                            <div class="isbursts"></div> 
                                        </span>
                                        <span src="/images/14.png" class="" data-giftid="222469" data-goldcoin="52000" data-name="520" data-number="6,12,16" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="" data-isforbbiden="0">
                                            <img class="img" src="/images/14.png" alt="" data-giftid="14" data-goldcoin="52000" data-name="520" data-number="6,12,16" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="">
                                            <div class="isbursts"></div>
                                        </span>
                                        <span src="/images/15.png" class="" data-giftid="222481" data-goldcoin="8800" data-name="飞天招财猪" data-number="12,36,52" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="" data-isforbbiden="0">
                                            <img class="img" src="/images/15.png" alt="" data-giftid="15" data-goldcoin="8800" data-name="飞天招财猪" data-number="12,36,52" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips=""> 
                                            <div class="isbursts"></div> 
                                        </span>
                                        <span src="/images/16.png" class="J_isForbbiden" data-giftid="1559" data-goldcoin="10000" data-name="真爱大炮" data-number="" data-isbursts="1" data-type="5" data-childtype="1" data-forbbidentips="成为主播真爱粉即可赠送真爱礼物哦" data-isforbbiden="1">
                                            <img class="img" src="/images/16.png" alt="" data-giftid="16" data-goldcoin="10000" data-name="真爱大炮" data-number="" data-isbursts="1" data-type="5" data-childtype="1" data-forbbidentips="成为主播真爱粉即可赠送真爱礼物哦">
                                        </span>
                                        <span src="/images/17.png" class="" data-giftid="222501" data-goldcoin="0" data-name="人气星星" data-number="66,520,888,1314" data-isbursts="1" data-type="4" data-childtype="1" data-forbbidentips="" data-isforbbiden="0">
                                            <img class="img" src="/images/17.png" alt="" data-giftid="17" data-goldcoin="0" data-name="人气星星" data-number="66,520,888,1314" data-isbursts="1" data-type="4" data-childtype="1" data-forbbidentips=""> 
                                            <div class="number" id="x_free_222501"><font style="vertical-align: inherit;">66,520,888,1314</font></div>
                                        </span>
                                        <span src="/images/18.png" class="J_isForbbiden" data-giftid="222506" data-goldcoin="8880" data-name="真爱大宝剑" data-number="" data-isbursts="1" data-type="5" data-childtype="1" data-forbbidentips="成为主播真爱粉即可赠送真爱礼物哦" data-isforbbiden="1">
                                            <img class="img" src="/images/18.png" alt="" data-giftid="18" data-goldcoin="8880" data-name="真爱大宝剑" data-number="" data-isbursts="1" data-type="5" data-childtype="1" data-forbbidentips="成为主播真爱粉即可赠送真爱礼物哦">
                                        </span>
                                        <span src="/images/19.png" class="" data-giftid="21" data-goldcoin="66600" data-name="法拉利漂移" data-number="6,12,16" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="" data-isforbbiden="0">
                                            <img class="img" src="/images/19.png" alt="" data-giftid="19" data-goldcoin="66600" data-name="法拉利漂移" data-number="6,12,16" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips=""> 
                                            <div class="isbursts"></div>
                                        </span>
                                        <span src="/images/20.png" class="" data-giftid="222852" data-goldcoin="520000" data-name="梦幻城堡" data-number="3,6,9" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="" data-isforbbiden="0">
                                            <img class="img" src="/images/20.png" alt="" data-giftid="20" data-goldcoin="520000" data-name="梦幻城堡" data-number="3,6,9" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="">
                                        </span>
                                    </div>
                                    <div>
                                        <span src="/images/21.png" class="" data-giftid="223583" data-goldcoin="131400" data-name="豪华游艇" data-number="3,6,9" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="" data-isforbbiden="0">
                                            <img class="img" src="/images/21.png" alt="" data-giftid="21" data-goldcoin="131400" data-name="豪华游艇" data-number="3,6,9" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="">
                                        </span> 
                                        <span src="/images/22.png" class="" data-giftid="223721" data-goldcoin="20000" data-name="梦里桃花" data-number="6,12,16" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="" data-isforbbiden="0">
                                            <img class="img" src="/images/22.png" alt="" data-giftid="22" data-goldcoin="20000" data-name="梦里桃花" data-number="6,12,16" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="">
                                        </span>
                                        <span src="/images/23.png" class="" data-giftid="223720" data-goldcoin="5210" data-name="爱神之箭" data-number="12,36,52" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="" data-isforbbiden="0">
                                            <img class="img" src="/images/23.png" alt="" data-giftid="23" data-goldcoin="5210" data-name="爱神之箭" data-number="12,36,52" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="">
                                        </span>
                                        <span src="/images/24.png" class="" data-giftid="223719" data-goldcoin="1800" data-name="春暖花开" data-number="12,36,80" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="" data-isforbbiden="0">
                                            <img class="img" src="/images/24.png" alt="" data-giftid="24" data-goldcoin="1800" data-name="春暖花开" data-number="12,36,80" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="">       </span>
                                        <span src="/images/25.png" class="" data-giftid="223718" data-goldcoin="660" data-name="要亲亲" data-number="52,520,1314" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="" data-isforbbiden="0">
                                            <img class="img" src="/images/25.png" alt="" data-giftid="25" data-goldcoin="660" data-name="要亲亲" data-number="52,520,1314" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="">       </span>
                                        <span src="/images/26.png" class="" data-giftid="223533" data-goldcoin="10000" data-name="爱心小火车" data-number="12,36,52" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="" data-isforbbiden="0"> 
                                            <img class="img" src="/images/26.png" alt="" data-giftid="26" data-goldcoin="10000" data-name="爱心小火车" data-number="12,36,52" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="">   <div class="isbursts"></div>   </span>
                                        <span src="/images/27.png" class="" data-giftid="223567" data-goldcoin="3000" data-name="怦然心动" data-number="12,36,52" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="" data-isforbbiden="0"> 
                                            <img class="img" src="/images/27.png" alt="" data-giftid="27" data-goldcoin="3000" data-name="怦然心动" data-number="12,36,52" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="">   <div class="isbursts"></div>   </span>
                                        <span src="/images/28.png" class="" data-giftid="223545" data-goldcoin="90" data-name="爱心灯牌" data-number="66,520,1314" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="" data-isforbbiden="0"> 
                                            <img class="img" src="/images/28.png" alt="" data-giftid="28" data-goldcoin="90" data-name="爱心灯牌" data-number="66,520,1314" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="">   <div class="isbursts"></div>   </span>
                                        <span src="/images/29.png" class="" data-giftid="223535" data-goldcoin="1000" data-name="LOVE" data-number="12,36,199" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="" data-isforbbiden="0"> 
                                            <img class="img" src="/images/29.png" alt="" data-giftid="29" data-goldcoin="1000" data-name="LOVE" data-number="12,36,199" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="">   <div class="isbursts"></div>   </span>
                                        <span src="/images/30.png" class="" data-giftid="223291" data-goldcoin="6880" data-name="浪漫单车" data-number="12,36,52" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="" data-isforbbiden="0"> 
                                            <img class="img" src="/images/30.png" alt="" data-giftid="30" data-goldcoin="6880" data-name="浪漫单车" data-number="12,36,52" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="">   <div class="isbursts"></div>   </span>
                                        <span src="/images/31.png" class="" data-giftid="223527" data-goldcoin="1000" data-name="玫瑰花" data-number="12,36,199" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="" data-isforbbiden="0"> 
                                            <img class="img" src="/images/31.png" alt="" data-giftid="31" data-goldcoin="1000" data-name="玫瑰花" data-number="12,36,199" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="">      </span> 
                                        <span src="/images/32.png" class="" data-giftid="223501" data-goldcoin="12800" data-name="拿去花吧" data-number="12,36,52" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="" data-isforbbiden="0"> 
                                            <img class="img" src="/images/32.png" alt="" data-giftid="32" data-goldcoin="12800" data-name="拿去花吧" data-number="12,36,52" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="">   <div class="isbursts"></div>   </span> 
                                        <span src="/images/33.png" class="" data-giftid="223258" data-goldcoin="92100" data-name="告白气球" data-number="6,12,16" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="" data-isforbbiden="0"> 
                                            <img class="img" src="/images/33.png" alt="" data-giftid="33" data-goldcoin="92100" data-name="告白气球" data-number="6,12,16" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="">
                                        </span>
                                        <span src="/images/34.png" class="" data-giftid="223257" data-goldcoin="39800" data-name="旋转木马" data-number="6,12,16" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="" data-isforbbiden="0"> 
                                            <img class="img" src="/images/34.png" alt="" data-giftid="34" data-goldcoin="39800" data-name="旋转木马" data-number="6,12,16" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="">    </span>  
                                        <span src="/images/35.png" class="" data-giftid="223256" data-goldcoin="19800" data-name="幸福摩天轮" data-number="12,36,52" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="" data-isforbbiden="0"> 
                                            <img class="img" src="/images/35.png" alt="" data-giftid="35" data-goldcoin="19800" data-name="幸福摩天轮" data-number="12,36,52" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="">     </span>  
                                        <span src="/images/36.png" class="" data-giftid="223255" data-goldcoin="9800" data-name="浪漫花车" data-number="12,36,52" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="" data-isforbbiden="0"> 
                                            <img class="img" src="/images/36.png" alt="" data-giftid="36" data-goldcoin="9800" data-name="浪漫花车" data-number="12,36,52" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="">      </span>  
                                        <span src="/images/37.png" class="" data-giftid="223058" data-goldcoin="210000" data-name="童话小镇" data-number="3,6,9" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="" data-isforbbiden="0"> 
                                            <img class="img" src="/images/37.png" alt="" data-giftid="37" data-goldcoin="210000" data-name="童话小镇" data-number="3,6,9" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="">   <div class="isbursts"></div>   </span>  
                                        <span src="/images/38.png" class="" data-giftid="223057" data-goldcoin="92100" data-name="天空之城" data-number="6,12,16" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="" data-isforbbiden="0"> 
                                            <img class="img" src="/images/38.png" alt="" data-giftid="38" data-goldcoin="92100" data-name="天空之城" data-number="6,12,16" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="">   <div class="isbursts"></div>   </span>  
                                        <span src="/images/39.png" class="" data-giftid="223056" data-goldcoin="50000" data-name="魔法集市" data-number="6,12,16" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="" data-isforbbiden="0"> 
                                            <img class="img" src="/images/39.png" alt="" data-giftid="39" data-goldcoin="50000" data-name="魔法集市" data-number="6,12,16" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="">   <div class="isbursts"></div>   </span>  
                                        <span src="/images/40.png" class="" data-giftid="222475" data-goldcoin="10000" data-name="兰博基尼超跑" data-number="4,36,52" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="" data-isforbbiden="0"> 
                                            <img class="img" src="/images/40.png" alt="" data-giftid="40" data-goldcoin="10000" data-name="兰博基尼超跑" data-number="4,36,52" data-isbursts="1" data-type="0" data-childtype="1" data-forbbidentips="">      </span>  </div></div>

                                <div class="itemcard" style="display: none;"></div>
                            </div>
                        </div>
                        <div class="btn right"></div>
                        <div class="half_mark"></div>
                    </div>
                </div>
                <div class="giftform" id="J_gift_form">
                    <div class="coin">
                    <font style="vertical-align: inherit;">Gold Coins: </font><span id="J_mygoldcoin"><span class="J_layerlogin"><font style="vertical-align: inherit;">0</font></span></span>
                    </div>
                    <a href="/pay/index" target="_self" class="recharge J_recharge"><font style="vertical-align: inherit;">Recharge</font></a>
                    <div class="form">
                        <span><font style="vertical-align: inherit;">Quantity</font></span><input type="text" class="text" value="1" id="J_gift_num">
                        <button class="btn" id="J_send_gift"><font style="vertical-align: inherit;">Gift</font></button>
                    </div>
                </div>
            </div>
        <div id="ascrail2005" class="nicescroll-rails nicescroll-rails-vr" style="width: 5px; z-index: 1100; cursor: default; position: absolute; top: 6px; left: 354px; height: 584px; display: none; opacity: 0;"><div class="nicescroll-cursors" style="position: relative; top: 0px; float: right; width: 3px; height: 0px; background-color: rgb(148, 144, 156); border: 1px solid rgb(148, 144, 156); background-clip: padding-box; border-radius: 5px;"></div></div><div id="ascrail2005-hr" class="nicescroll-rails nicescroll-rails-hr" style="height: 5px; z-index: 1100; top: 585px; left: 1px; position: absolute; cursor: default; display: none; opacity: 0;"><div class="nicescroll-cursors" style="position: absolute; top: 0px; height: 3px; width: 0px; background-color: rgb(148, 144, 156); border: 1px solid rgb(148, 144, 156); background-clip: padding-box; border-radius: 5px; left: 0px;"></div></div></div><!-- .w360 -->
    </div>
    <div style="width: 1000px; height:540px;"></div>
<div id="ex1" class="modal">
    <ul> 
        <li><input type="radio" name="report" value="色情违规直播" >色情违规直播</li>
        <li><input type="radio" name="report" value="政治敏感直播">政治敏感直播</li>
        <li><input type="radio" name="report" value="直播诈骗垃圾信息">直播诈骗垃圾信息</li>
    </ul>
    <div class="btn" id="report_send"><a href="#" rel="modal:close"><button>提交</button></a></div>
</div>
<script type="text/javascript" src="/js/jquery.min.js"></script>

<script>
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#comment_send').click(function(){        
        var comment = $('#comment').val();
        var channel_id = $('#channel_id').val();
       if(comment ==""){
           alert('请输入内容。');
           return false;
       }       
          $.post('/comment/store',
            {   
                channel_id : channel_id,
                comment : comment
            },
            function(res){
               // alert(res);
                data = JSON.parse(res); 
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
                        '<div class="content">'+ data.message +'</div>' +
                    '</div>' +
                '</div>';
                $('#J_msglist').append(element);
                $('#J_msglist').animate({scrollTop: $('#J_msglist')[0].scrollHeight}, "slow");
                $('#comment').val("");          
            });
        });
</script>

<script>
var gift_id=-1;
var channel_status= 'unchanged';
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
            url: "/comment/get",
            success: 
            function(res){
                //alert(res);
                data = JSON.parse(res); 
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
            url: "/gift/get",
            success: 
            function(res){
                //alert(res);
                data = JSON.parse(res); 
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

  sendRequest_Channel();
  function sendRequest_Channel(){
      $.ajax({
            type: "GET",
            url: "/channel/get_change",
            success: 
            function(res){
                console.log(res);
                
                data = JSON.parse(res);
                //alert(channel_status);
                //alert(data.content);
                if(data.status != channel_status ){
                    if(data.status == 'unchanged'){
                        $('#J_flash').html('');
                        $('#J_flash').html('<div style="float:left"> <iframe src="//iframe.dacast.com/'+data.channel1+'" width="800" height="500"  style="margin-top: 120px" frameborder="0" scrolling="no" allow="autoplay" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe></div>');       
                        channel_status = 'unchanged';
                    }else{
                        $('#J_flash').html('');
                        $('#J_flash').html('<table style="margin-top: 234px;"> <tr> <td><div style="float:left"> <iframe src="//iframe.dacast.com/'+data.channel1+'" width="400" height="250" frameborder="0" scrolling="no" allow="autoplay" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe></div>'
                        +        '</td> <td><div style="float:left"> <iframe src="//iframe.dacast.com/'+ data.channel2 +'" width="400" height="250" frameborder="0" scrolling="no" allow="autoplay" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe></div></td>   </tr></table>'
                        );  
                        channel_status = 'changed';  
                    }
                }
                setTimeout(function(){
                    sendRequest_Channel();
                }, 3000);
            }
        });
    };
 
//   $(".img").selected(function(){
//      $(this).css("background-color", "yellow");   
//   });
    $('.img').click(function(){
        $('.img').css("background-color","");
        gift_id = $(this).attr('data-giftid');
        gift_name = $(this).attr('data-name');
        $( this ).css("background-color", "yellow");
    });

  $('#J_send_gift').click(function(e) {
   e.preventDefault();
   if(gift_id =='-1'){
       return false;
   }
   gift_num = $('#J_gift_num').val();
   console.log(gift_id);
   $.post('/gift/store',
            {  
                gift_id : gift_id,
                gift_name : gift_name,
                gift_num : gift_num
            },
            function(res){
                //alert(res);
                gift_id = -1;
                data = JSON.parse(res); 
                if(data.status != 'error'){
                    var element ='<div class="msg_1 J_u_card  " data-memberid="369931025">' +
                        '<div class="avatar">' +
                            '<img src="'+ data.motion_file +'">' +
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
                            '<div class="content">'+ data.name +'</div>' +
                        '</div>' +
                    '</div>';
                    $('#J_gift_his').append(element); 
                    $('.gift_his').animate({scrollTop: $('.gift_his')[0].scrollHeight}, "slow");
                }else{
                    alert(data.content);
                }
                          
            });
    });

$('#manual-ajax').click(function(event) {        
    event.preventDefault();
    this.blur(); // Manually remove focus from clicked link.
    $.get(this.href, function(html) {
        $(html).appendTo('body').modal();
    });
});

$('#report_send').click(function(event){
    var radioValue = $("input[name='report']:checked").val();
    //alert(radioValue);
    $.post('/channel/report',
        { report_message: radioValue },
        function(res){
            //alert(res);
            data = JSON.parse(res);
            alert(data.content);
            
        }
    )
});

});
</script>
</body>
</html>
<!-- https://iframe.dacast.com/b/131291/c/501587
https://iframe.dacast.com/b/130542/c/500825 -->