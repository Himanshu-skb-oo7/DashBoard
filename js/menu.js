// var win = window.location.href.split('/');
// // $($("#"+win[win.length-1].split('.')[0])).addClass('active-menu');

// $($('.menu-items')[0]).removeClass('menu-items').addClass('username');
var win = window.location.href.split('/');
win = win[win.length-1].split(".")[0];

$($("#menu_id_"+win)).css({"border-left":"4px solid dodgerblue"});
$('.menu-items').click(function () {
    var content = this.innerText;
    window.location.href = "http://localhost/dashboard/pages/"+content+".php";
});


