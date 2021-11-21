var avoid_status = false;
var flag = false;
$(function () {
    avoid_status = $(".avoid_status").data("status");
    $(".top_up_num_list li").click(function () {
        $(this).addClass("top_up_num_list_libg").siblings().removeClass("top_up_num_list_libg")
        $(this).children(".top_up_num_list_div").css({"border": "0", "background": "none"})
        $(this).siblings().children(".top_up_num_list_div").css({
            "border": "1px solid #E0E0E0",
            "background": "#FFFFFF"
        });
        var money_text = $(this).attr("money");
        var goldcoin = $(this).attr("goldcoin");
        $(".pay_now").attr("goldcoin", goldcoin);
        $(".amount_payable_money span").text(money_text);
        $(".people_info_money").text(goldcoin);
        var producttype = $("#producttype").val();
        if(producttype == 0) {
            var productdesc = $(this).attr("p-goldcoin") + "金币";
        }else if(producttype == 2){
            var productdesc = $(this).attr("p-goldcoin") + "元宝";
            var all_popcoin = Number($(this).attr("p-goldcoin"));
        }

        if ($(this).attr("p-subsidygoldcoin") != 0) {
            if(producttype == 0) {
                productdesc += "+赠" + $(this).attr("p-subsidygoldcoin") + "金币";
            }
            if(producttype == 2) {
                productdesc += "+赠" + $(this).attr("p-subsidygoldcoin") + "元宝";
                all_popcoin += Number($(this).attr("p-subsidygoldcoin"));
            }
        }
        $(".amount_payable_money").data("data-goldcoin", productdesc);
        $(".money_all").text("");
        $(".amount_payable_moneys").data("data-popcoin", all_popcoin);
        var productid = $(this).attr("productid");
        $(".list_productid").data("data-productid", productid);

    });

    // 金币默认选中588、人气币默认选中98
    if($('.activitytemp').data('status') != "" ){
        $(".top_up_num_list li").eq(6).trigger("click");
        $("#money").val($(".top_up_num_list li").eq(6).attr('money'));
    }else{
        var producttype = $("#producttype").val();
        if(producttype == 0) {
            $(".top_up_num_list li").eq(4).trigger("click");
            $("#money").val(588);
        }else if(producttype == 2) {
            $(".top_up_num_list li").eq(2).trigger("click");
            $("#money").val(98);
        }
    }


    $(".money").click(function () {
        $(".money_input").css({"display": "none"});
        $(".input_info input").val("");
        $("#money").val($(this).attr("money"));
    });
    $("#custom_money").click(function () {
        $(".money_input").css({"display": "block"});
        $("#money").val('');
    });

    $(".select_pay_ul li").click(function () {
        $(this).css({"border": "1px solid #01a0e9"})
            .siblings().css({"border": "1px solid #ddd"});
        $(this).children(".select_pay_ul_img01").css({"display": "block"});
        $(".select_pay_ul").attr("click", "1");
        var index = $(".select_pay_ul li").index(this);
        $(".select_pay_ul").attr("index", index + 1);
    });

    $(".J_box_btnt").click(function () {
        var memberid = $(".acount_box_t").val();
        if (isEmpty(memberid)) {
            layer.open({
                type: 0,
                title: "提示",
                content: '<div class="msg">请输入正确的一直播 ID</div>',
                area: ['340px', '232px'],
                skin: 'demo-class',
                shift: 0,
                closeBtn: 0,
                btn: ['确认'],
                btnAlign: 'c',
                move: false,
                shade: [0.3, '#000'],
            })
            return;
        }
        if (!isPInt(memberid)) {
            layer.open({
                type: 0,
                title: "提示",
                content: '<div class="msg">请输入正确的一直播 ID</div>',
                area: ['340px', '232px'],
                skin: 'demo-class',
                shift: 0,
                closeBtn: 0,
                btn: ['确认'],
                btnAlign: 'c',
                move: false,
                shade: [0.3, '#000'],
            })
            return;
        }
        $.ajax({
            url: '/api/get_member',
            type: 'post',
            data: {
                memberid: memberid,
            },
            dataType: 'json',
            success: function (data) {
                alert(data.status);
                if (data.status == 'success') {
                    flag = true;
                    login(data.data);
                    member = data.data;
                    var cache = (localStorage.cache ? localStorage.cache : '').split(',');
                    if ($.inArray(memberid, cache) == -1 && cache.length < 6) {
                        cache.push(memberid);
                        localStorage.cache = cache;
                        var l = $(".cache .item").length;
                        if (l == 1) {
                            $(".cache  .item.nothing").hide();
                        }
                        $("<li class='item' data-index='" + l + "'>" + memberid + "<div class='delete'></div></div>").appendTo($(".cache"));
                    }
                } else {
                    layer.open({
                        type: 0,
                        title: "提示",
                        content: '<div class="msg">' + data.msg + '</div>',
                        area: ['340px', '232px'],
                        skin: 'demo-class',
                        shift: 0,
                        closeBtn: 0,
                        btn: ['确认'],
                        btnAlign: 'c',
                        move: false,
                        shade: [0.3, '#000'],
                    })
                }
            },
            error: function () {
                layer.open({
                    type: 0,
                    title: "提示",
                    content: '<div class="msg">系统繁忙,请稍候再试!</div>',
                    area: ['340px', '232px'],
                    skin: 'demo-class',
                    shift: 0,
                    closeBtn: 0,
                    btn: ['确认'],
                    btnAlign: 'c',
                    move: false,
                    shade: [0.3, '#000'],
                })
            }
        });
    });

    $(".pay_now").click(function () {
        var productdesc = $(".amount_payable_money").data("data-goldcoin");
        var price = $(".amount_payable_money span").text();
        var memberid = $(".acount_box_t").val();
        var producttype = $("#producttype").val();
        var all_popcoin = $(".amount_payable_moneys").data("data-popcoin");
        var productid = $(".list_productid").data("data-productid");

        if ($(".money_input").is(":visible") && $(".input_info input").val() == "") {
            layer.open({
                type: 0,
                title: "提示",
                content: '<div class="msg">您尚未输入充值金额</div>',
                area: ['340px', '232px'],
                skin: 'demo-class',
                shift: 0,
                closeBtn: 0,
                btn: ['知道了'],
                btnAlign: 'c',
                move: false,
                shade: [0.3, '#000'],
            })
            return;
        }
        if ($(".J_acount_box_text").is(":visible") && (isEmpty(memberid) || !isPInt(memberid))) {
            layer.open({
                type: 0,
                title: "提示",
                content: '<div class="msg">请输入正确的一直播 ID</div>',
                area: ['340px', '232px'],
                skin: 'demo-class',
                shift: 0,
                closeBtn: 0,
                btn: ['知道了'],
                btnAlign: 'c',
                move: false,
                shade: [0.3, '#000'],
            })
            return;
        }
        if ($(".J_acount_box_text").is(":visible") && flag == false) {
            layer.open({
                type: 0,
                title: "提示",
                content: '<div class="msg">请先确认输入的账号ID</div>',
                area: ['340px', '232px'],
                skin: 'demo-class',
                shift: 0,
                closeBtn: 0,
                btn: ['知道了'],
                btnAlign: 'c',
                move: false,
                shade: [0.3, '#000'],
            })
            return;
        }
        if ($(".money_input").is(":visible")
            && producttype == 2
            && $(".input_info input").val() != ""
            && ($(".input_info input").val() <= 588 || $(".input_info input").val() > 99999)) {
            layer.open({
                type: 0,
                title: "提示",
                content: '<div class="msg">请输入大于588且小于等于99999的整数</div>',
                area: ['340px', '232px'],
                skin: 'demo-class',
                shift: 0,
                closeBtn: 0,
                btn: ['知道了'],
                btnAlign: 'c',
                move: false,
                shade: [0.3, '#000'],
            })
            return;
        }
        if (avoid_status || $(".parent_memberid").text() != $(".acount_box_id span").text()) {
            if ($(".J_acount_box_text").is(":hidden")) {
                $.ajax({
                    url: '/api/get_member',
                    type: 'post',
                    data: {
                        memberid: $(".acount_box_id span").text(),
                    },
                    dataType: 'json',
                    success: function (data) {
                        member = data.data;
                        var n = $(".acount_box_name").text();
                        var i = $(".acount_box_id span").text();
                        layer.open({
                            type: 0,
                            title: "确认订单",
                            content: '<div class="order_info cf"><div class="order_info_head fl" style="background-image:url()"></div><p class="order_info_name fl txt-cut">' + n + '</p><p class="order_info_id fl">' + i + '</p></div><p class="order_count">商品名称：<span>' + productdesc + '</span></p><p class="order_money">付款金额：<span>' + price + '</span>元</p><p class="order_warn">请务必确认好充值ID和付款金额，防止充错啦</p>',
                            area: ['404px', '326px'],
                            skin: 'demo-class',
                            shift: 0,
                            closeBtn: 0,
                            btn: ['确认', '取消'],
                            btnAlign: 'c',
                            move: false,
                            shade: [0.3, '#000'],
                            yes: function (index, layero) {
                                var money = $("#money").val();
                                if (isEmpty(money) || !isPInt(money)) {
                                    $(".money_all").text("请输入整数");
                                    $(".money_all").css({"display": "block", "color": "#fd6666"});
                                    return;
                                } else {
                                    if(producttype == 0) {
                                        $("#form1").append("<input type='hidden' id='productdesc' name='productdesc' value= ' " + productdesc + "' />");
                                    }else if(producttype == 2){
                                        $("#form1").append("<input type='hidden' id='productdesc' name='productdesc' value= ' "+ productdesc + "' />")
                                            .append("<input type='hidden' id='all_popcoin' name='all_popcoin' value= ' "+ all_popcoin + "' />")
                                            .append("<input type='hidden' id='productid' name='productid' value= ' "+ productid + "' />");
                                    }
                                    $("#form1").submit();
                                }
                            },
                            btn2: function (index, layero) {
                                layer.close(index);
                            },
                            success: function (layero, index) {
                                if (navigator.userAgent.indexOf("Safari") > -1) {
                                    layero.find(".order_info_head").css("background-image", "url(" + $('.acount_box_head').css('background-image').split("(")[1].split(")")[0] + ")");
                                } else {
                                    layero.find(".order_info_head").css("background-image", "url(" + $(".acount_box_head").css("background-image").replace(/url\("([^\"]+)"\)/, '$1') + ")");
                                }
                            }
                        });
                    },
                    error: function () {
                        layer.open({
                            type: 0,
                            title: "提示",
                            content: '<div class="msg">系统繁忙,请稍候再试!</div>',
                            area: ['340px', '232px'],
                            skin: 'demo-class',
                            shift: 0,
                            closeBtn: 0,
                            btn: ['知道了'],
                            btnAlign: 'c',
                            move: false,
                            shade: [0.3, '#000'],
                        })
                    }
                });
            }


        } else {
            var money = $("#money").val();
            if (isEmpty(money) || !isPInt(money)) {
                $(".money_all").text("请输入整数");
                $(".money_all").css({"display": "block", "color": "#fd6666"});
                return;
            } else {
                $.ajax({
                    url: '/api/get_member',
                    type: 'post',
                    data: {
                        memberid: $(".acount_box_id span").text(),
                    },
                    dataType: 'json',
                    success: function (data) {
                        if(producttype == 0) {
                            $("#form1").append("<input type='hidden' id='productdesc' name='productdesc' value= ' " + productdesc + "' />");
                        }else if(producttype == 2){
                            $("#form1").append("<input type='hidden' id='productdesc' name='productdesc' value= ' "+ productdesc + "' />")
                                .append("<input type='hidden' id='all_popcoin' name='all_popcoin' value= ' "+ all_popcoin + "' />")
                                .append("<input type='hidden' id='productid' name='productid' value= ' "+ productid + "' />");
                        }
                        $("#form1").submit();
                    }
                });

            }
        }

    });
});

