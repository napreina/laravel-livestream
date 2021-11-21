<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <title>充值</title>
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/animate.min.css">
    <link rel="stylesheet" href="/css/pc.css">
    <link rel="stylesheet" href="/css/payment.css">
    <script type="text/javascript">
        (function () {
            if (!/*@cc_on!@*/0)return;
            var e = "abbr,article,aside,audio,bb,canvas,datagrid,datalist,details,dialog,eventsource,figure,footer,header,hgroup,mark,menu,meter,nav,output,progress,section,time,video".split(',');
            for (var i = 0; i < e.length; i++) {
                document.createElement(e[i])
            }
        })();
    </script>
</head>
<body>

<link rel="stylesheet" href="/css/header.css">
<div class="header">
    <div class="nav">
        <div class="logo fl">
            <img src="/images/logo.png" alt="">
        </div>
        <div class="syt fl">收银台</div>
        <div class="cz_login fr">
            <div class="user_head fl">                
            </div>
            <div class="user_name fl txt-cut">                
            </div>
            <div class="parent_memberid" style="display: none" ></div>
        </div>
    </div>
</div>
<script src="/js/jquery.min.js"></script>
<div class="section_content">
    <div class="people_info cf">
        <ul class="pay_list cf">
            <li class="pay_list_li pay_list_li1">
                <div class="pay_list_name">金币充值</div>
            </li>
        </ul>
    </div>

    <!-- 充值 -->
    <div class="top_up_content cf">
        <div class="change_acount">
            <div class="change_acount_bt">
                充值账号
            </div>
            <div class="change_acount_box J_acount_box_sure cf dn">
                <div class="acount_box_l cf">
                    <div class="acount_box_head fl">
                        <div class="acount_box_vip dn"></div>
                    </div>
                    <div class="acount_box_info fl">
                        <p class="acount_box_name fl txt-cut"></p>
                        <p class="acount_box_id fl">（ID：<span></span>）</p>
                    </div>
                </div>
                <div class="acount_box_r J_box_btns">
                    切换账号
                </div>
            </div>

            <div class="change_acount_box J_acount_box_text cf db pr">
                <input type="text" class="acount_box_t pr" placeholder="请输入一直播ID">
                <ul class="cache pa dn">
                    <li class="item nothing dn">没有充值记录</li>
                </ul>
                <div class="acount_box_r J_box_btnt">
                    确认账号
                </div>
            </div>
        </div>

        <div class="top_up_num_name tl">充值数量</div>
        <ul class="top_up_num_list cf">
            
                <li   productid = "172"
                        money="1" class="money"
                        goldcoin="100"
                        p-goldcoin="100"
                        p-subsidygoldcoin="0">
                    <div class="top_up_num_list_div">
                        <div class="list_money">
                                100金币
                        </div>
                        <div class="list_money_1 ">¥1</div>
                    </div>
                    
                </li>
            
                <li     productid = "7"
                        money="6" class="money"
                        goldcoin="600"
                        p-goldcoin="600"
                        p-subsidygoldcoin="0">
                    <div class="top_up_num_list_div">
                        <div class="list_money">
                                600金币
                        </div>
                        
                        <div class="list_money_1 ">¥6</div>
                    </div>
                    
                </li>
            
                <li     productid = "8"
                        money="30" class="money"
                        goldcoin="3000"
                        p-goldcoin="3000"
                        p-subsidygoldcoin="0">
                    <div class="top_up_num_list_div">
                        <div class="list_money">
                                3000金币
                        </div>
                        
                        <div class="list_money_1 ">¥30</div>
                    </div>
                    
                </li>
            
                <li     style="margin-top: 20px"
                        productid = "9"
                        money="98" class="money"
                        goldcoin="9800"
                        p-goldcoin="9800"
                        p-subsidygoldcoin="0">
                    <div class="top_up_num_list_div">
                        <div class="list_money">
                                9800金币
                        </div>
                        <div class="list_money_1 ">¥98</div>
                    </div>
                    
                </li>
            
                <li
                    style="margin-top: 20px"
                        productid = "10"
                        money="298" class="money"
                        goldcoin="29800"
                        p-goldcoin="29800"
                        p-subsidygoldcoin="0">
                    <div class="top_up_num_list_div">
                        <div class="list_money">
                                29800金币
                        </div>
                        
                        <div class="list_money_1 ">¥298</div>
                    </div>
                    
                </li>
            
                <li
                    style="margin-top: 20px"
                        productid = "11"
                        money="588" class="money"
                        goldcoin="58800"
                        p-goldcoin="58800"
                        p-subsidygoldcoin="0">
                    <div class="top_up_num_list_div">
                        <div class="list_money">
                                58800金币
                        </div>
                        <div class="list_money_1 ">¥588</div>
                    </div>
                    
                </li>
            
            <li style="margin-top: 20px" id="custom_money" money="0" goldcoin="0"  productid ="0">
                <div class="top_up_num_list_div">
                    <div class="list_money">自定义</div>
                    <div class="list_money" style="padding:0">充值金额</div>
                </div>
                
            </li>
            <div class = "list_productid" data-productid="0" style="display:none" ></div>
        
        </ul>

        <form id="form1" action="/inpour/api/create_inpour_order_background" method="post">
            <input type="hidden" id="sdkid" name="sdkid" value="" >
            <input type="hidden" id="prehref" name="prehref" value="" >
            <input type="hidden" id="producttype" name="producttype" value="" >
            <!-- 请输入充值金额 -->
            <div class="money_input cf fl" style="display:none;">
                <div class="money_input_text">充值金额：</div>
                <div class="input_info">
                    <input type="text" id="money" name="money" placeholder="请输入整数" onkeyup="changeText()"/>
                    <span class="yuan">元</span>                    
                </div>
            </div>

            <!-- 应付金额 -->
            <div class="amount_payable cf fl">
                <div class="amount_payable_text">应付金额：</div>
                <div class="amount_payable_money" data-goldcoin="0"><span>0</span>元</div>
                <div class = "amount_payable_moneys" data-popcoin="0" style="display:none" ></div>
            </div>

            <!-- 立即支付 -->
            <button class="pay_now" type="button" style="text-align:center;">立即支付</button>
        </form>
        
        
        <div class="wrap-s1-bottom">
            充值遇到问题？请联系微信公众号在线客服： 
        </div>
    </div>

    <div class="avoid_status dn" data-status="true"></div>
    <div class="activitytemp dn" data-status=""></div>
    
