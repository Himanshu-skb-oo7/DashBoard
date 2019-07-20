var getParams = function (url) {
    var params = {};
    var parser = document.createElement('a');
    parser.href = url;
    var query = parser.search.substring(1);
    var vars = query.split('&');
    for (var i = 0; i < vars.length; i++) {
        var pair = vars[i].split('=');
        params[pair[0]] = decodeURIComponent(pair[1]);
    }
    return params;
};



$(document).ready(function () {

    var page_no = getParams(window.location.href).page_no;
    if(page_no == undefined)
        page_no = 1;

    getData(page_no);
});

function getTotalPages() {

    $.post("getFilteredData.php");
}


function getData(page_no) {
    $.ajax({
        url: "getFilteredData.php",
        method: "POST",
        data: { page_no : page_no},
        dataType: 'json',
        success:
            function(return_value)
            {
                $("#filter-patients-append").html('');
                $("#pagination").html('');
                $("#filter-patients-append").append(return_value.filtered_items);

                var page_num = Math.ceil(return_value.total_records/10);
                var i=1;

                var prev = $("<button id='page_nav_prev' class='pagination_button btn'></button>").text("<< Previous");
                $("#pagination").append(prev);

                while(i<=page_num)
                {
                    var app=$("<button id='page_nav_"+i+"' class='pagination_button btn'></button>").text(i);
                    $("#pagination").append(app);
                    i++;
                }

                var next = $("<button id='page_nav_next' class='pagination_button btn '></button>").text("Next >>");
                $("#pagination").append(next);

                $("#page_nav_"+page_no).addClass('active');


                $('.pagination_button').click(function () {
                    var page = this.getAttribute('id').split('_')[2];
                    var active_page = parseInt($(".active").attr('id').split('_')[2]);
                    active_page = parseInt(active_page);

                    if(page=='prev' || page=='next') {
                       if(page == 'prev' && active_page > '1')
                            getData(--active_page);
                        else if (page == 'next' && active_page < page_num){
                            getData(++active_page);
                        }
                    } else {
                        getData(page);
                    }
                });

            }
            }
        );
}

function setParam(page_no) {
    var url = document.location.href.split("?")[0]
    document.location = url;
}

$("#close").click(function () {
    if( $("#filter-patients").css('display') != "none") {
        $("#filter-patients").hide();
        this.innerText = "OPEN";
    } else {
        $("#filter-patients").show();
        this.innerText="CLOSE";
    }
});



$('#skillset-select').fSelect({
    placeholder: 'Select Skillset',
});

$('#clear').click(function () {
    document.getElementById('filter-patients-form').reset();
    $('#skillset-select').fSelect('reload');
});



