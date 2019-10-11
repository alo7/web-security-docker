<?php
  $username = $_POST['username'];
  $password = $_POST['password'];

  function goBack($message) {
    echo $message.'，3秒后跳转到登陆页面';
    echo "<script>setTimeout(() => {location.href='index.html'}, 3000)</script>";
    exit();
  }

  if ("" == trim($username) || "" == trim($password)) {
    goBack('请填写账号或密码');
  }

  $conn = new mysqli('db', getenv('MYSQL_USER'), getenv('MYSQL_PASSWORD'));
  if ($conn->connect_error) {
    die("数据库连接失败: " . $conn->connect_error);
  }

  // 对 password 进行 md5 加密，并存入数据库里
  $password = md5($password);
  $sql = "SELECT * FROM csrf.admin WHERE username='$username' and password='$password'";
  $result = $conn->query($sql);

  // 判断数据库里是否有此用户
  if (mysqli_num_rows($result)) {
    // 设置cookies，并以-分割
    setcookie('user_flag', $password.'-'.$username, time() + 3600 * 24);
    header('Location: ./main.php');
  } else {
    goBack('账号密码错误');
  }
  $conn->close();
?>