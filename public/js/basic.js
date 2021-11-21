function isEmpty(val) {
    if (val == "" || val == undefined || val == null) {
        return true;
    }
    return false;
}

function isRandomCode(str) {
    var g = /^[0-9]*$/;
    return g.test(str);
}

function isPInt(str) {
    var g = /^[1-9]*[1-9][0-9]*$/;
    return g.test(str);
}

function isMobile(value) {
    if (value == null || '' == value)
        return false;
    value = $.trim(value);
    var length = value.length;
    var mobile = /^(((13[0-9]{1})|(14[0-9]{1})|(15[0-9]{1})|(17[0-9]{1})|(18[0-9]{1}))+\d{8})$/;
    return (length == 11 && mobile.test(value));
}

$(function () {
    $.ajaxSetup({
        contentType: "application/x-www-form-urlencoded; charset=UTF-8",
        complete: function (XMLHttpRequest, textStatus) {
            var response_result = XMLHttpRequest.getResponseHeader("response_result");
            if (response_result != null) {
                var data = JSON.parse(response_result);
                if (data.result == 401) {
                    alert(data.msg);
                    if (window.parent == window) {
                        window.location.href = data.data;
                    } else {
                        parent.window.location.href = data.data;
                    }
                }
            }
        }
    });
});

function create_input_hidden(name) {
    var hidden = document.createElement('input');
    hidden.name = name;
    hidden.type = 'hidden';
    return hidden;
}

$.fn.pagination.defaults = {
    total: 0,
    pageSize: 10,
    pageBtnCount: 7,
    showFirstLastBtn: true,
    firstBtnText: '首页',
    lastBtnText: '尾页',
    showInfo: true,
    showJump: true,
    jumpBtnText: '跳转',
    showPageSizes: true,
    infoFormat: '{start} ~ {end}条，共{total}条',
    pageSizeItems: [5, 10, 15, 20, 50, 100],
    traditional: true
};

// 跳转我的账户
function location_mygold(producttype){
    var url = sessionStorage.getItem("basePath") + "/wallet/api/my_gold_background";
    if(producttype ==2){
        url += "&producttype="+producttype;
    }
    window.location.href = sessionStorage.getItem("pc_domain")
        + "/member/personel/user_info?nest_url="
        + encodeURIComponent(url);
}

// 跳转我的主页
function location_myindex(){
    window.location.href = sessionStorage.getItem("pc_domain")
        + "/member/personel/user_info";
}

// 跳转充值记录
function location_inpour_history(producttype){
    window.location.href = sessionStorage.getItem("pc_domain")
        + "/member/personel/user_info?nest_url="
        + encodeURIComponent(sessionStorage.getItem("basePath") + "/inpour/api/get_inpour_history_background&producttype="+producttype);
}
