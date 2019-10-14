<?php
  $name = $_GET['name'];
  $balance = $_GET['balance'];
  $fp = fopen('info.txt','a');
  fwrite($fp, "用户名:  ".$name."  余额:  ".$balance."\r\n");
?>