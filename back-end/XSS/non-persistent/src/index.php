<?php
  // 关闭浏览器的XSS检测机制
  header("X-XSS-Protection: 0;");
  $name = $_GET['name'];
  echo "<h1>$name</h1>"
?>