function changeText() {
    var input_num = $(".input_info input").val();
    if (input_num == "") {
        $(".money_all").css({"display": "none"});
        $(".amount_payable_money span").text("0");
        $(".people_info_money").text("0");
        return false;
    }
    var producttype = $("#producttype").val();
    if(producttype == 0){
        var r = /^[1-9]\d{0,6}$/;
        if (r.test(input_num) == true) {
            $(".money_all").css({"display": "inline"});
            $(".amount_payable_money span").text(input_num);
            goldicon(input_num);
        } else {
            $(".input_info input").val('');
            $(".money_all").css({"display": "none"});
            $(".amount_payable_money span").text("0");
            $(".people_info_money").text("0");
        }
    }else if(producttype == 2){
        var rs = /^[1-9]\d{0,4}$/;
        if (rs.test(input_num) == true) {
            $(".money_all").css({"display": "inline"});
            $(".amount_payable_money span").text(input_num);
            popicon(input_num);
        } else {
            $(".input_info input").val('');
            $(".money_all").css({"display": "none"});
            $(".amount_payable_money span").text("0");
            $(".people_info_money").text("0");
        }
    }
}

function goldicon(money) {
    var num = money * 100;
    var present = YZBpay.getsubsidygoldcoin(money);
    var all_gold = Number(present) + Number(num);
    $(".pay_now").attr("goldcoin", all_gold);
    if (Number(present) == 0) {
        $(".money_all").text("（将获得" + num + "个金币）");
    } else {
        $(".money_all").text("（将获得" + num + "+赠" + present + "个金币）");
    }
    var productdesc = money * 100 + "金币";
    if (present != 0) {
        productdesc += "+赠" + present + "金币";
    }
    $(".amount_payable_money").data("data-goldcoin", productdesc);
    // $(".people_info_money").text(all_gold);
}
function popicon(money) {
    var num = money * 100 * 0.9;
    var present = money * 100 * 0.1;
    var all_gold = Number(present) + Number(num);
    $(".pay_now").attr("goldcoin", all_gold);
    $(".money_all").text("（将获得" + num + "+赠" + present + "个元宝）");
    var productdesc = money * 100 * 0.9 + "元宝" ;
    var all_popcoin = Number(money * 100 * 0.9);
    if (present != 0) {
        productdesc += "+赠" + present + "元宝";
        all_popcoin +=  Number(present);
    }
    $(".amount_payable_money").data("data-goldcoin", productdesc);
    $(".amount_payable_moneys").data("data-popcoin", all_popcoin);
    // $(".people_info_money").text(all_gold);
}

