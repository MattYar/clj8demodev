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
                alert(status);
                if(status == "success")
                    $('#us').attr("src", "west_down_east_up.png");
            });
            $.post("ping.php", {url: 'http://clj8demo-dev-wapp.azurewebsites.net/'}, function(data, status){
                $("#ping-east #box").prepend(data +'<br>');
                alert(status);
                if(status == "success")
                    $('#us').attr("src", "west_down_east_up.png");
            });
        }, 1000);
    });
</script>
</head>

<body>
    <h1></h1>
    <img src="west_up_east_up.png" id=us>
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
        <a href="https://github.com/MattYar/clj8demoProd" target="_blank"><img src="github.png" id=github></a>
    </div>
</body>

</html>


