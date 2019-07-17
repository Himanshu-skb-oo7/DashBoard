$('.menu-items').click(function () {
    var content = this.innerText;

    window.location.href = "http://localhost/dashboard/pages/menu/"+content+".php";
});

console.log("cijd");