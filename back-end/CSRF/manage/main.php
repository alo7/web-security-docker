<?php
  require 'utils.php';

  $result = checkAdminUser();
  if (count($result) != 2) {
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
    <h4>欢迎回来 <?=$result[0]?></h4>
    <div class="add-admin-user">
      <form method="post" action="addAdminUser.php">
        <div class="input-group">
            <label for="username">要添加的管理员账号: </label>
            <input type="input" name="username">
        </div>
        <div class="input-group">
            <label for="password">要添加的管理员密码: </label>
            <input type="password" name="password">
        </div>
        <div class="input-group">
          <button type="submit">添加</button>
        </div>
      </form>
    </div>
  </body>
</html>