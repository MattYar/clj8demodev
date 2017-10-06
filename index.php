<?php
include 'vulnerability.php';
?>
<!DOCTYPE html>
<html>
<head>
<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
<META HTTP-EQUIV="Expires" CONTENT="-1">
<meta charset="UTF-8">
<title>Cloud Project - Team 8</title>
<link href="style.css" rel="stylesheet">
<script src="bower_components\jquery\dist\jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        var interval = setInterval(function() { 
            $.post("ping.php", {url: 'http://clj8demo-prod-wapp.azurewebsites.net/'}, function(west){
                $.post("ping.php", {url: 'http://clj8demo-dev-wapp.azurewebsites.net/'}, function(east, status){
                
                    $("#ping-east #box").prepend(east +'<br>');
                    $("#ping-west #box").prepend(west +'<br>');
                    eastUp = east.indexOf("line") != -1;
                    westUp = west.indexOf("line") != -1;
                    if(eastUp && westUp)
                        $('#us').attr("src", "west_up_east_up.png");
                    else if(eastUp && !westUp)
                        $('#us').attr("src", "west_down_east_up.png");
                    else if(!eastUp && westUp)
                        $('#us').attr("src", "west_up_east_down.png");                
                });
            });
            
        }, 200);
        $("#ping-east #fix").click(function() {
            $.post("http://clj8demo-dev-wapp.azurewebsites.net/fix.php");
        });
        $("#ping-east #break").click(function() {
            $.post("http://clj8demo-dev-wapp.azurewebsites.net/break.php");
        });
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
            <div id=fix></div>
            <div id=break></div>
        </div>
    </div>
    <br>
    <div id=nav>
        <a href="https://starbucks.datadoghq.com/screen/224158/testoperations" target="_blank"><img src="datadog.png" id=datadog></a>
        <a href="https://github.com/MattYar/clj8demoProd" target="_blank"><img src="github.png" id=github></a>
    </div>
</body>

</html>


