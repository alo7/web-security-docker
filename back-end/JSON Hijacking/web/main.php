<?php
  require 'utils.php';

  $result = getUserInfo();
  if (count($result) != 3) {
    echo "<script>location.href='index.html'</script>";
    exit();
  }
?>

<html>
  <head>
    <meta charset="utf-8">
    <title>管理页面</title>
    <link rel="stylesheet" type="text/css" href="./style.css" />
  </head>
  <body>
    <h4>欢迎回来 <span id="name"></span></h4>
    <small>您的余额还剩：<span id="balance"></span></small>
  </body>
  <script>
    function getInfo(data) {
      document.getElementById('name').innerHTML = data.name;
      document.getElementById('balance').innerHTML = data.balance;
    }
  </script>
  <script src="./json.php?callback=getInfo"></script>
</html>