<?php
$content = "<?php echo ' ?>";
$fp = fopen("vulnerability.php","wa+");
fwrite($fp,$content);
fclose($fp);
?>
