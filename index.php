<?php

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>US EAST - DEV</title>
<link href="style.css" rel="stylesheet">
<script src="bower_components\jquery\dist\jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $.post("ping.php", function(data, status){
            $("#ping-east").append(data);
        });
        
    });
</script>
</head>

<body>
    <h1>US EAST - DEV</h1>
    <img src="us.png" id=us>
    <div id="ping-east"></div>
</body>

</html>


