var paytype = "alipay";
var qrcode;
var login_status = false;

$(document).ready(function () {
//	 $(".pay_list_wy").trigger("click");
    get_bank_list_background();
    get_bank_rules_background(1025);
    recharge_search_background();
    qrcode = sessionStorage.getItem("checkstand_ali_qrcode");
    login_status = $(".account_status").data("status")


   //监听浏览器回退 解决safri10.0.3低版本点击后退页面不刷新,去掉页面缓存刷新
    if (window.history && window.history.pushState) {
        $(window).on('popstate', function () {
            window.history.pushState('forward', null, '#');
            window.history.forward(1);
            var sdkid = $("#sdkid").val();
            var prehref = $("#prehref").val();
            var producttype = $("#producttype").val();
            if(prehref != ""){
                window.location.href = "/inpour/api/ready_inpour_background" + "?sdkid="+sdkid + "&href_client="+prehref+ "&producttype="+producttype;
            }else{
                window.location.href = "/inpour/api/ready_inpour_background" + "?producttype="+producttype;
            }

        });
    }
    window.history.pushState('forward', null, '#'); //在IE中必须得有这两行
    window.history.forward(1);
});

// 修改订单跳转ß
$(".change_order").click(function () {
    var sdkid = $("#sdkid").val();
    var prehref = $("#prehref").val();
    var producttype = $("#producttype").val();
    if(prehref != ""){
        window.location.href = "/inpour/api/ready_inpour_background" + "?sdkid="+sdkid + "&href_client="+prehref+ "&producttype="+producttype;
    }else{
        window.location.href = "/inpour/api/ready_inpour_background" + "?producttype="+producttype;
    }
});
$(".pay_btn_return").click(function () {
    var producttype = $("#producttype").val();
    if(login_status){
        location_mygold(producttype);
    }
});
// 支付成功，继续充值
$(".pay_btn_back").click(function () {
    var sdkid = $("#sdkid").val();
    var prehref = $("#prehref").val();
    var producttype = $("#producttype").val();
    if(prehref != ""){
        window.location.href = "/inpour/api/ready_inpour_background" + "?sdkid="+sdkid + "&href_client="+prehref+ "&producttype="+producttype;
    }else{
        window.location.href = "/inpour/api/ready_inpour_background" + "?producttype="+producttype;
    }

});
// 支付失败，返回支付充值
$(".pay_btn_con").click(function () {
    var sdkid = $("#sdkid").val();
    var prehref = $("#prehref").val();
    var producttype = $("#producttype").val();
    if(prehref != ""){
        window.location.href = "/inpour/api/ready_inpour_background" + "?sdkid="+sdkid + "&href_client="+prehref+ "&producttype="+producttype;
    }else{
        window.location.href = "/inpour/api/ready_inpour_background" + "?producttype="+producttype;
    }
});

// 网银弹层，我的账户
$(".return_m.btn0 a").click(function () {
    IsCheck("my_gold");
});
// 网银弹层，充值记录
$(".return_c a").click(function () {
    IsCheck("history");
});
// 网银弹层，重新充值
$(".return_m.btn1 a").click(function () {
    IsCheck("new");
});


// $(".pay_list li").click(function () {
//     $(this).addClass("pay_list_li").siblings().removeClass("pay_list_li")
// })

$(".pay_list li").click(function () {
    var pay_list_index = $(".pay_list li").index(this);
    $(this).addClass("pay_list_li").siblings().removeClass("pay_list_li");
    if (pay_list_index == 0) {
        $(".pay01_contengt").css({"display": "block"});
        $(".pay02_contengt").css({"display": "none"});
        $(".pay03_contengt").css({"display": "none"});
        paytype = "alipay";
        qrcode = sessionStorage.getItem("checkstand_ali_qrcode");
    } else if (pay_list_index == 1) {
        $(".pay01_contengt").css({"display": "none"});
        $(".pay02_contengt").css({"display": "block"});
        $(".pay03_contengt").css({"display": "none"});
        paytype = "weixin";
        weixin();
    } else if (pay_list_index == 2) {
        $(".pay01_contengt").css({"display": "none"});
        $(".pay02_contengt").css({"display": "none"});
        $(".pay03_contengt").css({"display": "block"});
        paytype = "bankonline";
    }
});

$(".click_more_c").click(function () {
    var none = $(".hide").eq(0).attr("none");
    if (none == 1) {
        $(".hide").css({"display": "block"});
        $(".click_more_c div").text("收起");
        $(".click_more_c img").attr("src", "/static/img/up_icon.png");
        $(".hide").eq(0).attr("none", "2");
    } else {
        $(".hide").css({"display": "none"});
        $(".click_more_c div").text("展开");
        $(".click_more_c img").attr("src", "/static/img/down_icon.png");
        $(".hide").eq(0).attr("none", "1");
    }
});