function login(member) {
    var randomChange = function () {
        $.ajax({
            url: '/login/api/get_random_change_background',
            type: 'post',
            dataType: 'json',
            success: function (data) {
                var minfo = data.data;
                if (data.result == 1) {
                    $(".acount_box_head").css("background-image", "url(" + minfo.avatar + ")");
                    $(".acount_box_name").text(minfo.nickname);
                    $(".acount_box_id.fl span").text(minfo.memberid);
                    if (minfo.is_v == true || minfo.is_v == "true") {
                        $(".acount_box_vip").css({"display": "block"});
                    } else {
                        $(".acount_box_vip").css({"display": "none"});
                    }
                } else {
                    layer.open({
                        type: 0,
                        title: "切换账号",
                        content: '<div class="msg">' + data.msg + '</div>',
                        area: ['340px', '232px'],
                        skin: 'demo-class',
                        shift: 0,
                        closeBtn: 0,
                        btn: ['确认'],
                        btnAlign: 'c',
                        move: false,
                        shade: [0.3, '#000'],
                    })
                }
            }
        });
    }
    if (!isEmpty(member) && !isEmpty(member.memberid)) {
        $(".J_acount_box_text").css({"display": "none"});
        $(".J_acount_box_sure").css({"display": "block"});
        $(".acount_box_head").css("background-image", "url(" + member.avatar + ")");
        $(".acount_box_name").text(member.nickname);
        $(".acount_box_id.fl span").text(member.memberid);
        if (member.is_v == true || member.is_v == "true") {
            $(".acount_box_vip").css({"display": "block"});
        } else {
            $(".acount_box_vip").css({"display": "none"});
        }
        if (member.drainageid != 0) {
            randomChange();
            $(".J_box_btns").on("click", function () {
                randomChange();
            });
        } else {
            //切换账号
            $(".J_box_btns").on("click", function () {
                flag = false;
                $(this).parent().css("display", "none");
                $(".acount_box_t").val("");
                $(".J_acount_box_text").css("display", "block");
            });
        }
    } else {
        //切换账号
        $(".J_box_btns").on("click", function () {
            flag = false;
            $(this).parent().css("display", "none");
            $(".acount_box_t").val("");
            $(".J_acount_box_text").css("display", "block");
        });
    }
}

