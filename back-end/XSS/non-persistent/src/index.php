<?php
  // 关闭浏览器的XSS检测机制
  header("X-XSS-Protection: 0;");
?>

<html>
  <head>
    <meta charset="utf-8">
    <title>XSS - 反射XSS</title>
  </head>
  <body>
    <?php
      $bg = $_GET['bg'];
      if (empty($bg)) {
        $bg = '999';
      }
      echo "<div style='width: 120px; height: 120px; background-color:#$bg'>我是一只小方块</div>";
    ?>
  </body>
</html>