<html>
  <head>
    <meta charset="utf-8">
    <title>SSRF - 在线查看网页源代码</title>
    <link rel="stylesheet" type="text/css" href="./style.css" />
    <script type="text/javascript" src="./index.js"></script>
  </head>
  <body>
    <input type="text" placeholder="请输入要查看源代码的网站 URL"/>
    <button onclick="seeCode()">查看</button>
    <?php
      $url = $_GET['url'];
      if ("" == trim($url)) {
        return;
      }

      // 获取内容
      $websiteCode = file_get_contents($url);

      // 转码后存入 textarea 标签里
      echo "<textarea>".htmlspecialchars($websiteCode, ENT_QUOTES)."</textarea>";
    ?>
  </body>
</html>