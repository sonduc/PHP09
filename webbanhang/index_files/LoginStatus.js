/***********popup addtocart loginstatus****************/
function UserInfo() {
    this.IsAuthenticated = false;
    this.Username = '';
    this.TotalQuantity = 0;
}

var currentUserInfo = new UserInfo();
document.write('<scr' + 'ipt type="text/javascript" src="/UserInfo.ashx" ></scr' + 'ipt>');
$(function() {
    $(".Basket").hover(function() {
        LoadCartItem();
//        var NoPopup = $('#NoPopup').attr('count');
//        var loaditem = $('.img-loading');
//        if (NoPopup == 0) {
//            loaditem.show();
//            $.ajax({
//                url: '/nguoi-dung/Gio-hang-popup.aspx',
//                success: function(data) {                
//                    if (NoPopup == 0) {
//                        $('.cart-contpopup').html("");
//                        $('.cart-contpopup').html($(data).find('#divContent').html());
//                        $("#lblTotalQuantity").html($(data).find('#totalcartitem').html());
//                        loaditem.hide();
//                        recallPaging();
//                        $('#NoPopup').attr('count', 1);
//                    }
//                }
//            });
//        };
    });
});


function LoadCartItem() {
    var loaditem = $('.img-loading');
    loaditem.show();
    $.ajax({
        url: '/nguoi-dung/Gio-hang-popup.aspx',
        success: function(data) {
            $('.cart-contpopup').html("");
            $('.cart-contpopup').html($(data).find('#divContent').html());
            $("#lblTotalQuantity").html($(data).find('#totalcartitem').html());
            loaditem.hide();
            recallPaging();           
        }
    });    
}
$(document).ready(function() {
    if (currentUserInfo.Username != undefined) {
        if (currentUserInfo.Username != null && currentUserInfo.Username != '') {
            $("#lblLoginName").html("<b>" + currentUserInfo.Username + "</b>");
            $("#nonLogin").attr("style", "display:none");
            $("#logon").attr("style", "display:block");
            $("#lblTotalQuantity").html(currentUserInfo.TotalQuantity);
            $("#ShowMailBox999").attr("style", "display:block");
        } else {
            $("#lblLoginName").html("");
            $("#nonLogin").attr("style", "display:block");
            $("#logon").attr("style", "display:none");
            $("#lblTotalQuantity").html(currentUserInfo.TotalQuantity);
            $("#ShowMailBox999").attr("style", "display:none");
        }
    }
});
/********************Nav Menu top*********************/
/*Paging for Popup Cart*/
function recallPaging() {    
    $('#popup_cart_paging_contn1').pajinate({
        item_container_id: '.content',
        items_per_page: 5,        
        nav_info_id: '.popup_cart_info_text',
        nav_label_prev: '<<',
        nav_label_next: '>>',
        nav_order: ["prev", "num", "next"],
        nav_label_info: '{0}-{1} của {2}'
    });
}
/*End Paging for Popup Cart*/


$(document).ready(function() {
    $("#ShowMailBox999").prettyPhoto({
        theme: 'pp_default',
        showTitle: true,
        animationSpeed: 'fast',
        deeplinking: false
    });   
});
function checkAuthen() {
    if (currentUserInfo.Username != undefined) {
        if (currentUserInfo.Username == null || currentUserInfo.Username == '') {
            window.location = "/nguoi-dung/dang-nhap.aspx?returnUrl=" + returnUrl;
        }
    }
    else {
        window.location = "/nguoi-dung/dang-nhap.aspx?returnUrl=" + returnUrl;
    }
}