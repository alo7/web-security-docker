<?php
  // 只允许 http://127.0.0.1:8083 跨域请求
  header('Access-Control-Allow-Origin: http://127.0.0.1:8083');

  $conn = new mysqli('db', getenv('MYSQL_USER'), getenv('MYSQL_PASSWORD'));
  if ($conn->connect_error) {
    die("数据库连接失败: " . $conn->connect_error);
  }

  $content = $_POST['content'];
  $sql = "INSERT INTO xss.message (val) VALUES ('$content')";
  $conn->query($sql);
  $conn->close();
?>