
<script>
    sessionStorage.setItem("basePath","http://pay.yizhibo.com:80/");
    sessionStorage.setItem("pc_domain","http://www.yizhibo.com");
</script>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>一直播--收银台</title>
    <link rel="stylesheet" href="/static/css/pc/reset.css">
    <link rel="stylesheet" href="/static/css/animate.min.css">
    <link rel="stylesheet" href="/static/css/pc/checkstand.css">
    
</head>
<body>









<script>
    sessionStorage.setItem("basePath","http://pay.yizhibo.com:80/");
    sessionStorage.setItem("pc_domain","http://www.yizhibo.com");
</script>
<link rel="stylesheet" href="/static/css/pc/header.css">
<div class="header">
    <div class="nav">
        <div class="logo fl">
            <img src="/static/images/logo.png" alt="">
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
<script src="/static/js/jquery.min.js"></script>


<div class="checkstand_content">
    <div class="checkstand_content_tit cf">
        <div class="acount_box_l cf">
            <div class="acount_box_head fl" style="background-image: url(https://alcdn.img.xiaoka.tv/20180509/08b/673/339082194/08b673e71c47389c0ec4a4bee91b656f.jpg);">
                <div class="acount_box_vip dn"></div>
            </div>
            <div class="acount_box_info fl">
                <p class="acount_box_name fl txt-cut">靓号22</p>
                <p class="acount_box_id fl">（ID：<span>1</span>）</p>
            </div>
            <div class="account_status dn" data-status="false"></div>
            <div class="largeNoble dn" data-status=""></div>
        </div>



        <div class="pay_amount">支付金额：<span>1</span>元</div>
        
                    
                        <div class="commodity_name">商品名称：100金币</div>
                    
                    

        		
        
       			<div class="transaction_type">交易类型：充值</div>
        		
        
        			<div class="change_order">修改订单</div>
        		
        
        
        
    </div>
    <ul class="pay_list cf">
    		
        			<li class="pay_list_li pay_list_zfb">
        		
            <!-- <img src="/static/images/pay_icon01.png" style="width: 22px;height: 16px"> -->
            <div class="pay_list_name">支付宝</div>
        </li>
        <li class="pay_list_wx">
            <!-- <img src="/static/images/pay_icon02.png" style="width: 20px;height: 18px"> -->
            <div class="pay_list_name">微信支付</div>
        </li>




        
                
                          <li class="pay_list_wy">
                    
                    <div class="pay_list_name">网银支付</div>
        

            <!-- <img src="/static/images/pay_icon03.png" style="width: 52px;height: 14px"> -->
        </li>
    </ul>
    <div class="change_pay_content">
    		
        			<div class="pay01_contengt">
        		
        
            <div class="pay01_contengt_tit fl">
                <img src="/static/img/pay_06.png" class="pay_06">
                <div class="pay01_contengt_text">支付宝扫码支付</div>
                <div class="pay01_contengt_info">
                    <img src="https://mobilecodec.alipay.com/show.htm?code=gdxox0xohbjzdtfzef&picSize=S" class="pay_01">
                </div>
            </div>
            <div class="pay01_contengt_big">
                <div class="pay_border">
                    <img src="https://mobilecodec.alipay.com/show.htm?code=gdxox0xohbjzdtfzef&picSize=S">
                </div>
            </div>
        </div>
        <div class="pay02_contengt" style="display:none">
            <div class="pay01_contengt_tit fl">
                <img src="/static/img/pay_icon02.png" class="pay_06">
                <div class="pay01_contengt_text">微信扫码支付</div>
                <div class="pay01_contengt_info">
                    <div id="weixin_qr" src="" class="pay_01"></div>
                </div>
            </div>
            <div class="pay01_contengt_big">
                <div class="pay_border01">
                    <div id="weixin_qr_big" src=""></div>
                </div>
            </div>
        </div>
        
		        <div class="pay03_contengt" style="display: none">
        		
            <div class="pay03_contengt_info cf">
                <div class="pay03_contengt_tit">选择银行：</div>
                <ul class="bank_list cf">
                </ul>
            </div>
            <div class="click_more cf">
                <div class="click_more_c">
                    <div>更多</div>
                    <img src="/static/img/down_icon.png" class="down_icon">
                </div>
            </div>
            <div class="click_pay">前往网银支付</div>
            <div class="line"></div>
            <div class="xian_tit">银行支付限额说明，供参考</div>
            <table>
                <tr>
                    <td>银行</td>
                    <td>卡类型</td>
                    <td>单笔限额</td>
                    <td>单日限额</td>
                    <td>所需条件</td>
                </tr>
                <tr>
                    <td>中国交通银行</td>
                    <td>储蓄卡</td>
                    <td>5万</td>
                    <td>10万</td>
                    <td>开通网上支付功能</td>
                </tr>
            </table>
        </div>
        <div class="checkstand_content_bottom">如果充值遇到问题，请联系微信公众号在线客服:<span>一直播（yizhiboAPP）</span></div>
    </div>
    <input type="hidden" id="prehref" name="prehref" value="">
    <input type="hidden" id="sdkid" name="sdkid" value="">
    <input type="hidden" id="producttype" name="producttype" value="0">
    <input type="hidden" id="productid" name="productid" value="0">
    <input type="hidden" id="all_popcoin" name="all_popcoin" value="0">