</div>

<style>
    .footer {
        width: 100%;
        color: #ABABAB;
        background-color: #27292a;
        padding: 30px 0;
        line-height: 26px;
        font-size: 14px;
        text-align: center;
        margin-top: 120px;
    }
</style>
<div class="footer" id="J_footer">
    <a target="_new"
       href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010502030231"
       style="color:#ababab;">京公网安备 11010502030231号</a>&nbsp;&nbsp;&nbsp;&nbsp;京ICP证：160626&nbsp;&nbsp;&nbsp;&nbsp;京ICP备
    16013913号-2&nbsp;&nbsp;&nbsp;&nbsp;京网文（2016）5536-721号<br>小咖秀（北京）科技有限公司 Copyright YIXIA ALL right reserved.&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="/member/personel/user_info?memberid=24752948" target="_new" style="color:#ababab">联系我们</a>&nbsp;&nbsp;&nbsp;&nbsp;电话：4001099100&nbsp;&nbsp;&nbsp;&nbsp;有害信息举报电话：010-56249864&nbsp;&nbsp;&nbsp;&nbsp;<a
        href="http://jb.ccm.gov.cn/" target="_new" style="color:#ababab;">全国文化市场举报平台</a>&nbsp;&nbsp;&nbsp;&nbsp;<a
        href="/templates/html/notice.html" style="color:#ababab;">版权通知指引</a>
</div>

<script src="/js/jquery.min.js"></script>
<script src="/js/layer.js"></script>
<script src="/js/payment.js"></script>
<script src="/js/basic.js"></script>

<script>
    var member = {
        avatar: "",
        nickname: "",
        memberid: "",
        is_v: "",
        drainageid: ""
    }
    login(member);
</script>
</body>
</html>