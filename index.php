<?php

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Cloud Project - Team 8</title>
<link href="style.css" rel="stylesheet">
<script src="bower_components\jquery\dist\jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        var interval = setInterval(function() { 
            $.post("ping.php", {url: 'http://clj8demo-prod-wapp.azurewebsites.net/'}, function(data, status){
                $("#ping-west #box").prepend(data +'<br>');
            });
            $.post("ping.php", {url: 'http://clj8demo-dev-wapp.azurewebsites.net/'}, function(data, status){
                $("#ping-east #box").prepend(data +'<br>');
            });
        }, 1000);
    });
</script>
</head>

<body>
    <h1></h1>
    <img src="us.png" id=us>
    <div id=ping>
        <div id="ping-west">
            <div id=title>PINGING US WEST</div>
            <div id=box></div>
        </div>
        <div id="ping-east">
            <div id=title>PINGING US EAST</div>
            <div id=box></div>
        </div>
    </div>
    <br>
    <div id=nav>
        <a href="https://starbucks.datadoghq.com/screen/224158/testoperations" target="_blank"><img src="datadog.png" id=datadog></a>
    </div>
</body>

</html>


