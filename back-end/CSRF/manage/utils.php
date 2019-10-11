<?php
  function checkAdminUser() {
    $userFlag =  $_COOKIE['user_flag'];

    // 判断当前是否有此cookies
    if ("" == trim($userFlag)) {
      return [];
    }

    // 以-分割字符串，并只分割一次
    $userInfoByCookies = explode('-', $userFlag, 2);

    // 判断分割后的数组长度是否为2
    if (count($userInfoByCookies) != 2) {
      return [];
    }

    $passwordByCookies = $userInfoByCookies[0];
    $usernameByCookies = $userInfoByCookies[1];

    /**
     * 以下代码至36行都是为了检测当前的访问此页面的用户是否真正的为管理员
     */
    $conn = new mysqli('db', getenv('MYSQL_USER'), getenv('MYSQL_PASSWORD'));
    if ($conn->connect_error) {
      die("数据库连接失败: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM csrf.admin WHERE username='$usernameByCookies' and password='$passwordByCookies'";
    $result = $conn->query($sql);

    if (!mysqli_num_rows($result)) {
      return [];
    }

    return [$usernameByCookies, $passwordByCookies];
  }
?>