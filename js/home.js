
google.charts.load("current", {packages:['corechart']});
google.charts.setOnLoadCallback(drawChart);
function drawChart(input_data) {

    var array = [
        ["Articles", "Most Viewed Article", { role: "style" } ],
    ];

    for(var i=0; i < input_data.length; i++)
    {
        array.push(input_data[i]);
    }

    var data = google.visualization.arrayToDataTable(array);
    var view = new google.visualization.DataView(data);

    view.setColumns([0, 1,
        { calc: "stringify",
            sourceColumn: 1,
            type: "string",
            role: "annotation" },
        2]);

    var options = {
        title: "Most Popular",
        width: 300,
        height: 300,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
    };
    var chart = new google.visualization.ColumnChart(document.getElementById("on-demand-content-chart"));
    chart.draw(view, options);
}

$(document).ready(
    function () {
        $.ajax({
            url: "getOnDemandContent.php",
            method: 'POST',
            dataType: 'json',
            success: function (return_array) {
                var array = JSON.parse(return_array.array);

                for(var i = 0; i < array.length; i++)
                {
                    array[i].push("#5EB85C");
                }


                for(var i=0; i < array.length; i++)
                {
                    var temp = $("<div class='on-demand-list'></div>").text(array[i][0]);
                    $("#on-demand-content-list").append(temp);
                }

                drawChart(array);


                    var btn1 = $("<div id='on-demand-content-num-1' class='dynamic_num_data'></div>").text(return_array.total_articles);
                    var div1 = $("<div class='buttons-content'></div>").append(btn1);
                    div1.append("Article");

                    var btn2 = $("<div id='on-demand-content-num-2' class='dynamic_num_data'></div>").text(return_array.total_article_views);
                    var div2 = $("<div class='buttons-content'></div>").append(btn2);
                    div2.append("Article Views");
                    var btn3 = $("<div id='on-demand-content-num-3' class='dynamic_num_data'></div>").text(return_array.total_articles_shares);
                    var div3 = $("<div class='buttons-content'></div>").append(btn3);
                    div3.append("Article Shares");

                    var btn4 = $("<div id='on-demand-content-num-4' class='dynamic_num_data'></div>").text(return_array.total_articles_by_topic);
                    var div4 = $("<div class='buttons-content'></div>").append(btn4);
                    div4.append("Article by Topic");

                $("#on-demand-content-numbers-div").append(div1);
                $("#on-demand-content-numbers-div").append(div2);
                $("#on-demand-content-numbers-div").append(div3);
                $("#on-demand-content-numbers-div").append(div4);




            }
        });
    }
);