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
            $.post("ping.php", function(data, status){
                $("#ping-east").append(data +'<br>');
            });
        }, 2000);
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


