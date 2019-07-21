
google.charts.load("current", {packages:['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChartOnDemand(arr) {

    var array = [
        ["Article", "Article", { role: "style" } ],
    ];

    for(var i=0; i<arr.length; i++)
        array.push(arr[i]);

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
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
        chartArea: {
            'backgroundColor': {
                'fill': '#F0EDE8',
            },
        },
        backgroundColor: '#F0EDE8',
        bar: {
            'groupWidth':20
        }

    };


    var chart = new google.visualization.ColumnChart(document.getElementById("on-demand-content-chart"));
    chart.draw(view, options);
    // console.log(chart )
}

function drawChartTreatmentTracks(arr) {

    var array = [
        ["Treatment Track", "Treatment Track", { role: "style" } ],
    ];

    for(var i=0; i<arr.length; i++)
        array.push(arr[i]);

    var data = google.visualization.arrayToDataTable(array);
    var view = new google.visualization.DataView(data);



    view.setColumns([0, 1,
        { calc: "stringify",
            sourceColumn: 1,
            type: "string",
            role: "annotation" },
        2]);
    var options = {
        title: "Patients per Treatment Track",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
        chartArea: {
            'backgroundColor': {
                'fill': '#F0EDE8',
            },
        },
        backgroundColor: '#F0EDE8',
        bar: {
            'groupWidth':20
        }

    };


    var chart = new google.visualization.ColumnChart(document.getElementById("treatment-tracks-chart"));
    chart.draw(view, options);
    // console.log(chart )
}

function drawChartSkillsets(arr) {

    var array = [
        ["Skillsets", "Skillsets", { role: "style" } ],
    ];

    for(var i=0; i<arr.length; i++)
        array.push(arr[i]);

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
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
        chartArea: {
            'backgroundColor': {
                'fill': '#F0EDE8',
            },
        },
        backgroundColor: '#F0EDE8',
        bar: {
            'groupWidth':20
        }

    };


    var chart = new google.visualization.ColumnChart(document.getElementById("skillsets-chart"));
    chart.draw(view, options);
    // console.log(chart )
}

function drawChartOnClinicianCorner(arr) {

    var array = [
        ["Article", "Article", { role: "style" } ],
    ];

    for(var i=0; i<arr.length; i++)
        array.push(arr[i]);

    var data = google.visualization.arrayToDataTable(array);
    var view = new google.visualization.DataView(data);

    view.setColumns([0, 1,
        { calc: "stringify",
            sourceColumn: 1,
            type: "string",
            role: "annotation" },
        2]);
    var options = {
        title: "Posts per Clinician (top 10 clinicians)",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
        chartArea: {
            'backgroundColor': {
                'fill': '#F0EDE8',
            },
        },
        backgroundColor: '#F0EDE8',
        bar: {
            'groupWidth':20
        }

    };


    var chart = new google.visualization.ColumnChart(document.getElementById("clinician-corner-posts-chart"));
    chart.draw(view, options);
    // console.log(chart )
}

function drawChartClinician(arr) {

    var array = [
        ["Clinician", "Clinician", { role: "style" } ],
    ];

    for(var i=0; i<arr.length; i++)
        array.push(arr[i]);

    var data = google.visualization.arrayToDataTable(array);
    var view = new google.visualization.DataView(data);

    view.setColumns([0, 1,
        { calc: "stringify",
            sourceColumn: 1,
            type: "string",
            role: "annotation" },
        2]);
    var options = {
        title: "Messages",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
        chartArea: {
            'backgroundColor': {
                'fill': '#F0EDE8',
            },
        },
        backgroundColor: '#F0EDE8',
        bar: {
            'groupWidth':20
        }

    };


    var chart = new google.visualization.LineChart(document.getElementById("clinicians-chart"));
    chart.draw(view, options);
    // console.log(chart )
}


