$('.menu-items').click(function () {
    var content = this.innerText;
    window.location.href = "http://localhost/dashboard/pages/"+content+".php";
});
