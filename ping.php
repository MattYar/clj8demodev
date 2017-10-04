<?php
function pingAddress($host) {
    $data = '';
  if ($host) {
    $host = preg_replace('/[^\w-_\.]/', '', $host);
    if ($host) {
      $data = shell_exec('ping -c 3 '. removeCmd($host));
    }
  }
pingAddress("127.0.0.1");

}
?>