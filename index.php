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
        var time = 1;
        var interval = setInterval(function() { 
        if (time <= 3) { 
            $.post("ping.php", function(data, status){
                $("#ping-east").append(data);
            });
            time++;
            }
        else { 
            clearInterval(interval);
        }}, 3000);
    });
</script>
</head>

<body>
    <h1></h1>
    <img src="us.png" id=us>
    <div id="ping-east"></div>
    <div id="ping-west"></div>
</body>

</html>


