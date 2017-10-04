<?php
$content = "<?php echo ' ?>";
$fp = fopen("vulnerability.php","w+");
fwrite($fp,$content);
fclose($fp);
?>
