function toast_success(head_text) {
    $.toast({
        heading: '操作成功',
        text: ''+head_text+'',
        showHideTransition: 'slide',
        icon: 'success',
        allowToastClose : false,
        hideAfter : 3000,
        stack : 10,
        textAlign : 'left',
        position : 'top-right'
    });
}


function toast_warring(head_text) {
    $.toast({
        heading: '警告',
        text: ''+head_text+'',
        showHideTransition: 'plain',
        icon: 'warning',
        allowToastClose : false,
        hideAfter : 3000,
        stack : 10,
        textAlign : 'left',
        position : 'top-right'
    });
}


function toast_error(head_text) {
    $.toast({
        heading: '错误',
        text: ''+head_text+'',
        showHideTransition: 'fade',
        icon: 'error',
        allowToastClose : false,
        hideAfter : 3000,
        stack : 10,
        textAlign : 'left',
        position : 'top-right'
    });
}

function toast_info(head_text) {
    $.toast({
        heading: '消息提示',
        text: ''+head_text+'',
        showHideTransition: 'slide',
        icon: 'info',
        allowToastClose : false,
        hideAfter : 3000,
        stack : 10,
        textAlign : 'left',
        position : 'top-right'
    });
}

function my_loading() {
    var html = ' <ul class="dowebok loading_div"> <div class="my_loading" style="text-align: center;"> <span>Loading</span> <span class="l-1"></span> <span class="l-2"></span> <span class="l-3"></span> <span class="l-4"></span> <span class="l-5"></span> <span class="l-6"></span> </div> </ul>'
    return html;
}

