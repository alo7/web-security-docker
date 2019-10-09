<?php
  // 只允许 http://127.0.0.1:8083 跨域请求
  header('Access-Control-Allow-Origin: http://127.0.0.1:8083');

  $conn = new mysqli('db', getenv('MYSQL_USER'), getenv('MYSQL_PASSWORD'));
  if ($conn->connect_error) {
    die("数据库连接失败: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM xss.message";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $arr = array();

    while($row = $result->fetch_assoc()) {
      array_push($arr, $row);
    }

    echo json_encode($arr);
  } else {
    echo json_encode([]);
  }
  $conn->close();
?>