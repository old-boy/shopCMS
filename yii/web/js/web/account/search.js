;
var account_search_ops = {
    init(){
        this.eventBind();
    },
    eventBind(){
        $('.search').on('click',function(){
            $('.wrap_search').submit();
        })
    }
};

$(function(){
    account_search_ops.init();
});