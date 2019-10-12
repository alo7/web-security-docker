<?php
  // 只允许 http://127.0.0.1:8083 跨域请求
  header('Access-Control-Allow-Origin: http://127.0.0.1:8083');

  $conn = new mysqli('db', getenv('MYSQL_USER'), getenv('MYSQL_PASSWORD'));
  if ($conn->connect_error) {
    die("数据库连接失败: " . $conn->connect_error);
  }

  // 获取客户端的IP地址
  // 此段代码来之:https://stackoverflow.com/questions/3003145/how-to-get-the-client-ip-address-in-php
  $ipaddress = 'UNKNOWN';
  $keys = array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'REMOTE_ADDR');
  foreach($keys as $k) {
    if (isset($_SERVER[$k]) && !empty($_SERVER[$k])) {
      $ipaddress = $_SERVER[$k];
      break;
    }
  }

  // 获取发表的内容
  $content = htmlspecialchars($_POST['content'], ENT_QUOTES);

  $sql = "INSERT INTO xss.message (content, ip) VALUES ('$content', '$ipaddress')";
  $conn->query($sql);
  $conn->close();
?>