function drawChart(array) {

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
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
        chartArea: {
            'backgroundColor': {
                'fill': '#F0EDE8',
            },
        },
        backgroundColor: '#F0EDE8',
        bar: {
            'groupWidth':20
        }

    };


    var chart = new google.visualization.ColumnChart(document.getElementById(divId));
    chart.draw(view, options);
    // console.log(chart )
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

                var ol = $('<ol></ol>');
                for(var i=0; i < array.length; i++)
                {
                    var temp = $("<li></li>").text(array[i][0]);
                    ol.append(temp);
                }

                $('#on-demand-content-list').append(ol);

                drawChartOnDemand(array);

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

        $.ajax({
            url: "getClinicianCornerPosts.php",
            method: 'POST',
            dataType: 'json',
            success: function (return_array) {
                var array = JSON.parse(return_array.array   );

                for(var i = 0; i < array.length; i++)
                {
                    array[i].push("#5EB85C");
                }

                var ol = $('<ol></ol>');
                for(var i=0; i < array.length; i++)
                {
                    var temp = $("<li></li>").text(array[i][0]);
                    ol.append(temp);
                }

                $('#clinician-corner-posts-list').append(ol);

                drawChartOnClinicianCorner(array);

                var btn1 = $("<div id='on-clinician-corner-num-1' class='dynamic_num_data'></div>").text(return_array.total_articles);
                var div1 = $("<div class='buttons-content'></div>").append(btn1);
                div1.append("Article");

                var btn2 = $("<div id='on-clinician-corner-num-2' class='dynamic_num_data'></div>").text(return_array.total_article_views);
                var div2 = $("<div class='buttons-content'></div>").append(btn2);
                div2.append("Article Views");
                var btn3 = $("<div id='on-clinician-corner-num-3' class='dynamic_num_data'></div>").text(return_array.total_articles_shares);
                var div3 = $("<div class='buttons-content'></div>").append(btn3);
                div3.append("Article Shares");

                var btn4 = $("<div id='on-clinician-corner-num-4' class='dynamic_num_data'></div>").text(return_array.posts_per_clinician);
                var div4 = $("<div class='buttons-content'></div>").append(btn4);
                div4.append("Posts Per Clinician");

                $("#clinician-corner-posts-numbers-div").append(div1);
                $("#clinician-corner-posts-numbers-div").append(div2);
                $("#clinician-corner-posts-numbers-div").append(div3);
                $("#clinician-corner-posts-numbers-div").append(div4);

            }
        });

        $.ajax({
            url: "getSkillsets.php",
            method: 'POST',
            dataType: 'json',
            success: function (return_array) {
                var array = JSON.parse(return_array.array   );

                for(var i = 0; i < array.length; i++)
                {
                    array[i].push("#5EB85C");
                }

                var ol = $('<ol></ol>');
                for(var i=0; i < array.length; i++)
                {
                    var temp = $("<li></li>").text(array[i][0]);
                    ol.append(temp);
                }

                $('#skillsets-list').append(ol);

                drawChartSkillsets(array);

                var btn1 = $("<div id='skillsets-num-1' class='dynamic_num_data'></div>").text(return_array.skillsets);
                var div1 = $("<div class='buttons-content'></div>").append(btn1);
                div1.append("skilllsets");

                $("#skillsets-numbers-div").append(div1);

            }
        });

        $.ajax({
            url: "getTreatmentTracks.php",
            method: 'POST',
            dataType: 'json',
            success: function (return_array) {
                var array = JSON.parse(return_array.array);

                for(var i = 0; i < array.length; i++)
                {
                    array[i].push("#5EB85C");
                }

                var ol = $('<ol></ol>');
                for(var i=0; i < array.length; i++)
                {
                    var temp = $("<li></li>").text(array[i][0]);
                    ol.append(temp);
                }

                $('#treatment-tracks-list').append(ol);

                drawChartTreatmentTracks(array);

                var btn1 = $("<div id='treatment-tracks-num-1' class='dynamic_num_data'></div>").text(return_array.product);
                var div1 = $("<div class='buttons-content'></div>").append(btn1);
                div1.append("Product");

                $("#treatment-tracks-numbers-div").append(div1);

            }
        });


        $.ajax({
            url: "getClinicianChart.php",
            method: 'POST',
            dataType: 'json',
            success: function (return_array) {
                var array = JSON.parse(return_array.array);

                for(var i = 0; i < array.length; i++)
                {
                    array[i].push("#5EB85C");
                }

                var ol = $('<ol></ol>');
                for(var i=0; i < array.length; i++)
                {
                    var temp = $("<li></li>").text(array[i][0]);
                    ol.append(temp);
                }

                $('#clinicians-list').append(ol);

                drawChartClinician(array);

                var btn1 = $("<div id='clinicians-num-1' class='dynamic_num_data'></div>").text(return_array.message_volume);
                var div1 = $("<div class='buttons-content'></div>").append(btn1);
                div1.append("Message Volume");

                var btn2 = $("<div id='clinicians-num-2' class='dynamic_num_data'></div>").text(return_array.alert_volume);
                var div2 = $("<div class='buttons-content'></div>").append(btn2);
                div2.append("Alert Volume");
                var btn3 = $("<div id='clinicians-num-3' class='dynamic_num_data'></div>").text(return_array.patients);
                var div3 = $("<div class='buttons-content'></div>").append(btn3);
                div3.append("Patients");

                var btn4 = $("<div id='clinicians-num-4' class='dynamic_num_data'></div>").text(return_array.alert_by_type);
                var div4 = $("<div class='buttons-content'></div>").append(btn4);
                div4.append("Alert by Type");

                var btn5 = $("<div id='clinicians-num-5' class='dynamic_num_data'></div>").text(return_array.messsages_by_clinician);
                var div5 = $("<div class='buttons-content'></div>").append(btn5);
                div5.append("Messages by Clinician");

                $("#clinicians-numbers-div").append(div1);
                $("#clinicians-numbers-div").append(div2);
                $("#clinicians-numbers-div").append(div3);
                $("#clinicians-numbers-div").append(div4);
                $("#clinicians-numbers-div").append(div5);
            }
        });


    }
);