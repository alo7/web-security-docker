<?php
  // 关闭浏览器的XSS检测机制
  header("X-XSS-Protection: 0;");

  $bg = $_GET['bg'];
	if (empty($bg)) {
    $bg = '999';
  }
  echo "<div style='width: 120px; height: 120px; background-color:#$bg'>我是一只小方块</div>";
?>