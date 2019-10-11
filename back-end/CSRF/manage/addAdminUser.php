<?php
  require 'utils.php';

  $result = checkAdminUser();
  if (count($result) != 2) {
    echo "<script>location.href='index.html'</script>";
    exit();
  }

  $username = $_POST['username'];
  $password = $_POST['password'];

  if ("" == trim($username) || "" == trim($password)) {
    echo "<script>location.href='index.html'</script>";
    exit();
  }

  $conn = new mysqli('db', getenv('MYSQL_USER'), getenv('MYSQL_PASSWORD'));
  if ($conn->connect_error) {
    die("数据库连接失败: " . $conn->connect_error);
  }

  // 对 password 进行 md5 加密，并存入数据库里
  $password = md5($password);
  $sql = "INSERT INTO csrf.admin (username, password) VALUES ('$username', '$password')";
  $conn->query($sql);
  $conn->close();

  echo "新建 $username 管理员用户成功";
?>