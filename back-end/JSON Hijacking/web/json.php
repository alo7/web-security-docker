<?php
  require 'utils.php';

  // 用户认证、并获取用户信息
  $result = getUserInfo();
  if (count($result) != 3) {
    echo "";
    exit();
  }

  $fnName = $_GET['callback'];
  if ("" == trim($fnName)) {
    echo "";
    exit();
  }

  echo "$fnName({name: '$result[0]', balance: '$result[2]'})";
?>