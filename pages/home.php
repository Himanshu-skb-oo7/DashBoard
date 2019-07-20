<html>
<head>
    <title>
    </title>
    <link rel="stylesheet" href="../css/home.css">
</head>
<body>

<?php
include 'login_check.php';
include 'menu_file.php';
include 'header.php';
?>

<div id="home">
    <div id="on-demand-content">
        <div id="on-demand-content-heading>" class="sub-heading-home">ON-DEMAND CONTENT</div>
        <div id="on-demand-content-numbers-div"></div>
        <div id="on-demand-content-chart"></div>
        <div id="on-demand-content-list"></div>
    </div>
</div>

</body>
<script type="text/javascript" src="https://www.google.com/jsapi?autoload=
{'modules':[{'name':'visualization','version':'1.1','packages':
['corechart']}]}"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src = "../js/home.js"></script>

</html>
