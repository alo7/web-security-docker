### 存储型XSS

启动命令:

```shell
cd ./back-end/XSS/persistent
docker-compose up --build --force-recreate
```

打开浏览器，访问: [http://127.0.0.1:8083](http://127.0.0.1:8083)

现在尝试在输入框里输入下面任意一行内容:
* `<script>alert(1)</script>`
* `<svg><script>alert&#40;2)</script>`