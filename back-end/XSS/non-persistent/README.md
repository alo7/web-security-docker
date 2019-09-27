### 反射型XSS

启动命令:

```shell
cd ./web-security-docker/back-end/XSS/non-persistent
docker-compose up
```

打开浏览器，访问: [http://127.0.0.1:8081](http://127.0.0.1:8081)

尝试把url改为下面列表的任意一个:
* `http://127.0.0.1:8081/?name=<script>alert(1)</script>`
* `http://127.0.0.1:8081/?name=<img src="" onerror=alert(1)/>`