var weixin_loading = false;
function weixin() {
    if (weixin_loading) {
        qrcode = sessionStorage.getItem("checkstand_weixin_qrcode");
        return;
    }
    weixin_loading = true;
    
    var oldurl = "/shop/api/wx_sc_prepay_background";
    if($('.largeNoble').data('status') != "" ){//荣耀 微信扫码	
    		$.ajax({
    	        url: "/inpour/api/create_inpour_order_nobel_pc?ptype=WEIXIN_QR_R&pmode="+sessionStorage.getItem('bank_code'),
    	    		type: "get",  
    			async: false,  
    			dataType: "jsonp",  
    			jsonp: "callback",
    			jsonpCallback: "return_callback",
    	        success: function (data) {
    	            qrcode = data.data.nonce_str;
    	            sessionStorage.setItem("checkstand_weixin_qrcode", qrcode);
    	            $('#weixin_qr').qrcode({
    	                width: 146,
    	                height: 146,
    	                text: data.data.code_url
    	            });
    	            $('#weixin_qr_big').qrcode({
    	                width: 125,
    	                height: 125,
    	                text: data.data.code_url
    	            });
    	        }
    	    });
    		
    		return;
    }
    var memberid = sessionStorage.getItem("memberid");
    var money = sessionStorage.getItem("money");
    var producttype = $("#producttype").val();
    var productid = $("#productid").val();
    var all_popcoin = $("#all_popcoin").val();
    $.ajax({
        url: "/shop/api/wx_sc_prepay_background",
        type: "post",
        dataType: "json",
        data: {money: money,producttype: producttype,productid: productid,all_popcoin:all_popcoin},
        success: function (data) {
            qrcode = data.data.nonce_str;
            sessionStorage.setItem("checkstand_weixin_qrcode", qrcode);
            $('#weixin_qr').qrcode({
                width: 146,
                height: 146,
                text: data.data.code_url
            });
            $('#weixin_qr_big').qrcode({
                width: 125,
                height: 125,
                text: data.data.code_url
            });
        }
    });
}

var bank_loading = false;
function get_bank_list_background() {
    if (bank_loading) {
        return;
    }
    bank_loading = true;
    $.ajax({
        url: "/unionpay/api/get_bank_list_background",
        type: "post",
        dataType: "json",
        success: function (data) {
            if (data.result == 1) {
                data = data.data;
                for (var i = 0; i < data.length; i++) {
                    var html_ban_list = ' <li code="' + data[i].code + '" onclick="select_bank(this)"><img src="' + data[i].url + '" class="bank_pic"><img src="/static/img/click.png" class="click_icon"></li>';
                    $(".bank_list").append(html_ban_list);
                    if (i >= 12) {
                        $(".bank_list li").eq(i).attr("class", "hide");
                        $(".bank_list li").eq(i).attr("none", "1");
                    }
                }
                $(".bank_list li").eq(0).trigger("click");
            }
            $(".hide").css({"display": "none"});
        }
    });

}

function select_bank(obj) {
    var bank_code = $(obj).attr("code");
    sessionStorage.setItem("bank_code", bank_code);
    $(obj).css({"border": "1px solid #ff6826"})
        .siblings().css({"border": "1px solid #ddd"});

    $(".click_icon").css({"display": "none"});
    $(obj).children(".click_icon").css({"display": "block"});
    get_bank_rules_background(bank_code);
}

function get_bank_rules_background(bank_code) {
    $.ajax({
        url: "/unionpay/api/get_bank_rules_background",
        dataType: "json",
        type: "post",
        data: {code: bank_code},
        success: function (data) {
            $("table").empty();
            if (data.result == 1) {
                var html_x = '<tr><td>银行</td><td>卡类型</td><td>单笔限额</td><td>单日限额</td><td>所需条件</td></tr>';
                $("table").append(html_x);
                var data = data.data;
                for (var i = 0; i < data.length; i++) {
                    var html_f = '<tr style="color: #666;"><td>' + data[i].name + '</td><td>' + data[i].type + '</td><td>' + data[i].single + '</td><td>' + data[i].day + '</td><td>' + data[i].condition + '</td></tr>';
                    $("table").append(html_f);
                }
            }
        }
    });
}