</div>

<!-- 支付成功 -->
<div class="pay_success">
    <div class="checkstand_content_tit cf">
        <div class="pay_amount">支付金额：<span>1</span>元</div>
        
            <div class="commodity_name">商品名称：100金币</div>
        
        
        <div class="transaction_type">交易类型：充值</div>
    </div>
    <div class="pay_success_content">
        <img src="/static/images/pay_done.png">
        <div class="pay_success01">
            付款成功
        </div>
        <div class="pay_type">支付方式：支付宝扫码付／微信扫码付／网银支付</div>
        
        <div class="pay_success_btn1">
            
            <div class="pay_btn_back fl">继续充值</div>
        </div>
        <div class="checkstand_content_bottom">如果支付遇到问题，请联系客服电话：<span>400-1099-100</span></div>
    </div>
</div>

<!-- 支付失败 -->
<div class="pay_none">
    <div class="checkstand_content_tit cf">
        <div class="pay_amount">支付金额：<span>1</span>元</div>
        
            <div class="commodity_name">商品名称：100金币</div>
        
        
        <div class="transaction_type">交易类型：充值</div>
    </div>
    <div class="pay_success_content">
        <img src="/static/images/pay_none.png">
        <div class="pay_success01">
            付款失败
        </div>
        <div class="pay_type">支付方式：支付宝扫码付／微信扫码付／网银支付</div>
        <div class="pay_success_btn2">
            <div class="pay_btn_con fl">返回支付充值</div>
        </div>
        <div class="checkstand_content_bottom">如果支付遇到问题，请联系客服电话：<span>400-1099-100</span></div>
    </div>
</div>

<!-- 付款处理中 -->
<div class="paying">
    <div class="checkstand_content_tit cf">
        <div class="pay_amount">支付金额：<span>1</span>元</div>
        
            <div class="commodity_name">商品名称：100金币</div>
        
        
        <div class="transaction_type">交易类型：充值</div>
    </div>
    <div class="pay_success_content">
        <img src="/static/images/pay_ing.png">
        <div class="pay_success01">
            系统处理中
        </div>
        <div class="pay_type">支付方式：支付宝扫码付／微信扫码付／网银支付</div>
        
            <div class="pay_success_btn2">
                <div class="pay_btn_index fl">返回个人主页</div>
            </div>
        
        <div class="checkstand_content_bottom">如果支付遇到问题，请联系客服电话：<span>400-1099-100</span></div>
    </div>
</div>

<!-- 弹框 -->
<div class="shadow"></div>
<div class="pay_pic">
    <div class="pay_pic_tit">登录到网上银行支付</div>
    <div class="pay_pic_info">请您在新打开的网上银行页面进行支付，支付完成前请勿关闭窗口</div>
    <ul class="pay_pic_ul cf">
        <li>
            <div class="pay_pic_s">
                <img src="/static/img/pay_done.png">
                <div>付款成功</div>
            </div>
            
                <div class="return">
                    <div class="return_m btn0">您可以返回 <a>我的账户</a></div>
                    <div class="return_c">查看 <a>充值记录</a></div>
                </div>
            
        </li>
        <li>
            <div class="pay_pic_s">
                <img src="/static/img/pay_none.png">
                <div>付款失败</div>
            </div>
            <div class="return">
                <div class="return_m btn1">您可以 <a>重新充值</a></div>
            </div>
        </li>
    </ul>
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

<script src="/static/js/jquery.min.js"></script>
<script src="/static/js/jquery.qrcode.js"></script>
<script src="/static/js/pc/checkstand.js"></script>
<script src="/static/js/basic.js"></script>
<script>
    sessionStorage.setItem("memberid", 1);
    sessionStorage.setItem("money", 1);
    sessionStorage.setItem("checkstand_ali_qrcode", "gdxox0xohbjzdtfzef");
</script>
</body>
</html>