function isEmpty(val) {
    if (val == "" || val == undefined || val == null) {
        return true;
    }
    return false;
}

function isPInt(str) {
    var g = /^[1-9]*[1-9][0-9]*$/;
    return g.test(str);
}

//存储
if (window.localStorage) {
    var cache = (localStorage.cache ? localStorage.cache : '').split(','),
        len = cache.length;
    if (len > 1) {
        for (var i = 1; i < len; i++) {
            var item = cache[i];
            $("<li class='item' data-index='" + i + "'>" + item + "<div class='delete'></div></div>").appendTo($(".cache"));
        }
    } else {
        $(".cache .item.nothing").show();
    }
} else {
    console.log("Not support localStorage.");
}
$("body").delegate('.cache .item .delete', 'click', function (event) {
    event.stopPropagation();
    event.preventDefault();
    var cache = localStorage.cache.split(',');
    cache.splice($(this).parent().data("index"), 1);
    localStorage.cache = cache;
    $(this).parent().remove();
    // $(".acount_box_t").focus();
    // $(".cache").show();
    if ($(".cache .item").length == 1) {
        $(".cache .item.nothing").show();
    }
});
$("body").delegate('.cache .item', 'click', function (event) {
    event.stopPropagation();
    event.preventDefault();
    $(".acount_box_t").css("background-image", "url(/images/arrow_down.png)");
    if (!$(this).is(".nothing")) {
        $(".acount_box_t").val($(this).text());
        $(".cache").hide();
    }
});
$(".acount_box_t").on("focus", function () {
    $(this).css("background-image", "url(/images/arrow_up.png)");
    $(".cache").show();
}).on("focusout", function () {
    $(this).css("background-image", "url(/images/arrow_down.png)");
    setTimeout(function () {
        $(".cache").hide();
    }, 100);
});

var url = (function(){
    var s = location.search.slice(1), o = {};
    s = s.split('&');
    s.forEach(function(v, i){
        v = v.split('=');
        if(v.length > 1)
            o[v[0]] = v[1];
    })
    return o;
})();
if(url.producttype == 2){
    $(".pay_list .pay_list_li2").addClass("orgin");
}else{
    $(".pay_list .pay_list_li1").addClass("orgin");
}


/**
 * tab 切换金币和人气币充值列表
 */
var producttype = 0;
$(".pay_list li").click(function () {
    var pay_list_index = $(".pay_list li").index(this);
    $(this).addClass("pay_list_li").siblings().removeClass("pay_list_li");
    var sdkid = $("#sdkid").val();
    var prehref = $("#prehref").val();
    if (pay_list_index == 0) {
        producttype = 0 ;
        window.location.href = "/inpour/api/ready_inpour_background" + "?sdkid="+sdkid + "&href_client="+prehref+ "&producttype="+producttype;
    } else if (pay_list_index == 1) {
        producttype = 2 ;
        window.location.href = "/inpour/api/ready_inpour_background" + "?sdkid="+sdkid + "&href_client="+prehref+ "&producttype="+producttype;
    }
});