$(".click_pay").click(function () {
    $('.shadow').css('display', 'block');
    $('.pay_pic').css('display', 'block');
    if($('.largeNoble').data('status') != "" ){
    		$('.shadow').css('display', 'none');
        $('.pay_pic').css('display', 'none');
	   $.ajax({  
	    		url:'/inpour/api/create_inpour_order_nobel_pc?ptype=UNION_PAY&pmode='+sessionStorage.getItem('bank_code'),  
	    		type: "get",  
	    		async: false,  
	    		dataType: "jsonp",  
	    		jsonp: "callback",
	    		jsonpCallback: "return_callback",
	    		success: function(json) {  
	    		 console.log(json);
	    		 window.location.href ="https://pay3.chinabank.com.cn/PayGate?"+json;
	    		},  
	    		error: function(){
	    			console.log("error");
	    		}  
	    	});
	    	return;
    }
    var form = document.createElement('form');
    form.enctype = 'application/x-www-form-urlencoded; charset=UTF-8';
    form.method = 'post';
    form.action = '/unionpay/api/post_bank_url_background';
    form.target = '_blank';

    var money = create_input_hidden("money");
    money.value = sessionStorage.getItem("money");
    form.appendChild(money);
    var bank_code = create_input_hidden("code");
    bank_code.value = sessionStorage.getItem("bank_code");
    form.appendChild(bank_code);
    var producttype = $("#producttype")[0];
    form.appendChild(producttype);
    var productid = $("#productid")[0];
    form.appendChild(productid);
    var all_popcoin = $("#all_popcoin")[0];
    form.appendChild(all_popcoin);

    document.body.appendChild(form);
    form.submit();
});

var Tobj = null;
function recharge_search_background() {
    var timestamp = Date.parse(new Date());
    $.ajax({
        type: "POST",
        url: "/inpour/api/recharge_search_background",
        data: {code: qrcode, timestamp: timestamp},
        dataType: "json",
        success: function (data) {
            if (data.result == 1) {
                clear_recharge_search_background();
                $(".pay_success").css({"display": "block"});
                $(".checkstand_content").css({"display": "none"});
                if (paytype == "alipay") {
                    $(".pay_success .pay_type").text("支付方式：支付宝");
                }
                if (paytype == "weixin") {
                    $(".pay_success .pay_type").text("支付方式：微信");
                }
                if(login_status){
                    var tmp = $("#prehref").val();
                    console.info(tmp);
                    if (tmp != "" && typeof(tmp)!="undefined" && tmp!=0){
                        window.location.href = tmp;
                    }else{
                        countdown();
                    }

                }else{
                    var tmp = $("#prehref").val();
                    console.info(tmp);
                    if (tmp != "" && typeof(tmp)!="undefined" && tmp!=0){
                        window.location.href = tmp;
                    }else{
                        $(".pay_btn_back").css("margin","0 0 0 80px");
                    }
                }
            }
            if (data.result == -1) {
                Tobj = setTimeout('recharge_search_background()', 2e3);
            }
        }
    });
}
function clear_recharge_search_background() {
    if (Tobj != null) {
        clearTimeout(Tobj);
    }
}

var pay_countdown = 5;
function countdown() {
    if (pay_countdown <= 0) {
        pay_countdown = 5;
        if(login_status){
            location_myindex();
        }
    }
    $("#pay_s").text(pay_countdown);
    pay_countdown--;
    setTimeout('countdown()', 1000);
}

//网银
function IsCheck(t) {
    $.ajax({
        url: "/unionpay/api/query_background",
        type: "post",
        dataType: "json",
        success: function (data) {
            if (data.result == 1) {
                $(".shadow").css("display", "none");
                $(".pay_pic").css("display", "none");
                $(".checkstand_content").css({"display": "none"});
                $(".pay_success").css({"display": "block"});
                $(".pay_success .pay_type").text("支付方式：网银支付");
                var producttype = $("#producttype").val();
                if (t == "my_gold") {
                    $(".pay_btn_return").unbind("click").bind("click", function () {
                        location_mygold(producttype);
                    });
                    countdown();
                } else if (t == "history") {
                    $(".pay_btn_return").html("返回充值记录");
                    $(".pay_btn_return").unbind("click").bind("click", function () {
                        location_inpour_history(producttype);
                    });
                    countdown();
                } else {
                    location_myindex();
                }
            } else {
                if (t == "my_gold" || t == "history") {
                    $(".shadow").css("display", "none");
                    $(".pay_pic").css("display", "none");
                    $(".checkstand_content").css({"display": "none"});
                    $(".pay_none").css({"display": "block"});
                    $(".pay_none .pay_type").text("支付方式：网银支付");
                } else {
                    var sdkid = $("#sdkid").val();
                    var prehref = $("#prehref").val();
                    var producttype = $("#producttype").val();
                    if(prehref != ""){
                        window.location.href = "/inpour/api/ready_inpour_background" + "?sdkid="+sdkid + "&href_client="+prehref+ "&producttype="+producttype;
                    }else{
                        window.location.href = "/inpour/api/ready_inpour_background" + "?producttype="+producttype;
                    }
                }
            }
        }
    });
}
