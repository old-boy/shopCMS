;
var user_edit_ops = {
    init:function(){
        this.eventBind();
    },
    eventBind:function(){
        var that = this;
        $(".user_edit_wrap .save").click(function(){
            var btn_target  = $(this);
            if( btn_target.hasClass("disabled") ){
                alert("正在处理，请不要频繁点击~~");
                return;
            }

            var nickname_target = $(".user_edit_wrap input[name=nickname]");
            var nickname = nickname_target.val();

            var email_target = $(".user_edit_wrap input[name=email]");
            var email = email_target.val();

            if( !nickname || nickname.length < 2 ){
                alert("请输入符合规范的姓名~~");
                return false;
            }

            if( !email || email.length < 2 ){
                alert("请输入符合规范的邮箱地址~~");
                return false;
            }


            btn_target.addClass("disabled");

            var data = {
                nickname:nickname,
                email:email
            };

            $.ajax({
                url:'/web/user/edit',
                type:'POST',
                data:data,
                dataType:'json',
                success:function(res){
                    btn_target.removeClass("disabled");
                    var callback = null;
                    if( res.code == 200 ){
                        callback = function(){
                            window.location.href = window.location.href;
                        }
                    }
                    common_ops.alert( res.msg,callback );
                }
            });
        });
    }
};

$(function(){
    user_edit_ops.init();
});