<html>
<head>
    <title>
    </title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/home.css">
</head>
<body>

<?php
include 'login_check.php';
include 'menu_file.php';
include 'header.php';
?>

<div id="home">
    <div class="row" id="on-demand-content">
        <div class="row">
            <div id="on-demand-content-heading"  class="sub-heading-home">ON-DEMAND CONTENT</div>
        </div>
        <div class="row">
            <div class="col-2" id="on-demand-content-numbers-div"></div>
            <div class="col-6" id="on-demand-content-chart" ></div>
            <div class="col-4" id="on-demand-content-list"></div>
        </div>
    </div>

    <div class="row" id="clinician-corner-posts">
        <div class="row">
            <div  id="clinician-corner-posts-heading" class="sub-heading-home">CLINICIAN CORNER POSTS</div>
        </div>
        <div class="row">
            <div class="col-2" id="clinician-corner-posts-numbers-div"></div>
            <div class="col-6" id="clinician-corner-posts-chart" ></div>
            <div class="col-4" id="clinician-corner-posts-list"></div>
        </div>
    </div>


    <div class="row" id="clinicians">
        <div class="row">
            <div id="clinician-heading" class="sub-heading-home">CLINICIANS</div>
        </div>
        <div class="row">
            <div class="col-2" id="clinicians-numbers-div"></div>
            <div class="col-6" id="clinicians-chart" ></div>
            <div class="col-4" id="clinicians-list"></div>
        </div>
    </div>


    <div class="row" id="skillsets">
        <div class="row">
            <div  id="skillsets-heading" class="sub-heading-home">SKILLSETS</div>
        </div>
        <div class="row">
            <div class="col-2" id="skillsets-numbers-div"></div>
            <div class="col-6" id="skillsets-chart" ></div>
            <div class="col-4" id="skillsets-list"></div>
        </div>
    </div>

    <div class="row" id="treatment-tracks">
        <div class="row">
            <div id="treatment-tracks-heading" class="sub-heading-home">TREATMENT TRACKS</div>
        </div>
        <div class="row">
            <div class="col-2" id="treatment-tracks-numbers-div"></div>
            <div class="col-6" id="treatment-tracks-chart" ></div>
            <div class="col-4" id="treatment-tracks-list"></div>
        </div>
    </div>
</div>


</body>
<script type="text/javascript" src="https://www.google.com/jsapi?autoload=
{'modules':[{'name':'visualization','version':'1.1','packages':
['corechart']}]}"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src = "../js/home.js"></script>

</html>
